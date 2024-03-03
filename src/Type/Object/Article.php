<?php

namespace AP\Type\Object;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\APObject;

class Article extends APObject implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Article
     *
     * Represents any kind of multi-paragraph written work. 
     */

    protected string $type = 'Article';
}