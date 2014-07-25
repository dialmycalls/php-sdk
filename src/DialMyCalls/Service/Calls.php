<?php

namespace DialMyCalls\Service;

use DialMyCalls\Resource;

class Calls extends Base
{
    /**
     * Retrieve a list of call broadcasts.
     *
     * @return boolean|Resource\Service[]
     */
    public function get()
    {
        try {
            $response = $this->client->request('GET', 'service/calls');

            $list = array();
            foreach ($response['results'] as $item) {
                array_push($list, new Resource\Service($item));
            }
            return $list;
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }
}
