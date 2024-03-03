<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Activity;

class Leave extends Activity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Leave
     *
     * Indicates that the actor has left the object. The target and origin typically have no meaning.
     */

    protected string $type = 'Leave';
}