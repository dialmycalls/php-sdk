<?php

namespace DialMyCalls\Service;

use DialMyCalls\Resource;

class Call extends Base
{
    /**
     * Create a new call broadcast.
     *
     * @param string $name             Name of the broadcast.
     * @param string $callerid_id      Unique ID of caller ID.
     * @param string $recording_id     Unique ID of recording.
     * @param mixed  $send_at          When to send the broadcast.
     * @param string $send_immediately Whether to send the broadcast immediately or not.
     * @param string $use_amd          Whether to use answering machine detection.
     * @param string $send_email       Whether to send an accompanying email with the phone call.
     * @param array  $contacts         List of contacts to send the broadcast to.
     * @param array  $add_ons          List of call add-ons.
     *
     * @return boolean|Resource\Service
     */
    public function create($name, $callerid_id, $recording_id, $send_at, $send_immediately, $use_amd,
                           $send_email, array $contacts, array $add_ons = null)
    {
        if ($send_at instanceof \DateTime) {
            $send_at = $send_at->format(\DateTime::ISO8601);
        }

        try {
            $response = $this->client->request('POST', 'service/call', array(
                'name'             => $name,
                'callerid_id'      => $callerid_id,
                'recording_id'     => $recording_id,
                'send_at'          => $send_at,
                'send_immediately' => $send_immediately,
                'use_amd'          => (bool) $use_amd,
                'send_email'       => (bool) $send_email,
                'contacts'         => $contacts,
                'add_ons'          => $add_ons,
            ));
            return new Resource\Service($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Retrieve a call.
     *
     * @param string $id Unique ID for the call.
     *
     * @return boolean|Resource\Service
     */
    public function get($id)
    {
        try {
            $response = $this->client->request('GET', 'service/call/' . $id);
            return new Resource\Service($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Cancel a call.
     *
     * @param string $id Unique ID for the call.
     *
     * @return boolean|Resource\Service
     */
    public function cancel($id)
    {
        try {
            $response = $this->client->request('DELETE', 'service/call/' . $id);
            return new Resource\Service($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Retrieve a list of call recipients for a given broadcast.
     *
     * @param string $id Unique ID for the call.
     *
     * @return boolean|Resource\CallRecipient[]
     */
    public function getRecipients($id)
    {
        try {
            $response = $this->client->request('GET', 'service/call/' . $id . '/recipients');

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
