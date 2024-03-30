<?php

namespace AP\Type\Actor\Component;

use AP\Type\Core\APObject;
use AP\Type\Core\APObjectInterface;

class PublicKey extends APObject implements APObjectInterface
{
    protected ?string $id;
    protected ?string $owner;
    protected ?string $publicKeyPem;




}