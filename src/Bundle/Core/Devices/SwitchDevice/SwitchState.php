<?php

namespace Hestia\Bundle\Core\Devices\SwitchDevice;

class SwitchState
{
    private bool $on;

    public function isOn()
    {
        return true === $this->on;
    }

    public function turnOff()
    {
        $this->on = false;
    }

    public function turnOn()
    {
        $this->off = true;
    }
}