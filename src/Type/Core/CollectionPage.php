<?php

namespace AP\Type\Core;

class CollectionPage extends Collection implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#CollectionPage
     *
     * Used to represent distinct subsets of items from a Collection.
     * Refer to the Activity Streams 2.0 Core for a complete description
     * of the CollectionPage object.
     */


    protected string $partOf;
    protected string $next;
    protected string $prev;
    protected string $type = 'CollectionPage';

    /**
     * @return string
     */
    public function getPartOf(): string
    {
        return $this->partOf;
    }

    /**
     * @param string $partOf
     * @return CollectionPage
     */
    public function setPartOf(string $partOf): CollectionPage
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * @return string
     */
    public function getNext(): string
    {
        return $this->next;
    }

    /**
     * @param string $next
     * @return CollectionPage
     */
    public function setNext(string $next): CollectionPage
    {
        $this->next = $next;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrev(): string
    {
        return $this->prev;
    }

    /**
     * @param string $prev
     * @return CollectionPage
     */
    public function setPrev(string $prev): CollectionPage
    {
        $this->prev = $prev;
        return $this;
    }


}