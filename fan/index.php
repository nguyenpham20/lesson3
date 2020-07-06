<?php
class Fan {
    CONST SLOW = 1;
    CONST MEDIUM = 2;
    CONST FAST = 3;

    private $speed;
    private $on;
    private $radius;
    private $color;

    public function __construct()
    {
        $this->speed = self::SLOW;
        $this->on = FALSE;
        $this->radius = 5;
        $this->color = "Blue";
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return bool
     */
    public function isOn()
    {
        return $this->on;
    }

    /**
     * @param bool $on
     */
    public function setOn($on)
    {
        $this->on = $on;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }


    public function __toString()
    {
        // TODO: Implement __toString() method.
        if ($this->isOn() == TRUE) {
            return "Toc do cua quat la: " .$this->getSpeed().
                "<br/>Mau cua quat la: " .$this->getColor().
                "<br/>Ban kinh cua quat la: " .$this->getRadius().
                "<br/> fan is on";
        } else {
            return "Mau cua quat la: " .$this->getColor().
                "<br/>Ban kinh cua quat la: ".$this->getRadius().
                "<br/>fan is off";
        }
    }


}
