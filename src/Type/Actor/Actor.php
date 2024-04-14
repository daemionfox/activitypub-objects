<?php

namespace AP\Type\Actor;

use AP\Type\Actor\Component\Endpoints;
use AP\Type\Actor\Component\PublicKey;
use AP\Type\Core\APObject;
use AP\Type\Core\APObjectInterface;

abstract class Actor extends APObject implements APObjectInterface
{

    protected ?string $inbox;
    protected ?string $outbox;
    protected ?string $following;
    protected ?string $followers;
    protected ?string $liked;
    protected ?string $streams;
    protected ?string $preferredUsername;
    protected string|Endpoints|null $endpoints;
    protected bool $manuallyApprovesFollowers = false;
    protected bool $discoverable = true;
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

    /**
     * @return string|null
     */
    public function getInbox(): ?string
    {
        return $this->inbox;
    }

    /**
     * @param string|null $inbox
     * @return Actor
     */
    public function setInbox(?string $inbox): Actor
    {
        $this->inbox = $inbox;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOutbox(): ?string
    {
        return $this->outbox;
    }

    /**
     * @param string|null $outbox
     * @return Actor
     */
    public function setOutbox(?string $outbox): Actor
    {
        $this->outbox = $outbox;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFollowing(): ?string
    {
        return $this->following;
    }

    /**
     * @param string|null $following
     * @return Actor
     */
    public function setFollowing(?string $following): Actor
    {
        $this->following = $following;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFollowers(): ?string
    {
        return $this->followers;
    }

    /**
     * @param string|null $followers
     * @return Actor
     */
    public function setFollowers(?string $followers): Actor
    {
        $this->followers = $followers;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLiked(): ?string
    {
        return $this->liked;
    }

    /**
     * @param string|null $liked
     * @return Actor
     */
    public function setLiked(?string $liked): Actor
    {
        $this->liked = $liked;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStreams(): ?string
    {
        return $this->streams;
    }

    /**
     * @param string|null $streams
     * @return Actor
     */
    public function setStreams(?string $streams): Actor
    {
        $this->streams = $streams;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPreferredUsername(): ?string
    {
        return $this->preferredUsername;
    }

    /**
     * @param string|null $preferredUsername
     * @return Actor
     */
    public function setPreferredUsername(?string $preferredUsername): Actor
    {
        $this->preferredUsername = $preferredUsername;
        return $this;
    }

    /**
     * @return Endpoints|string|null
     */
    public function getEndpoints(): Endpoints|string|null
    {
        return $this->endpoints;
    }

    /**
     * @param Endpoints|string|null $endpoints
     * @return Actor
     */
    public function setEndpoints(Endpoints|string|null $endpoints): Actor
    {
        $this->endpoints = $endpoints;
        return $this;
    }

    /**
     * @return bool
     */
    public function isManuallyApprovesFollowers(): bool
    {
        return $this->manuallyApprovesFollowers;
    }

    /**
     * @param bool $manuallyApprovesFollowers
     * @return Actor
     */
    public function setManuallyApprovesFollowers(bool $manuallyApprovesFollowers): Actor
    {
        $this->manuallyApprovesFollowers = $manuallyApprovesFollowers;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDiscoverable(): bool
    {
        return $this->discoverable;
    }

    /**
     * @param bool $discoverable
     * @return Actor
     */
    public function setDiscoverable(bool $discoverable): Actor
    {
        $this->discoverable = $discoverable;
        return $this;
    }





}