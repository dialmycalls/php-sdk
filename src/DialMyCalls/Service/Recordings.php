<?php

namespace DialMyCalls\Service;

use DialMyCalls\Resource;

class Recordings extends Base
{
    /**
     * Retrieve a list of contacts.
     *
     * @return boolean|Resource\Recording[]
     */
    public function get()
    {
        try {
            $response = $this->client->request('GET', 'recordings');

            $list = array();
            foreach ($response['results'] as $item) {
                array_push($list, new Resource\Recording($item));
            }
            return $list;
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }
}
