<?php

namespace Serializer\Generator;

use Serializer\GeneratorInterface;

class HttpBuildQuery implements GeneratorInterface
{

    /*
     * (non-PHPdoc)
     * @see \Serializer\GeneratorInterface::serialize()
     */
    public function serialize($value)
    {
        return http_build_query($value);
    }

    /*
     * (non-PHPdoc)
     * @see \Serializer\GeneratorInterface::unserialize()
     */
    public function unserialize($value)
    {
        parse_str($value, $output);
        return $output;
    }
}