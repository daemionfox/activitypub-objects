<?php

namespace AP\Type\Object;

use AP\Type\Core\APObjectInterface;

class Page extends Document implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Page
     *
     * Represents a Web Page. 
     */

    protected string $type = 'Page';
}