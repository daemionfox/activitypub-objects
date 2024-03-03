<?php

namespace AP\Type\Object;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\APObject;

class Note extends APObject implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Note
     *
     * Represents a short written work typically less than a single paragraph in length. 
     */

    protected string $type = 'Note';
}