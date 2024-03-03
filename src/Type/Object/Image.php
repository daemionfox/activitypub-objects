<?php

namespace AP\Type\Object;

use AP\Type\Core\APObjectInterface;

class Image extends Document implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Image
     *
     * An image document of any kind 
     */

    protected string $type = 'Image';
}