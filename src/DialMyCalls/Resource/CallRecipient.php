<?php

namespace DialMyCalls\Resource;

class CallRecipient
{
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $phone;
    protected $extension;
    protected $status;
    protected $duration;
    protected $add_on;
    protected $attempts;
    protected $successful;
    protected $called_at;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->firstname = (!empty($data['firstname']) ? $data['firstname'] : null);
        $this->lastname = (!empty($data['lastname']) ? $data['lastname'] : null);
        $this->email = (!empty($data['email']) ? $data['email'] : null);
        $this->phone = (!empty($data['phone']) ? $data['phone'] : null);
        $this->extension = (!empty($data['extension']) ? $data['extension'] : null);
        $this->status = (!empty($data['status']) ? $data['status'] : null);
        $this->duration = (!empty($data['duration']) ? $data['duration'] : null);
        $this->add_on = (!empty($data['add_on']) ? $data['add_on'] : null);
        $this->attempts = (!empty($data['attempts']) ? $data['attempts'] : null);
        $this->successful = (!empty($data['successful']) ?
            filter_var($data['successful'], FILTER_VALIDATE_BOOLEAN) : null);
        $this->called_at = (!empty($data['called_at']) ? $data['called_at'] : null);
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
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return integer|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return array|null
     */
    public function getAddOn()
    {
        return $this->add_on;
    }

    /**
     * @return integer|null
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * @return boolean|null
     */
    public function isSuccessful()
    {
        return $this->successful;
    }

    /**
     * @return \DateTime|null
     */
    public function getCalledAt()
    {
        if (!empty($this->called_at)) {
            try {
                return new \DateTime($this->called_at);
            } catch (\Exception $e) {
                // Do nothing.
            }
        }
        return null;
    }
}
