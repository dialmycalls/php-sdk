<?php

namespace DialMyCalls\Service;

use DialMyCalls\Resource;

class Contacts extends Base
{
    /**
     * Retrieve a list of contacts.
     *
     * @param string $group_id Group ID.
     *
     * @return boolean|Resource\Contact[]
     */
    public function get($group_id = null)
    {
        try {
            $response = $this->client->request('GET', 'contacts' . ((!empty($group_id)) ? '/' . $group_id : null));

            $list = array();
            foreach ($response['results'] as $item) {
                array_push($list, new Resource\Contact($item));
            }
            return $list;
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }
}
