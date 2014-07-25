<?php

namespace DialMyCalls\Resource;

class Contact
{
    protected $id;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $phone;
    protected $extension;
    protected $extra1;
    protected $groups;
    protected $created_at;
    protected $updated_at;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->id = (!empty($data['id']) ? $data['id'] : null);
        $this->firstname = (!empty($data['firstname']) ? $data['firstname'] : null);
        $this->lastname = (!empty($data['lastname']) ? $data['lastname'] : null);
        $this->email = (!empty($data['email']) ? $data['email'] : null);
        $this->phone = (!empty($data['phone']) ? $data['phone'] : null);
        $this->extension = (!empty($data['extension']) ? $data['extension'] : null);
        $this->extra1 = (!empty($data['extra1']) ? $data['extra1'] : null);
        $this->groups = (!empty($data['groups']) ? $data['groups'] : null);
        $this->created_at = (!empty($data['created_at']) ? $data['created_at'] : null);
        $this->updated_at = (!empty($data['updated_at']) ? $data['updated_at'] : null);
    }

    /**
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
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
    public function getExtra1()
    {
        return $this->extra1;
    }

    /**
     * @return array|null
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        if (!empty($this->created_at)) {
            try {
                return new \DateTime($this->created_at);
            } catch (\Exception $e) {
                // Do nothing.
            }
        }
        return null;
    }

    /**
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        if (!empty($this->updated_at)) {
            try {
                return new \DateTime($this->updated_at);
            } catch (\Exception $e) {
                // Do nothing.
            }
        }
        return null;
    }
}
