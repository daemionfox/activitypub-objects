<?php

namespace AP\Type\Actor;

use AP\Type\Core\APObject;
use AP\Type\Core\APObjectInterface;

abstract class Actor extends APObject implements APObjectInterface
{

    protected ?array $publicKey;

}