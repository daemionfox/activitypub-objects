<?php

namespace AP\Type\Core;

use AP\Exceptions\APObjectException;
use AP\Type\Actor\Component\Endpoints;
use AP\Type\Actor\Component\PublicKey;
use AP\Type\APObjectFactory;
use DateTime;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

abstract class AbstractAPObject implements APObjectInterface
{
    protected bool $contextSet = false;
    protected ?string $id;

    /**
     * @param string $key
     * @param mixed $value
     * @return $this
     * @throws APObjectException
     */
    public function set(string $key, mixed $value): static
    {
        if (property_exists($this, $key)) {
            $reflectionClass = new \ReflectionClass(static::class);
            $reflectionProp = $reflectionClass->getProperty($key);
            $type = null;
            $isDate = false;
            if ($reflectionProp !== false && $reflectionProp->getType() !== false) {
                $names = [];
                $type = $reflectionProp->getType();
                if (is_a($type, \ReflectionUnionType::class)) {
                    foreach ($type->getTypes() as $type) {
                        $names[] = $type->getName();
                    }

                } elseif(!empty($type)) {
                    $names[] = $type->getName();
                }
                $isDate = in_array('DateTime', $names);
                $foo = 'nar';
            }

            if (empty($value)) {
                return $this;
            } elseif (is_array($value) && isset($value['type'])) {
                $this->$key = APObjectFactory::create($value);
            } elseif (is_a($value, AbstractAPObject::class)) {
                $this->$key = $value;
            } elseif (strtoupper($key) === 'PUBLICKEY') {
                $publicKey = new PublicKey();
                $publicKey->load($value);
                $this->$key = $publicKey;
            } elseif (strtoupper($key) === 'ENDPOINTS') {
                $publicKey = new Endpoints();
                $publicKey->load($value);
                $this->$key = $publicKey;
            } elseif (is_array($value)) {
                $temp = [];
                foreach ($value as $v) {
                    if (isset($v['type'])) {
                        try {
                            $temp[] = APObjectFactory::create($v);
                        } catch (APObjectException) {
                            $temp[] = $v;
                        }
                    } else {
                        $temp[] = $v;
                    }
                }
                $this->$key = $temp;
            } elseif($isDate) {
                $date = new DateTime();
                $date->setTimestamp(strtotime($value));
                $this->$key = $date;
            } else {
                $this->$key = $value;
            }
        }
        return $this;
    }

    /**
     * @param string $key
     * @return mixed
     * @throws APObjectException
     */
    public function get(string $key): mixed
    {
        if(property_exists($this, $key)) {
            return $this->$key;
        }
        throw new APObjectException("Property does not exist {$key} for " . get_class($this));
    }


    /**
     * @param array $data
     * @return AbstractAPObject
     * @throws APObjectException
     */
    public function load(array $data): static
    {
        foreach ($data as $key => $value) {
            if ($key === 'type') {
                continue;  // Always skip the type
            } elseif ($key === '@context' || $key === '_context') {
                $this->set('_context', $value);
                $this->contextSet = true;
                continue;
            }
//            elseif ($key === 'actor' && is_string($value) && $this->_isURL($value)) {
//                try {
//                    $value = $this->_getURL($value);
//                    $value = APObjectFactory::create($value);
//                } catch (RequestException) {
//                    // If its bad, it's bad.
//                }
//            }
            $this->set($key, $value);
        }



        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        $prop = array_keys(get_class_vars(get_class($this)));
        $out = [];
        foreach ($prop as $k) {
            $v = $this->$k ?? null;
            if (empty($v)) {
                continue;
            } elseif (is_object($v)) {
                $interfaces = class_implements($v::class, true);
                if ($interfaces !== false && is_array($interfaces) && in_array(APObjectInterface::class, $interfaces)) {
                    $out[$k] = $v->toArray();
                }
            } elseif (is_array($v)) {
                $temp = [];
                foreach ($v as $sk => $sv) {
                    if (is_object($sv)) {
                        $interfaces = class_implements($sv::class, true);
                        if ($interfaces !== false && is_array($interfaces) && in_array(APObjectInterface::class, $interfaces)) {
                            $temp[$sk] = $sv->toArray();
                        }
                    }
                }
                $out[$k] = $temp;
            } elseif ($k === '_context') {
                if ($this->contextSet === true) {
                    $out['@context'] = $v;
                }
            } elseif ($k === 'contextSet') {
                continue;
            } else {
                $out[$k] = $v;
            }
        }
        return $out;
    }

    /**
     * @return false|string
     */
    public function toJSON(): string|bool
    {
        return json_encode($this->toArray());
    }

    protected function _isURL(string $string): bool
    {
        return 1 === preg_match("/https?:\/\/.+/", $string);
    }

    protected function _getURL(string $url)
    {
        $client = new Client();
        $headers = [
            "Accept" => "application/activity+json"
        ];

        $response = $client->get($url, ["headers" => $headers]);
        $body = $response->getBody()->getContents();
        return $body;
    }

    /**
     * @return string
     */
    public function getID(): string
    {
        return $this->id;
    }

    public function setID(string $id): static
    {
        $this->id = $id;
        return $this;
    }

}