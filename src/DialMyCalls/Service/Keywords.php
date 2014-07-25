<?php

namespace DialMyCalls\Service;

use DialMyCalls\Resource;

class Keywords extends Base
{
    /**
     * Retrieve a list of keywords.
     *
     * @return boolean|Resource\Keyword[]
     */
    public function get()
    {
        try {
            $response = $this->client->request('GET', 'keywords');

            $list = array();
            foreach ($response['results'] as $item) {
                array_push($list, new Resource\Keyword($item));
            }
            return $list;
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }
}
