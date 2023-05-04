<?php

namespace service\KitAPI\Interfaces;

interface HandlerInterface
{
    /**
     * @param mixed $item
     * @return mixed
     */
    public function handle($item);

    /**
     * @param HandlerInterface $handler
     * @return HandlerInterface
     */
    public function setNext(HandlerInterface $handler): HandlerInterface;

    /**
     * @return HandlerInterface
     */
    public function getNext(): ?HandlerInterface;

    /**
     * @param HandlerInterface $handler
     * @return HandlerInterface
     */
    public function append(HandlerInterface $handler): HandlerInterface;


    /**
     * @return HandlerInterface
     */
    public function getLastHandler(): HandlerInterface;

}