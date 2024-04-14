<?php

namespace AP\Type\Actor\Component;

use AP\Type\Core\AbstractAPObject;
use AP\Type\Core\APObjectInterface;

class Endpoints extends AbstractAPObject implements APObjectInterface
{
    protected ?string $proxyUrl;
    protected ?string $oauthAuthorizationEndpoint;
    protected ?string $oauthTokenEndpoint;
    protected ?string $provideClientKey;
    protected ?string $signClientKey;
    protected ?string $sharedInbox;
    
    
    public function toArray(): array
    {
        $output = [];
        $keys = [
            'proxyUrl',
            'oauthAuthorizationEndpoint',
            'oauthTokenEndpoint',
            'provideClientKey',
            'signClientKey',
            'sharedInbox'
        ];
        foreach ($keys as $key) {
            if (!empty($this->$key)) {
                $output[$key] = $this->$key;
            }
        }
        return $output;
    }

    /**
     * @return string|null
     */
    public function getProxyUrl(): ?string
    {
        return $this->proxyUrl;
    }

    /**
     * @param string|null $proxyUrl
     * @return Endpoints
     */
    public function setProxyUrl(?string $proxyUrl): Endpoints
    {
        $this->proxyUrl = $proxyUrl;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOauthAuthorizationEndpoint(): ?string
    {
        return $this->oauthAuthorizationEndpoint;
    }

    /**
     * @param string|null $oauthAuthorizationEndpoint
     * @return Endpoints
     */
    public function setOauthAuthorizationEndpoint(?string $oauthAuthorizationEndpoint): Endpoints
    {
        $this->oauthAuthorizationEndpoint = $oauthAuthorizationEndpoint;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOauthTokenEndpoint(): ?string
    {
        return $this->oauthTokenEndpoint;
    }

    /**
     * @param string|null $oauthTokenEndpoint
     * @return Endpoints
     */
    public function setOauthTokenEndpoint(?string $oauthTokenEndpoint): Endpoints
    {
        $this->oauthTokenEndpoint = $oauthTokenEndpoint;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProvideClientKey(): ?string
    {
        return $this->provideClientKey;
    }

    /**
     * @param string|null $provideClientKey
     * @return Endpoints
     */
    public function setProvideClientKey(?string $provideClientKey): Endpoints
    {
        $this->provideClientKey = $provideClientKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSignClientKey(): ?string
    {
        return $this->signClientKey;
    }

    /**
     * @param string|null $signClientKey
     * @return Endpoints
     */
    public function setSignClientKey(?string $signClientKey): Endpoints
    {
        $this->signClientKey = $signClientKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSharedInbox(): ?string
    {
        return $this->sharedInbox;
    }

    /**
     * @param string|null $sharedInbox
     * @return Endpoints
     */
    public function setSharedInbox(?string $sharedInbox): Endpoints
    {
        $this->sharedInbox = $sharedInbox;
        return $this;
    }



}