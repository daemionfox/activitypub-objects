<?php

namespace AP\Type\Object;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\APObject;

class Tombstone extends APObject implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Tombstone
     *
     * A Tombstone represents a content object that has been deleted. It can be used in Collections to signify that there used to be an object at this position, but it has been deleted. 
     */

    protected string $type = 'Tombstone';

    protected ?string $formerType;

    // TODO - Finish Tombstone
}