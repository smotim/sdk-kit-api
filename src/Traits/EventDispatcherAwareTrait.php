<?php

namespace service\KitAPI\Traits;

use Psr\EventDispatcher\EventDispatcherInterface;

trait EventDispatcherAwareTrait
{
    /**
     * @var EventDispatcherInterface|null
     */
    protected $eventDispatcher;

    /**
     * @param EventDispatcherInterface|null $eventDispatcher
     * @return object
     */
    public function setEventDispatcher(?EventDispatcherInterface $eventDispatcher): object
    {
        $this->eventDispatcher = $eventDispatcher;
        return $this;
    }

    /**
     * @param object $event
     * @return void
     */
    protected function dispatch(object $event): void
    {
        if ($this->eventDispatcher !== null) {
            $this->eventDispatcher->dispatch($event);
        }
    }

}