<?php

namespace AP\Type\Object;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\APObject;

class Event extends APObject implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Event
     *
     * Represents any kind of event. 
     */

    protected string $type = 'Event';
}