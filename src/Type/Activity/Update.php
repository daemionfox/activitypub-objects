<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Activity;

class Update extends Activity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Update
     *
     * Indicates that the actor has updated the object. Note, however, that this vocabulary
     * does not define a mechanism for describing the actual set of modifications made to object.
     *
     * The target and origin typically have no defined meaning.
     */

    protected string $type = 'Update';
}