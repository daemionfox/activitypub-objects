<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Activity;

class Accept extends Activity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Accept
     *
     * Indicates that the actor accepts the object. The target
     * property can be used in certain circumstances to indicate
     * the context into which the object has been accepted.
     */

    protected string $type = 'Accept';

}