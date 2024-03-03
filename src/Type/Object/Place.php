<?php

namespace AP\Type\Object;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\APObject;

class Place extends APObject implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Place
     *
     * Represents a logical or physical location. See 5.3 Representing Places for additional information.
     */

    protected string $type = 'Place';
}