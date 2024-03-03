<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Activity;

class Delete extends Activity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Delete
     *
     * Indicates that the actor has deleted the object. If specified, the origin
     * indicates the context from which the object was deleted.
     */

    protected string $type = 'Delete';


}