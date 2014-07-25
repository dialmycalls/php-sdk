<?php

namespace DialMyCalls\Resource;

class VanityNumber
{
    protected $id;
    protected $phone;
    protected $status;
    protected $minutes_used;
    protected $minutes_allowed;
    protected $voicemails_new;
    protected $voicemails_old;
    protected $created_at;
    protected $updated_at;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->id = (!empty($data['id']) ? $data['id'] : null);
        $this->phone = (!empty($data['phone']) ? $data['phone'] : null);
        $this->status = (!empty($data['status']) ? $data['status'] : null);
        $this->minutes_used = (!empty($data['minutes_used']) ? $data['minutes_used'] : null);
        $this->minutes_allowed = (!empty($data['minutes_allowed']) ? $data['minutes_allowed'] : null);
        $this->voicemails_new = (!empty($data['voicemails_new']) ? $data['voicemails_new'] : null);
        $this->voicemails_old = (!empty($data['voicemails_old']) ? $data['voicemails_old'] : null);
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
     * @return float|null
     */
    public function getMinutesUsed()
    {
        return $this->minutes_used;
    }

    /**
     * @return float|null
     */
    public function getMinutesAllowed()
    {
        return $this->minutes_allowed;
    }

    /**
     * @return integer|null
     */
    public function getVoicemailsNew()
    {
        return $this->voicemails_new;
    }

    /**
     * @return integer|null
     */
    public function getVoicemailsOld()
    {
        return $this->voicemails_old;
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
