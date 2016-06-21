<?php

namespace Serializer\Generator;

use Serializer\GeneratorInterface;

class Implode implements GeneratorInterface
{

    /*
     * (non-PHPdoc)
     * @see \Serializer\GeneratorInterface::serialize()
     */
    public function serialize($value)
    {
        return implode(',', $value);
    }

    /*
     * (non-PHPdoc)
     * @see \Serializer\GeneratorInterface::unserialize()
     */
    public function unserialize($value)
    {
        return explode(',', $value);
    }
}