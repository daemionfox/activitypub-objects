<?php

namespace AP\Type\Actor;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\APObject;

class Application extends APObject implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Application
     *
     * Describes a software application.
     */

    protected string $type = 'Application';
}