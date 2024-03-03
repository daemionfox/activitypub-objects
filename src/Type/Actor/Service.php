<?php

namespace AP\Type\Actor;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\APObject;

class Service extends APObject implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Service
     *
     * Represents a service of any kind.
     */

    protected string $type = 'Service';
}