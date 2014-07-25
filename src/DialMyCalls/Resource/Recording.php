<?php

namespace DialMyCalls\Resource;

class Recording
{
    protected $id;
    protected $name;
    protected $type;
    protected $seconds;
    protected $url;
    protected $processed;
    protected $created_at;
    protected $updated_at;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->id = (!empty($data['id']) ? $data['id'] : null);
        $this->name = (!empty($data['name']) ? $data['name'] : null);
        $this->type = (!empty($data['type']) ? $data['type'] : null);
        $this->seconds = (!empty($data['seconds']) ? $data['seconds'] : null);
        $this->url = (!empty($data['url']) ? $data['url'] : null);
        $this->processed = (!empty($data['processed']) ?
            filter_var($data['processed'], FILTER_VALIDATE_BOOLEAN) : null);
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return integer|null
     */
    public function getSeconds()
    {
        return $this->seconds;
    }

    /**
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return boolean|null
     */
    public function isProcessed()
    {
        return $this->processed;
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
