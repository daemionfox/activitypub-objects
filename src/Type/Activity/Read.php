<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Activity;

class Read extends Activity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Read
     *
     * Indicates that the actor has read the object. 
     */

    protected string $type = 'Read';
}