<?php

namespace DialMyCalls\Service;

use DialMyCalls\Resource;

class Text extends Base
{
    /**
     * Create a new text broadcast.
     *
     * @param string $name             Name of the broadcast.
     * @param string $keyword_id       Unique ID of keyword.
     * @param array  $messages         List of messages to send (up to 2).
     * @param mixed  $send_at          When to send the broadcast.
     * @param string $send_immediately Whether to send the broadcast immediately or not.
     * @param string $send_email       Whether to send an accompanying email with the text.
     * @param array  $contacts         List of contacts to send the broadcast to.
     *
     * @return boolean|Resource\Service
     */
    public function create($name, $keyword_id, array $messages, $send_at, $send_immediately,
                           $send_email, array $contacts)
    {
        if ($send_at instanceof \DateTime) {
            $send_at = $send_at->format(\DateTime::ISO8601);
        }

        try {
            $response = $this->client->request('POST', 'service/text', array(
                'name'             => $name,
                'keyword_id'       => $keyword_id,
                'messages'         => $messages,
                'send_at'          => $send_at,
                'send_immediately' => $send_immediately,
                'send_email'       => (bool) $send_email,
                'contacts'         => $contacts,
            ));
            return new Resource\Service($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Retrieve a text broadcast.
     *
     * @param string $id Unique ID for the text.
     *
     * @return boolean|Resource\Service
     */
    public function get($id)
    {
        try {
            $response = $this->client->request('GET', 'service/text/' . $id);
            return new Resource\Service($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Cancel a text broadcast.
     *
     * @param string $id Unique ID for the text.
     *
     * @return boolean|Resource\Service
     */
    public function cancel($id)
    {
        try {
            $response = $this->client->request('DELETE', 'service/text/' . $id);
            return new Resource\Service($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Retrieve a list of text recipients for a given broadcast.
     *
     * @param string $id Unique ID for the text.
     *
     * @return boolean|Resource\TextRecipient[]
     */
    public function getRecipients($id)
    {
        try {
            $response = $this->client->request('GET', 'service/text/' . $id . '/recipients');

            $list = array();
            foreach ($response['results'] as $item) {
                array_push($list, new Resource\CallRecipient($item));
            }
            return $list;
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }
}
