<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Activity;

class Flag extends Activity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Flag
     *
     * Indicates that the actor is "flagging" the object. Flagging is defined in
     * the sense common to many social platforms as reporting content as being
     * inappropriate for any number of reasons.
     */

    protected string $type = 'Flag';
}