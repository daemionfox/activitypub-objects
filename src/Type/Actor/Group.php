<?php

namespace AP\Type\Actor;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\APObject;

class Group extends Actor implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Group
     *
     * Represents a formal or informal collective of Actors.
     */

    protected string $type = 'Group';
}