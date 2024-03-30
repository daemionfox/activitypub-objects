<?php

namespace AP\Type\Actor;

use AP\Type\Actor\Component\PublicKey;
use AP\Type\Core\APObject;
use AP\Type\Core\APObjectInterface;

abstract class Actor extends APObject implements APObjectInterface
{

    protected ?PublicKey $publicKey;

    /**
     * @return PublicKey|null
     */
    public function getPublicKey(): ?PublicKey
    {
        return $this->publicKey;
    }

    /**
     * @param PublicKey|null $publicKey
     * @return Actor
     */
    public function setPublicKey(?PublicKey $publicKey): Actor
    {
        $this->publicKey = $publicKey;
        return $this;
    }



}