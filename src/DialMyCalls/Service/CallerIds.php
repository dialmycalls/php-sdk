<?php

namespace DialMyCalls\Service;

use DialMyCalls\Resource;

class CallerIds extends Base
{
    /**
     * Retrieve a list of caller IDs.
     *
     * @return boolean|Resource\CallerId[]
     */
    public function get()
    {
        try {
            $response = $this->client->request('GET', 'callerids');

            $list = array();
            foreach ($response['results'] as $item) {
                array_push($list, new Resource\CallerId($item));
            }
            return $list;
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }
}
