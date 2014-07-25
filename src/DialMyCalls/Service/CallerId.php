<?php

namespace DialMyCalls\Service;

use DialMyCalls\Resource;

class CallerId extends Base
{
    /**
     * Add a new phone number to be used as a caller ID.
     *
     * @param string  $phone  Phone number.
     * @param string  $name   Nickname of the phone number.
     * @param boolean $verify Flag for if the number needs to be verified.
     *
     * @return boolean|Resource\CallerId
     */
    public function add($phone, $name, $verify = true)
    {
        try {
            if ($verify) {
                $response = $this->client->request('POST', 'verify/callerid', array(
                    'phone' => $phone,
                    'name'  => $name,
                ));
            } else {
                $response = $this->client->request('POST', 'callerid', array(
                    'phone' => $phone,
                    'name'  => $name,
                ));
            }
            return new Resource\CallerId($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Verify a new caller ID with the PIN that was provided over the phone.
     *
     * @param string $id
     * @param string $pin
     *
     * @return boolean|Resource\CallerId
     */
    public function verify($id, $pin)
    {
        try {
            $response = $this->client->request('PUT', 'verify/callerid/' . $id, array(
                'pin' => $pin,
            ));
            return new Resource\CallerId($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Retrieve a caller ID.
     *
     * @param string $id Unique ID for the caller ID.
     *
     * @return boolean|Resource\CallerId
     */
    public function get($id)
    {
        try {
            $response = $this->client->request('GET', 'callerid/' . $id);
            return new Resource\CallerId($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Update a caller ID.
     *
     * @param string $id   Unique ID for the caller ID.
     * @param string $name Nickname of the phone number.
     *
     * @return boolean|Resource\CallerId
     */
    public function update($id, $name)
    {
        try {
            $response = $this->client->request('PUT', 'callerid/' . $id, array(
                'name' => $name,
            ));
            return new Resource\CallerId($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Delete a caller ID.
     *
     * @param string $id Unique ID for the caller ID.
     *
     * @return boolean|Resource\CallerId
     */
    public function delete($id)
    {
        try {
            $response = $this->client->request('DELETE', 'callerid/' . $id);
            return new Resource\CallerId($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }
}
