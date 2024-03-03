<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Activity;

class Add extends Activity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Add
     *
     * Indicates that the actor has added the object to the target. If the target property is not explicitly
     * specified, the target would need to be determined implicitly by context. The origin can be used to
     * identify the context from which the object originated.
     */


    protected string $type = 'Add';

}