<?php

namespace Serializer\Generator;

use Serializer\GeneratorInterface;

class Wddx implements GeneratorInterface
{

    /*
     * (non-PHPdoc)
     * @see \Serializer\GeneratorInterface::serialize()
     */
    public function serialize($value)
    {
        return wddx_serialize_value($value);
    }

    /*
     * (non-PHPdoc)
     * @see \Serializer\GeneratorInterface::unserialize()
     */
    public function unserialize($value)
    {
        return wddx_deserialize($value);
    }
}