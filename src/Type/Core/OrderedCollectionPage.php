<?php

namespace AP\Type\Core;

class OrderedCollectionPage extends CollectionPage implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#OrderedCollectionPage
     *
     * Used to represent ordered subsets of items from an OrderedCollection. 
     * 
     * Refer to the Activity Streams 2.0 Core for a complete description of 
     * the OrderedCollectionPage object.
     */
    
    protected string $type = 'OrderedCollectionPage';
    protected int $startIndex;
    
    

}