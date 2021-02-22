<?php

namespace Hestia\Bundle\Core\Devices\SwitchDevice;

use Symfony\Component\Messenger\MessageBusInterface;

class SwitchService
{
    private MessageBusInterface $bus;

    public function __construct(MessageBusInterface $bus)
    {
        $this->bus = $bus;
    }

    public function update(SwitchDevice $device, array $payload)
    {
    }
}