<?php

namespace DialMyCalls\Service;

use DialMyCalls\Resource;

class VanityNumber extends Base
{
    /**
     * Retrieve a vanity number.
     *
     * @param string $id Unique ID for the vanity number.
     *
     * @return boolean|Resource\VanityNumber
     */
    public function get($id)
    {
        try {
            $response = $this->client->request('GET', 'vanitynumber/' . $id);
            return new Resource\VanityNumber($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Delete a vanity number.
     *
     * @param string  $id Unique ID for the vanity number.
     *
     * @return boolean|Resource\VanityNumber
     */
    public function delete($id)
    {
        try {
            $response = $this->client->request('DELETE', 'vanitynumber/' . $id);
            return new Resource\VanityNumber($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }
}
