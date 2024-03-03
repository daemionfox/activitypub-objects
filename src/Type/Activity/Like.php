<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Activity;

class Like extends Activity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Like
     *
     * Indicates that the actor likes, recommends or endorses the object. The target
     * and origin typically have no defined meaning.
     */

    protected string $type = 'Like';
}