<?php

namespace DialMyCalls\Service;

use DialMyCalls\Pagination;
use DialMyCalls\Resource;

class Texts extends Base
{
    /**
     * Retrieve a list of text broadcasts.
     *
     * @param Pagination $pagination Pagination object.
     *
     * @return boolean|Resource\Service[]
     */
    public function get(Pagination $pagination = null)
    {
        try {
            $response = $this->client->request('GET', 'service/texts', array(), $pagination);

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
