<?php


namespace service\KitAPI\ResourceGroup;

use service\KitAPI\Component\RequestSender;
use service\KitAPI\Exception\Client\HandlerException;

class CustomMethods extends AbstractApiResourceGroup
{
    /** @var \service\KitAPI\Interfaces\RequestSenderInterface|null */
    private $requestSender;

    /** @var array<string, callable|\service\KitAPI\Component\CustomApiMethod> */
    private $methods = [];

    /**
     * @param string $name
     * @param callable $sender
     * @return void
     */
    public function register(string $name, callable $sender): void
    {
        if (null === $this->requestSender) {
            $this->requestSender = new RequestSender($this);
        }

        $this->methods[$name] = $sender;
    }

    /**
     * @param string $name
     * @param $data
     * @param array $context
     * @return mixed
     * @throws HandlerException
     */
    public function call(string $name, $data = [], array $context = [])
    {
        if (null === $this->requestSender || !array_key_exists($name, $this->methods)) {
            throw new HandlerException(sprintf('Cannot find custom method with name "%s"', $name));
        }

        return $this->methods[$name]($this->requestSender, $data, $context);
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     * @throws HandlerException
     */
    public function __call(string $name, array $arguments)
    {
        $data = [];
        $context = [];

        if (count($arguments) > 0) {
            if (!is_array($arguments[0]) && !is_object($arguments[0])) {
                throw new HandlerException(sprintf(
                    '$data must be of type array or object, %s given',
                    gettype($arguments[0])
                ));
            }

            $data = $arguments[0];
        }

        if (count($arguments) > 1) {
            if (!is_array($arguments[1])) {
                throw new HandlerException(sprintf(
                    '$context must be of type array, %s given',
                    gettype($arguments[1])
                ));
            }

            $context = $arguments[1];
        }

        return $this->call($name, $data, $context);
    }

}