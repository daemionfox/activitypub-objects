<?php

namespace AP\Type\Object;

use AP\Type\Core\APObjectInterface;

class Audio extends Document implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Audio
     *
     * Represents an audio document of any kind. 
     */

    protected string $type = 'Audio';
}