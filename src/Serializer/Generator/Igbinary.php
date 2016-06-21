<?php

namespace Serializer\Generator;

use Serializer\GeneratorInterface;

class Igbinary implements GeneratorInterface
{

    /*
     * (non-PHPdoc)
     * @see \Serializer\GeneratorInterface::serialize()
     */
    public function serialize($value)
    {
        return igbinary_serialize($value);
    }

    /*
     * (non-PHPdoc)
     * @see \Serializer\GeneratorInterface::unserialize()
     */
    public function unserialize($value)
    {
        return igbinary_unserialize($value);
    }
}