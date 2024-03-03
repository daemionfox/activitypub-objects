<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\IntransitiveActivity;

class Travel extends IntransitiveActivity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Travel
     *
     * Indicates that the actor is traveling to target from origin. Travel is
     * an IntransitiveObject whose actor specifies the direct object. If the
     * target or origin are not specified, either can be determined by context.
     */

    protected string $type = 'Travel';
}