<?php

namespace AP\Type;

use AP\Exceptions\APObjectException;
use AP\Type\Core\APObjectInterface;
use stdClass;

class APObjectFactory
{

    public static function create(stdClass|array|string $input): APObjectInterface
    {
        if (is_string($input)) {
            $input = json_decode($input, true);
        } elseif (is_object($input)) {
            $input = json_decode(json_encode($input), true);
        }
        $object = null;
        switch($input['type']) {
            case 'OrderedCollection':
                $object = new \AP\Type\Core\OrderedCollection();
                break;
            case 'Link':
                $object = new \AP\Type\Core\Link();
                break;
            case 'IntransitiveActivity':
                $object = new \AP\Type\Core\IntransitiveActivity();
                break;
            case 'OrderedCollectionPage':
                $object = new \AP\Type\Core\OrderedCollectionPage();
                break;
            case 'CollectionPage':
                $object = new \AP\Type\Core\CollectionPage();
                break;
            case 'Activity':
                $object = new \AP\Type\Core\Activity();
                break;
            case 'Object':
                $object = new \AP\Type\Core\APObject();
                break;
            case 'Collection':
                $object = new \AP\Type\Core\Collection();
                break;
            case 'Add':
                $object = new \AP\Type\Activity\Add();
                break;
            case 'TentativeAccept':
                $object = new \AP\Type\Activity\TentativeAccept();
                break;
            case 'Join':
                $object = new \AP\Type\Activity\Join();
                break;
            case 'Flag':
                $object = new \AP\Type\Activity\Flag();
                break;
            case 'Update':
                $object = new \AP\Type\Activity\Update();
                break;
            case 'Ignore':
                $object = new \AP\Type\Activity\Ignore();
                break;
            case 'Offer':
                $object = new \AP\Type\Activity\Offer();
                break;
            case 'Travel':
                $object = new \AP\Type\Activity\Travel();
                break;
            case 'Dislike':
                $object = new \AP\Type\Activity\Dislike();
                break;
            case 'Announce':
                $object = new \AP\Type\Activity\Announce();
                break;
            case 'Follow':
                $object = new \AP\Type\Activity\Follow();
                break;
            case 'Question':
                $object = new \AP\Type\Activity\Question();
                break;
            case 'TentativeReject':
                $object = new \AP\Type\Activity\TentativeReject();
                break;
            case 'Arrive':
                $object = new \AP\Type\Activity\Arrive();
                break;
            case 'Create':
                $object = new \AP\Type\Activity\Create();
                break;
            case 'Invite':
                $object = new \AP\Type\Activity\Invite();
                break;
            case 'Like':
                $object = new \AP\Type\Activity\Like();
                break;
            case 'Block':
                $object = new \AP\Type\Activity\Block();
                break;
            case 'Read':
                $object = new \AP\Type\Activity\Read();
                break;
            case 'Reject':
                $object = new \AP\Type\Activity\Reject();
                break;
            case 'Listen':
                $object = new \AP\Type\Activity\Listen();
                break;
            case 'View':
                $object = new \AP\Type\Activity\View();
                break;
            case 'Remove':
                $object = new \AP\Type\Activity\Remove();
                break;
            case 'Undo':
                $object = new \AP\Type\Activity\Undo();
                break;
            case 'Delete':
                $object = new \AP\Type\Activity\Delete();
                break;
            case 'Accept':
                $object = new \AP\Type\Activity\Accept();
                break;
            case 'Leave':
                $object = new \AP\Type\Activity\Leave();
                break;
            case 'Document':
                $object = new \AP\Type\Object\Document();
                break;
            case 'Event':
                $object = new \AP\Type\Object\Event();
                break;
            case 'Place':
                $object = new \AP\Type\Object\Place();
                break;
            case 'Note':
                $object = new \AP\Type\Object\Note();
                break;
            case 'Mention':
                $object = new \AP\Type\Object\Mention();
                break;
            case 'Video':
                $object = new \AP\Type\Object\Video();
                break;
            case 'Tombstone':
                $object = new \AP\Type\Object\Tombstone();
                break;
            case 'Relationship':
                $object = new \AP\Type\Object\Relationship();
                break;
            case 'Profile':
                $object = new \AP\Type\Object\Profile();
                break;
            case 'Audio':
                $object = new \AP\Type\Object\Audio();
                break;
            case 'Page':
                $object = new \AP\Type\Object\Page();
                break;
            case 'Article':
                $object = new \AP\Type\Object\Article();
                break;
            case 'Image':
                $object = new \AP\Type\Object\Image();
                break;
            case 'Application':
                $object = new \AP\Type\Actor\Application();
                break;
            case 'Group':
                $object = new \AP\Type\Actor\Group();
                break;
            case 'Service':
                $object = new \AP\Type\Actor\Service();
                break;
            case 'Person':
                $object = new \AP\Type\Actor\Person();
                break;
            case 'Organization':
                $object = new \AP\Type\Actor\Organization();
                break;
        }
        if ($object === null) {
            throw new APObjectException("Could not create an object.  Factory could not determine the type.");
        }

        $object->load($input);



        return $object;
    }



}