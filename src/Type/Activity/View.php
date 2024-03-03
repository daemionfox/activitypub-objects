<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Activity;

class View extends Activity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#View
     *
     * Indicates that the actor has viewed the object. 
     */

    protected string $type = 'View';
}