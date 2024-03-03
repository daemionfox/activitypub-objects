<?php

namespace AP\Type\Core;

class Collection extends APObject implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Collection
     *
     * A Collection is a subtype of Object that represents ordered
     * or unordered sets of Object or Link instances.
     *
     * Refer to the Activity Streams 2.0 Core specification for a
     * complete description of the Collection type.
     */

    protected int $totalItems;
    protected CollectionPage|Link $current;
    protected CollectionPage|Link $first;
    protected CollectionPage|Link $last;
    protected array $items = [];
    protected string $type = 'Collection';

    /**
     * @return int
     */
    public function getTotalItems(): int
    {
        return $this->totalItems;
    }

    /**
     * @return CollectionPage|Link
     */
    public function getCurrent(): CollectionPage|Link
    {
        return $this->current;
    }

    /**
     * @param CollectionPage|Link $current
     * @return Collection
     */
    public function setCurrent(CollectionPage|Link $current): static
    {
        $this->current = $current;
        return $this;
    }

    /**
     * @return CollectionPage|Link
     */
    public function getFirst(): CollectionPage|Link
    {
        return $this->first;
    }

    /**
     * @param CollectionPage|Link $first
     * @return Collection
     */
    public function setFirst(CollectionPage|Link $first): static
    {
        $this->first = $first;
        return $this;
    }

    /**
     * @return CollectionPage|Link
     */
    public function getLast(): CollectionPage|Link
    {
        return $this->last;
    }

    /**
     * @param CollectionPage|Link $last
     * @return Collection
     */
    public function setLast(CollectionPage|Link $last): Collection
    {
        $this->last = $last;
        return $this;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     * @return Collection
     */
    public function setItems(array $items): Collection
    {
        $this->items = $items;
        $this->totalItems = count($this->items);
        return $this;
    }

    /**
     * @param $item
     * @return $this
     */
    public function addItem($item): Collection
    {
        $this->items[] = $item;
        $this->totalItems = count($this->items);
        return $this;
    }


}