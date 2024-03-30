<?php

namespace AP\Type\Actor\Component;

use AP\Type\Core\AbstractAPObject;
use AP\Type\Core\APObjectInterface;

class PublicKey extends AbstractAPObject implements APObjectInterface
{
    protected ?string $owner;
    protected ?string $publicKeyPem;

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
    public function setOwner(?string $owner): static
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
    public function setPublicKeyPem(?string $publicKeyPem): static
    {
        $this->publicKeyPem = $publicKeyPem;
        return $this;
    }




}