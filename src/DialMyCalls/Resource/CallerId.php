<?php

namespace DialMyCalls\Resource;

class CallerId
{
    protected $id;
    protected $name;
    protected $phone;
    protected $approved;
    protected $created_at;
    protected $updated_at;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->id = (!empty($data['id']) ? $data['id'] : null);
        $this->name = (!empty($data['name']) ? $data['name'] : null);
        $this->phone = (!empty($data['phone']) ? $data['phone'] : null);
        $this->approved = (!empty($data['approved']) ? filter_var($data['approved'], FILTER_VALIDATE_BOOLEAN) : null);
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return boolean|null
     */
    public function isApproved()
    {
        return $this->approved;
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
