<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;

class Block extends Ignore implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Block
     *
     * Indicates that the actor is blocking the object. Blocking is a stronger
     * form of Ignore. The typical use is to support social systems that allow
     * one user to block activities or content of other users. The target and
     * origin typically have no defined meaning.
     */

    protected string $type = 'Block';
}