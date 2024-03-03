<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Activity;

class Offer extends Activity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Offer
     *
     * Indicates that the actor is offering the object. If specified, the
     * target indicates the entity to which the object is being offered.
     */

    protected string $type = 'Offer';
}