<?php

namespace DialMyCalls\Service;

use DialMyCalls\Resource;

class VanityNumbers extends Base
{
    /**
     * Retrieve a list of vanity numbers.
     *
     * @return boolean|Resource\VanityNumber[]
     */
    public function get()
    {
        try {
            $response = $this->client->request('GET', 'vanitynumbers');

            $list = array();
            foreach ($response['results'] as $item) {
                array_push($list, new Resource\VanityNumber($item));
            }
            return $list;
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }
}
