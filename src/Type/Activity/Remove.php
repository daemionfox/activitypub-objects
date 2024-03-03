<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Activity;

class Remove extends Activity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Remove
     *
     * Indicates that the actor is removing the object. If specified, the origin indicates
     * the context from which the object is being removed.
     */

    protected string $type = 'Remove';
}