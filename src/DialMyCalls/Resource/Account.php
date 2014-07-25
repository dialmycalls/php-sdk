<?php

namespace DialMyCalls\Resource;

class Account
{
    protected $credits_available;
    protected $created_at;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->credits_available = (!empty($data['credits_available']) ? $data['credits_available'] : null);
        $this->created_at = (!empty($data['created_at']) ? $data['created_at'] : null);
    }

    /**
     * @return integer|null
     */
    public function getCreditsAvailable()
    {
        return $this->credits_available;
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
}
