<?php

namespace DialMyCalls\Service;

use DialMyCalls\Resource;

class Recording extends Base
{
    /**
     * Add a new recording - Text-to-Speech.
     *
     * @param string $name     The recording's name.
     * @param string $gender   The gender of the recording.
     * @param string $language The recording language.
     * @param string $text     The text to convert to speech.
     *
     * @return boolean|Resource\Recording
     */
    public function addTts($name, $gender, $language, $text)
    {
        try {
            $response = $this->client->request('POST', 'recording/tts', array(
                'name'     => $name,
                'gender'   => $gender,
                'language' => $language,
                'text'     => $text,
            ));
            return new Resource\Recording($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Add a new recording - URL.
     *
     * @param string $name The recording's name.
     * @param string $url  The URL of the MP3 or WAV.
     *
     * @return boolean|Resource\Recording
     */
    public function addUrl($name, $url)
    {
        try {
            $response = $this->client->request('POST', 'recording/url', array(
                'name' => $name,
                'url'  => $url,
            ));
            return new Resource\Recording($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Retrieve a recording.
     *
     * @param string $id Unique ID for the recording.
     *
     * @return boolean|Resource\Recording
     */
    public function get($id)
    {
        try {
            $response = $this->client->request('GET', 'recording/' . $id);
            return new Resource\Recording($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Update a recording.
     *
     * @param string $id   Unique ID for the recording.
     * @param string $name The recording's name.
     *
     * @return boolean|Resource\Recording
     */
    public function update($id, $name)
    {
        try {
            $response = $this->client->request('PUT', 'recording/' . $id, array(
                'name' => $name,
            ));
            return new Resource\Recording($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Delete a recording.
     *
     * @param string $id Unique ID for the recording.
     *
     * @return boolean|Resource\Recording
     */
    public function delete($id)
    {
        try {
            $response = $this->client->request('DELETE', 'recording/' . $id);
            return new Resource\Recording($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }
}
