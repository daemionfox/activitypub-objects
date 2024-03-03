# activitypub-objects

An Object Orientated abstraction for ActivityPub's (AP) various objects for PHP 8+

As of this writing (2024-03-03), this library contains all the published AP Objects available from https://www.w3.org/TR/activitystreams-vocabulary/

All classes in this library spin off of either the base **APObject** (Object) or **Link** classes, which both extend from the **AbstractAPObject** class.  

All classes share the following methods:

 * get(key)
 * set(key, value)
 * load(array)
 * toArray()
 * toJSON()

As well as inheriting the various get/set methods from their parents.

Additionally, there is a factory class **APObjectFactory** which will accept JSON string, Object or Array structures and attempt to build the appropriate objects/subobjects.  This will be useful for transforming AP requests into useable data structures.

**\AP\Activity\Follow $follow = APObjectFactory::create($jsonRequest);**