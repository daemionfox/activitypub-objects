<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Activity;

class Listen extends Activity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Listen
     *
     * Indicates that the actor has listened to the object. 
     */

    protected string $type = 'Listen';
}