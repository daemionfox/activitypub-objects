<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Activity;

class Dislike extends Activity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Dislike
     *
     * Indicates that the actor dislikes the object. 
     */

    protected string $type = 'Dislike';
}