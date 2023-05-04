<?php

declare(strict_types=1);

namespace service\KitAPI\Component\Serializer\Annotation;

/**
 * Class Version
 *
 * @package service\KitAPI\Component\Serializer\Annotation
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @internal
 */
abstract class Version
{
    /**
     * @Required
     * @var string
     */
    public $version;
}
