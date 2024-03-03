<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\IntransitiveActivity;

class Arrive extends IntransitiveActivity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Arrive
     *
     * An IntransitiveActivity that indicates that the actor has arrived at the location.
     * The origin can be used to identify the context from which the actor originated.
     * The target typically has no defined meaning.
     */

    protected string $type = 'Arrive';

}