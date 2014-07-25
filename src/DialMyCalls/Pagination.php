<?php

namespace DialMyCalls;

class Pagination
{
    protected $start;
    protected $end;

    /**
     * Constructor.
     *
     * @param integer $start Return records starting at..
     * @param integer $end   Return records ending at.
     */
    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * Set the starting position.
     *
     * @param integer $start Starting position.
     */
    public function setStart($start)
    {
        $this->start = $start;
    }

    /**
     * Get the starting position.
     *
     * @return integer
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set the ending position.
     *
     * @param integer $end Ending position.
     */
    public function setEnd($end)
    {
        $this->end = $end;
    }

    /**
     * Get the ending position.
     *
     * @return integer
     */
    public function getEnd()
    {
        return $this->end;
    }
}
