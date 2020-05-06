<?php

namespace pasuli\Entity\Cells;

class HealthyHabits extends AbstractCell 
{
    /**
     * Habits time of day
     * 
     * @var string
     */
    protected $daytime;

    /**
     * Health points gain
     * 
     * @var int
     */
    protected $health_gain;

    /**
     * HealthyHabits constructor.
     * 
     * @param string $title
     * @param int $health_gain
     * @param string $desc
     * @param string $daytime 
     */
    public function __construct(string $title, string $desc, int $health_gain, 
                                string $daytime)
    {
        parent::__construct($title);

        $this->desc = $desc;
        $this->health_gain = $health_gain;
        $this->daytime = $daytime;
    }   

}