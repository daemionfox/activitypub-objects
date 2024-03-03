<?php

namespace AP\Type\Core;

class Activity extends APObject implements APObjectInterface
{
    protected string $type = 'Activity';
    protected  $actor;
    protected  $object;
    protected string $target;
    protected string $result;
    protected string $origin;
    protected string $instrument;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Activity
     */
    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param mixed $actor
     * @return Activity
     */
    public function setActor($actor)
    {
        $this->actor = $actor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param mixed $object
     * @return Activity
     */
    public function setObject($object)
    {
        $this->object = $object;
        return $this;
    }

    /**
     * @return string
     */
    public function getTarget(): string
    {
        return $this->target;
    }

    /**
     * @param string $target
     * @return Activity
     */
    public function setTarget(string $target): static
    {
        $this->target = $target;
        return $this;
    }

    /**
     * @return string
     */
    public function getResult(): string
    {
        return $this->result;
    }

    /**
     * @param string $result
     * @return Activity
     */
    public function setResult(string $result): static
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     * @return Activity
     */
    public function setOrigin(string $origin): static
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * @return string
     */
    public function getInstrument(): string
    {
        return $this->instrument;
    }

    /**
     * @param string $instrument
     * @return Activity
     */
    public function setInstrument(string $instrument): static
    {
        $this->instrument = $instrument;
        return $this;
    }
    
    

}