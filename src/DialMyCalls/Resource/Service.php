<?php

namespace DialMyCalls\Resource;

class Service
{
    protected $id;
    protected $name;
    protected $pending_cancel;
    protected $credit_cost;
    protected $send_at;
    protected $created_at;
    protected $updated_at;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->id = (!empty($data['id']) ? $data['id'] : null);
        $this->name = (!empty($data['name']) ? $data['name'] : null);
        $this->pending_cancel = (!empty($data['pending_cancel']) ?
            filter_var($data['pending_cancel'], FILTER_VALIDATE_BOOLEAN) : null);
        $this->credit_cost = (!empty($data['credit_cost']) ? $data['credit_cost'] : null);
        $this->send_at = (!empty($data['send_at']) ? $data['send_at'] : null);
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
     * @return boolean|null
     */
    public function isPendingCancel()
    {
        return $this->pending_cancel;
    }

    /**
     * @return float|null
     */
    public function getCreditCost()
    {
        return $this->credit_cost;
    }

    /**
     * @return \DateTime|null
     */
    public function getSendAt()
    {
        if (!empty($this->send_at)) {
            try {
                return new \DateTime($this->send_at);
            } catch (\Exception $e) {
                // Do nothing.
            }
        }
        return null;
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
