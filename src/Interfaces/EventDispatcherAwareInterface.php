<?php

namespace service\KitAPI\Interfaces;

use Psr\EventDispatcher\EventDispatcherInterface;

interface EventDispatcherAwareInterface
{

    /**
     * @param EventDispatcherInterface|null $eventDispatcher
     */
    public function setEventDispatcher(?EventDispatcherInterface $eventDispatcher);
}