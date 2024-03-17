<?php

namespace AP\Type\Actor;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\APObject;

class Organization extends Actor implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Organization
     *
     * Represents an organization. 
     */

    protected string $type = 'Organization';
}