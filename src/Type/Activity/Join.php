<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Activity;

class Join extends Activity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Join
     *
     * Indicates that the actor has joined the object. The target and origin typically have no defined meaning.
     */

    protected string $type = 'Join';
}