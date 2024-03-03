<?php

namespace AP\Type\Object;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\APObject;

class Profile extends APObject implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Profile
     *
     * A Profile is a content object that describes another Object, typically used to
     * describe Actor Type objects. The describes property is used to reference the
     * object being described by the profile.
     */

    protected string $type = 'Profile';
}