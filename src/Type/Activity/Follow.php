<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Activity;

class Follow extends Activity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Follow
     *
     * Indicates that the actor is "following" the object. Following is defined
     * in the sense typically used within Social systems in which the actor is
     * interested in any activity performed by or on the object. The target and
     * origin typically have no defined meaning.
     */

    protected string $type = 'Follow';
    

}