<?php

namespace AP\Type\Core;

use AP\Exceptions\APObjectException;
use AP\Type\APObjectFactory;

abstract class AbstractAPObject implements APObjectInterface
{
    protected bool $contextSet = false;

    /**
     * @param string $key
     * @param mixed $value
     * @return $this
     * @throws APObjectException
     */
    public function set(string $key, mixed $value): static
    {
        if (property_exists($this, $key)) {
            if (isset($value['type'])) {
                $this->$key = APObjectFactory::create($value);
            } elseif (is_array($value)) {
                $temp = [];
                foreach ($value as $v) {
                    if (isset($v['type'])) {
                        $temp[] = APObjectFactory::create($v);
                    } else {
                        $temp[] = $v;
                    }
                }
                $this->$key = $temp;
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
            } elseif ($key === '@context') {
                $this->set('_context', $value);
                $this->contextSet = true;
                continue;
            }
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
        return json_encode($this->toArray(), JSON_PRETTY_PRINT);
    }

}