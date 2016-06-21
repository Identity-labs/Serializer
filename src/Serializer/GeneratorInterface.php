<?php

namespace Serializer;

interface GeneratorInterface {
    
    /**
     * return string
     */
    public function serialize($data);
    
    /**
     * return mixed
     */
    public function unserialize($value);
    
}