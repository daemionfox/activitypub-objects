<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;

class TentativeAccept extends Accept implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#TenativeAccept
     *
     * A specialization of Accept indicating that the acceptance is tentative.
     */

    protected string $type = 'TentativeAccept';


}