<?php

namespace AP\Type\Core;

class IntransitiveActivity extends Activity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#IntransitiveActivity
     *
     * Instances of IntransitiveActivity are a subtype of Activity
     * representing intransitive actions. The object property is
     * therefore inappropriate for these activities.
     */

    protected string $type = 'IntransitiveActivity';

}