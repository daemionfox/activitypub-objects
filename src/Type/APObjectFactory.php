<?php

namespace AP\Type;

use AP\Exceptions\APObjectException;
use AP\Type\Activity\Accept;
use AP\Type\Activity\Add;
use AP\Type\Activity\Announce;
use AP\Type\Activity\Arrive;
use AP\Type\Activity\Block;
use AP\Type\Activity\Create;
use AP\Type\Activity\Delete;
use AP\Type\Activity\Dislike;
use AP\Type\Activity\Flag;
use AP\Type\Activity\Follow;
use AP\Type\Activity\Ignore;
use AP\Type\Activity\Invite;
use AP\Type\Activity\Join;
use AP\Type\Activity\Leave;
use AP\Type\Activity\Like;
use AP\Type\Activity\Listen;
use AP\Type\Activity\Offer;
use AP\Type\Activity\Question;
use AP\Type\Activity\Read;
use AP\Type\Activity\Reject;
use AP\Type\Activity\Remove;
use AP\Type\Activity\TentativeAccept;
use AP\Type\Activity\TentativeReject;
use AP\Type\Activity\Travel;
use AP\Type\Activity\Undo;
use AP\Type\Activity\Update;
use AP\Type\Activity\View;
use AP\Type\Actor\Application;
use AP\Type\Actor\Group;
use AP\Type\Actor\Organization;
use AP\Type\Actor\Person;
use AP\Type\Actor\Service;
use AP\Type\Core\Activity;
use AP\Type\Core\APObject;
use AP\Type\Core\APObjectInterface;
use AP\Type\Core\Collection;
use AP\Type\Core\CollectionPage;
use AP\Type\Core\IntransitiveActivity;
use AP\Type\Core\Link;
use AP\Type\Core\OrderedCollection;
use AP\Type\Core\OrderedCollectionPage;
use AP\Type\Object\Article;
use AP\Type\Object\Audio;
use AP\Type\Object\Document;
use AP\Type\Object\Event;
use AP\Type\Object\Image;
use AP\Type\Object\Mention;
use AP\Type\Object\Note;
use AP\Type\Object\Page;
use AP\Type\Object\Place;
use AP\Type\Object\Profile;
use AP\Type\Object\Relationship;
use AP\Type\Object\Tombstone;
use AP\Type\Object\Video;
use stdClass;

class APObjectFactory
{

    /**
     * @throws APObjectException
     */
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
                $object = new OrderedCollection();
                break;
            case 'Link':
                $object = new Link();
                break;
            case 'IntransitiveActivity':
                $object = new IntransitiveActivity();
                break;
            case 'OrderedCollectionPage':
                $object = new OrderedCollectionPage();
                break;
            case 'CollectionPage':
                $object = new CollectionPage();
                break;
            case 'Activity':
                $object = new Activity();
                break;
            case 'Object':
                $object = new APObject();
                break;
            case 'Collection':
                $object = new Collection();
                break;
            case 'Add':
                $object = new Add();
                break;
            case 'TentativeAccept':
                $object = new TentativeAccept();
                break;
            case 'Join':
                $object = new Join();
                break;
            case 'Flag':
                $object = new Flag();
                break;
            case 'Update':
                $object = new Update();
                break;
            case 'Ignore':
                $object = new Ignore();
                break;
            case 'Offer':
                $object = new Offer();
                break;
            case 'Travel':
                $object = new Travel();
                break;
            case 'Dislike':
                $object = new Dislike();
                break;
            case 'Announce':
                $object = new Announce();
                break;
            case 'Follow':
                $object = new Follow();
                break;
            case 'Question':
                $object = new Question();
                break;
            case 'TentativeReject':
                $object = new TentativeReject();
                break;
            case 'Arrive':
                $object = new Arrive();
                break;
            case 'Create':
                $object = new Create();
                break;
            case 'Invite':
                $object = new Invite();
                break;
            case 'Like':
                $object = new Like();
                break;
            case 'Block':
                $object = new Block();
                break;
            case 'Read':
                $object = new Read();
                break;
            case 'Reject':
                $object = new Reject();
                break;
            case 'Listen':
                $object = new Listen();
                break;
            case 'View':
                $object = new View();
                break;
            case 'Remove':
                $object = new Remove();
                break;
            case 'Undo':
                $object = new Undo();
                break;
            case 'Delete':
                $object = new Delete();
                break;
            case 'Accept':
                $object = new Accept();
                break;
            case 'Leave':
                $object = new Leave();
                break;
            case 'Document':
                $object = new Document();
                break;
            case 'Event':
                $object = new Event();
                break;
            case 'Place':
                $object = new Place();
                break;
            case 'Note':
                $object = new Note();
                break;
            case 'Mention':
                $object = new Mention();
                break;
            case 'Video':
                $object = new Video();
                break;
            case 'Tombstone':
                $object = new Tombstone();
                break;
            case 'Relationship':
                $object = new Relationship();
                break;
            case 'Profile':
                $object = new Profile();
                break;
            case 'Audio':
                $object = new Audio();
                break;
            case 'Page':
                $object = new Page();
                break;
            case 'Article':
                $object = new Article();
                break;
            case 'Image':
                $object = new Image();
                break;
            case 'Application':
                $object = new Application();
                break;
            case 'Group':
                $object = new Group();
                break;
            case 'Service':
                $object = new Service();
                break;
            case 'Person':
                $object = new Person();
                break;
            case 'Organization':
                $object = new Organization();
                break;
        }
        if ($object === null) {
            throw new APObjectException("Could not create an object.  Factory could not determine the type.");
        }

        $object->load($input);



        return $object;
    }



}