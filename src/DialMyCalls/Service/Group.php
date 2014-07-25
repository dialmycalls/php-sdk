<?php

namespace DialMyCalls\Service;

use DialMyCalls\Resource;

class Group extends Base
{
    /**
     * Add a new group.
     *
     * @param string $name The group's name.
     *
     * @return boolean|Resource\Group
     */
    public function add($name)
    {
        try {
            $response = $this->client->request('POST', 'group', array(
                'name' => $name,
            ));
            return new Resource\Group($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Retrieve a group.
     *
     * @param string $id Unique ID for the group.
     *
     * @return boolean|Resource\Group
     */
    public function get($id)
    {
        try {
            $response = $this->client->request('GET', 'group/' . $id);
            return new Resource\Group($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Update a group.
     *
     * @param string $id   Unique ID for the group.
     * @param string $name The group's name.
     *
     * @return boolean|Resource\Group
     */
    public function update($id, $name)
    {
        try {
            $response = $this->client->request('PUT', 'group/' . $id, array(
                'name' => $name,
            ));
            return new Resource\Group($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Delete a group.
     *
     * @param string $id Unique ID for the group.
     *
     * @return boolean|Resource\Group
     */
    public function delete($id)
    {
        try {
            $response = $this->client->request('DELETE', 'group/' . $id);
            return new Resource\Group($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }
}
