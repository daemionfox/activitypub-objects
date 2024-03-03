<?php

namespace AP\Type\Object;

use AP\Type\Core\APObjectInterface;

class Video extends Document implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Video
     *
     * Represents a video document of any kind. 
     */

    protected string $type = 'Video';
}