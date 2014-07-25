<?php

namespace DialMyCalls\Service;

use DialMyCalls\Pagination;
use DialMyCalls\Resource;

class Groups extends Base
{
    /**
     * Retrieve a list of contacts.
     *
     * @param Pagination $pagination Pagination object.
     *
     * @return boolean|Resource\Group[]
     */
    public function get(Pagination $pagination = null)
    {
        try {
            $response = $this->client->request('GET', 'groups', array(), $pagination);

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
