<?php

namespace AP\Type\Activity;

use AP\Type\Core\APObjectInterface;
use AP\Type\Core\APObject;
use AP\Type\Core\IntransitiveActivity;
use AP\Type\Core\Link;
use DateTime;

class Question extends IntransitiveActivity implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Question
     *
     * Represents a question being asked. Question objects are an extension of
     * IntransitiveActivity. That is, the Question object is an Activity, but the
     * direct object is the question itself and therefore it would not contain an
     * object property.
     *
     * Either of the anyOf and oneOf properties MAY be used to express possible
     * answers, but a Question object MUST NOT have both properties.
     */

    protected string $type = 'Question';

    protected APObject|Link|DateTime|bool|null $closed;
    protected ?array $oneOf;
    protected ?array $anyOf;

    /**
     * @return DateTime|null
     */
    public function getClosed(): ?DateTime
    {
        return $this->closed;
    }

    /**
     * @param APObject|Link|DateTime|bool|null $closed
     * @return Question
     */
    public function setClosed(APObject|Link|DateTime|bool|string|null $closed): Question
    {
        if (is_string($closed)) { // Assume that this might be a date string...
            $closed = new DateTime(strtotime($closed));
        }

        $this->closed = $closed;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getOneOf(): ?array
    {
        return $this->oneOf;
    }

    /**
     * @param array|null $oneOf
     * @return Question
     */
    public function setOneOf(?array $oneOf): Question
    {
        $this->oneOf = $oneOf;
        return $this;
    }

    /**
     * @param APObject|Link $oneOf
     * @return $this
     */
    public function addOneOf(APObject|Link $oneOf): Question
    {
        $this->oneOf[] = $oneOf;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getAnyOf(): ?array
    {
        return $this->anyOf;
    }

    /**
     * @param array|null $anyOf
     * @return Question
     */
    public function setAnyOf(?array $anyOf): Question
    {
        $this->anyOf = $anyOf;
        return $this;
    }

    /**
     * @param APObject|Link $anyOf
     * @return $this
     */
    public function addAnyOf(APObject|Link $anyOf): Question
    {
        $this->anyOf[] = $anyOf;
        return $this;
    }

}