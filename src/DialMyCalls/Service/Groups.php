<?php

namespace DialMyCalls\Service;

use DialMyCalls\Resource;

class Groups extends Base
{
    /**
     * Retrieve a list of contacts.
     *
     * @return boolean|Resource\Group[]
     */
    public function get()
    {
        try {
            $response = $this->client->request('GET', 'groups');

            $list = array();
            foreach ($response['results'] as $item) {
                array_push($list, new Resource\Group($item));
            }
            return $list;
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }
}
