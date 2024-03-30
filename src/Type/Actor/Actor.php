<?php

namespace AP\Type\Actor;

use AP\Type\Core\APObject;
use AP\Type\Core\APObjectInterface;

abstract class Actor extends APObject implements APObjectInterface
{

    protected ?array $publicKey;

    /**
     * @return array|null
     */
    public function getPublicKey(): ?array
    {
        return $this->publicKey;
    }

    /**
     * @param array|null $publicKey
     * @return Actor
     */
    public function setPublicKey(?array $publicKey): Actor
    {
        $this->publicKey = $publicKey;
        return $this;
    }



}