<?php

namespace DialMyCalls\Service;

use DialMyCalls\Resource;

class Account extends Base
{
    /**
     * Retrieve account information.
     *
     * @return boolean|Resource\Account
     */
    public function get()
    {
        try {
            $response = $this->client->request('GET', 'account');
            return new Resource\Account($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }
}
