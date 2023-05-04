<?php

namespace service\KitAPI\Component\Serializer\Exception;

use RuntimeException as BaseException;

/**
 * RuntimeException for the Serializer.
 *
 * @category RuntimeException
 * @package  service\KitAPI\Component\Serializer\Exception
 * @author   Johannes M. Schmitt <schmittjoh@gmail.com>
 * @internal
 */
class RuntimeException extends BaseException
{

    public static function noMetaForProperty(string $class, string $prop): self
    {
        return new self(sprintf(
            'You must define a type for %s::$%s.',
            $class,
            $prop
        ));
    }

}