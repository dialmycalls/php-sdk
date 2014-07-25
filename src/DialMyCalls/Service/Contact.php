<?php

namespace DialMyCalls\Service;

use DialMyCalls\Resource;

class Contact extends Base
{
    /**
     * Add a new contact.
     *
     * @param string $firstname Contact's first name.
     * @param string $lastname  Contact's last name.
     * @param string $phone     Contact's phone number.
     * @param string $extension Contact's extension.
     * @param string $email     Contact's email address.
     * @param string $extra1    Extra data about this contact.
     * @param array  $groups    Groups that the contact belongs to.
     *
     * @return boolean|Resource\Contact
     */
    public function add($firstname, $lastname, $phone, $extension, $email, $extra1 = null, array $groups = array())
    {
        try {
            $response = $this->client->request('POST', 'contact', array(
                'firstname' => $firstname,
                'lastname'  => $lastname,
                'phone'     => $phone,
                'extension' => $extension,
                'email'     => $email,
                'extra1'    => $extra1,
                'groups'    => $groups,
            ));
            return new Resource\Contact($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Retrieve a contact.
     *
     * @param string $id Unique ID for the contact.
     *
     * @return boolean|Resource\Contact
     */
    public function get($id)
    {
        try {
            $response = $this->client->request('GET', 'contact/' . $id);
            return new Resource\Contact($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Update a contact.
     *
     * @param string $id        Unique ID for the contact.
     * @param string $firstname Contact's first name.
     * @param string $lastname  Contact's last name.
     * @param string $phone     Contact's phone number.
     * @param string $extension Contact's extension.
     * @param string $email     Contact's email address.
     * @param string $extra1    Extra data about this contact.
     * @param array  $groups    Groups that the contact belongs to.
     *
     * @return boolean|Resource\Contact
     */
    public function update($id, $firstname, $lastname, $phone, $extension, $email, $extra1 = null,
        array $groups = array())
    {
        try {
            $response = $this->client->request('PUT', 'contact/' . $id, array(
                'firstname' => $firstname,
                'lastname'  => $lastname,
                'phone'     => $phone,
                'extension' => $extension,
                'email'     => $email,
                'extra1'    => $extra1,
                'groups'    => $groups,
            ));
            return new Resource\Contact($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }

    /**
     * Delete a contact.
     *
     * @param string $id Unique ID for the contact.
     *
     * @return boolean|Resource\Contact
     */
    public function delete($id)
    {
        try {
            $response = $this->client->request('DELETE', 'contact/' . $id);
            return new Resource\Contact($response['results']);
        } catch (\Exception $e) {
            $this->exception = $e;
        }

        return false;
    }
}
