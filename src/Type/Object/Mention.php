<?php

namespace AP\Type\Object;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Link;

class Mention extends Link implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Mention
     *
     * A specialized Link that represents an @mention. 
     */

    protected string $type = 'Mention';
}