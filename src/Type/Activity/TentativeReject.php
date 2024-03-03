<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;

class TentativeReject extends Reject implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#TenativeReject
     *
     * A specialization of Reject in which the rejection is considered tentative. 
     */

    protected string $type = 'TentativeReject';
}