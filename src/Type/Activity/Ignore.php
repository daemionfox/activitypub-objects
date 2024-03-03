<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Activity;

class Ignore extends Activity implements APObjectInterface
{
    /*
     * https://www.w3.org/ns/activitystreams#Ignore
     *
     * Indicates that the actor is ignoring the object. The target
     * and origin typically have no defined meaning.
     */

    protected string $type = 'Ignore';

}