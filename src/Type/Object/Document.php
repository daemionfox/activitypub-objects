<?php

namespace AP\Type\Object;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\APObject;

class Document extends APObject implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Document
     *
     * Represents a document of any kind. 
     */

    protected string $type = 'Document';
}