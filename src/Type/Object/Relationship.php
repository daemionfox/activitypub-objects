<?php

namespace AP\Type\Object;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\APObject;

class Relationship extends APObject implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Relationship
     *
     * Describes a relationship between two individuals. The subject and object
     * properties are used to identify the connected individuals.
     *
     * See 5.2 Representing Relationships Between Entities for additional information.
     */

    protected string $type = 'Relationship';
}