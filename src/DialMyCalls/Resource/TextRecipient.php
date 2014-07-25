<?php

namespace DialMyCalls\Resource;

class TextRecipient
{
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $phone;
    protected $status;
    protected $successful;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->firstname = (!empty($data['firstname']) ? $data['firstname'] : null);
        $this->lastname = (!empty($data['lastname']) ? $data['lastname'] : null);
        $this->email = (!empty($data['email']) ? $data['email'] : null);
        $this->phone = (!empty($data['phone']) ? $data['phone'] : null);
        $this->status = (!empty($data['status']) ? $data['status'] : null);
        $this->successful = (!empty($data['successful']) ?
            filter_var($data['successful'], FILTER_VALIDATE_BOOLEAN) : null);
    }

    /**
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstname;
    }

    /**
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastname;
    }

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return boolean|null
     */
    public function isSuccessful()
    {
        return $this->successful;
    }
}
