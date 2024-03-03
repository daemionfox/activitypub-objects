<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;

class Invite extends Offer implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Invite
     *
     * A specialization of Offer in which the actor is extending an invitation for the object to the target.
     */

    protected string $type = 'Invite';
}