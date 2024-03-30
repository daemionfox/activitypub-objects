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


}