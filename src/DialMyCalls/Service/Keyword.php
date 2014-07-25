<?php

namespace DialMyCalls\Service;

use DialMyCalls\Resource;

class Keyword extends Base
{
    /**
     * Retrieve a keyword.
     *
     * @param string $id Unique ID for the keyword.
     *
     * @return boolean|Resource\Keyword
     */
    public function get($id)
    {
        try {
            $response = $this->client->request('GET', 'keyword/' . $id);
            return new Resource\Keyword($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Delete a keyword.
     *
     * @param string  $id Unique ID for the keyword.
     *
     * @return boolean|Resource\Keyword
     */
    public function delete($id)
    {
        try {
            $response = $this->client->request('DELETE', 'keyword/' . $id);
            return new Resource\Keyword($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }
}
