<?php

namespace service\KitAPI\Exception\Client;

use service\KitAPI\Builder\ClientBuilder;
use service\KitAPI\Exception\ClientException;

class BuilderException extends ClientException
{

    /** @var string[] */
    private $invalidArguments;

    /**
     * @param $message
     * @param array $invalidArguments
     * @param $code
     * @param \Throwable|null $previous
     */
    public function __construct($message = "", array $invalidArguments = [], $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->invalidArguments = $invalidArguments;
    }

    /**
     * @return array|string[]
     */
    public function getInvalidArgument(): array
    {
        return $this->invalidArguments;
    }

}