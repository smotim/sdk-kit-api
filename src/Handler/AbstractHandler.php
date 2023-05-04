<?php

namespace service\KitAPI\Handler;

use service\KitAPI\Interfaces\HandlerInterface;

abstract class AbstractHandler implements HandlerInterface
{
    /** @var HandlerInterface */
    private $next;

    public function handle($item)
    {
        if ($this->next !== null) {
            return $this->next->handle($item);
        }

        return null;
    }

    /**
     * @param HandlerInterface $handler
     * @return HandlerInterface
     */
    public function setNext(HandlerInterface $handler): HandlerInterface
    {
       $this->next = $handler;
       return $handler;
    }

    /**
     * @return HandlerInterface|null
     */
    public function getNext(): ?HandlerInterface
    {
        return $this->next;
    }

    public function append(HandlerInterface $handler): HandlerInterface
    {
        $this->getLastHandler()->setNext($handler);
        return $handler;
    }

    public function getLastHandler(): HandlerInterface
    {
        $lastHandler = $this;

        while ($lastHandler->getNext() !== null) {
            $lastHandler = $lastHandler->getNext();
        }

        return $lastHandler;
    }


}