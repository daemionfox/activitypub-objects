<?php

namespace AP\Type\Actor;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\APObject;

class Person extends Actor implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Person
     *
     * Represents an organization. 
     */

    protected string $type = 'Person';
}