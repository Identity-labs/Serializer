<?php

namespace Serializer\Generator;

use Serializer\GeneratorInterface;

class Json implements GeneratorInterface
{

    /*
     * (non-PHPdoc)
     * @see \Serializer\GeneratorInterface::serialize()
     */
    public function serialize($value)
    {
        return json_encode($value);
    }

    /*
     * (non-PHPdoc)
     * @see \Serializer\GeneratorInterface::unserialize()
     */
    public function unserialize($value)
    {
        return json_decode($value);
    }
}