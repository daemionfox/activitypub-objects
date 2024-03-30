<?php

namespace AP\Type\Actor\Component;

use AP\Type\Core\APObject;
use AP\Type\Core\APObjectInterface;

class PublicKey extends APObject implements APObjectInterface
{
    protected ?string $id;
    protected ?string $owner;
    protected ?string $publicKeyPem;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     * @return PublicKey
     */
    public function setId(?string $id): PublicKey
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOwner(): ?string
    {
        return $this->owner;
    }

    /**
     * @param string|null $owner
     * @return PublicKey
     */
    public function setOwner(?string $owner): PublicKey
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPublicKeyPem(): ?string
    {
        return $this->publicKeyPem;
    }

    /**
     * @param string|null $publicKeyPem
     * @return PublicKey
     */
    public function setPublicKeyPem(?string $publicKeyPem): PublicKey
    {
        $this->publicKeyPem = $publicKeyPem;
        return $this;
    }




}