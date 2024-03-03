<?php

namespace AP\Type\Core;

class OrderedCollection extends Collection implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#OrderedCollection
     *
     * A subtype of Collection in which members of the logical
     * collection are assumed to always be strictly ordered.
     */
    protected string $type = 'OrderedCollection';

    protected array $orderedItems = [];

    // TODO - The insert for Items must also be an insert for ordered items, and then ordered items must be sorted by some mechanism
}