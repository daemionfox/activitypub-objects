<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Activity;

class Reject extends Activity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Reject
     *
     * Indicates that the actor is rejecting the object. The target and origin typically have no defined meaning. 
     */

    protected string $type = 'Reject';
}