<?php

namespace Serializer\Generator;

use Serializer\GeneratorInterface;

class VarExport implements GeneratorInterface
{

    /*
     * (non-PHPdoc)
     * @see \Serializer\GeneratorInterface::serialize()
     */
    public function serialize($value)
    {
        return var_export($value, true);
    }

    /*
     * (non-PHPdoc)
     * @see \Serializer\GeneratorInterface::unserialize()
     */
    public function unserialize($value)
    {
        return eval('return ' . $value . ';');
    }
}