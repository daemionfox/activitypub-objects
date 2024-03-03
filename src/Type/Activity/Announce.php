<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Activity;

class Announce extends Activity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Announce
     *
     * Indicates that the actor is calling the target's attention the object.
     *
     * The origin typically has no defined meaning.
     */

    protected string $type = 'Announce';
}