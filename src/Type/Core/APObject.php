<?php

namespace AP\Type\Core;

use AP\Type\Object\Image;
use DateTime;
use Exception;

class APObject extends AbstractAPObject implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Object
     *
     * Describes an object of any kind. The Object type serves as the base
     * type for most of the other kinds of objects defined in the Activity
     * Vocabulary, including other Core types such as Activity, IntransitiveActivity,
     * Collection and OrderedCollection.
     */

    protected array|string|null $_context = "https://www.w3.org/ns/activitystreams";

    protected APObjectInterface|array|string|null $attachment;
    protected ?string $attributedTo;
    protected ?string $audience;
    protected ?string $bcc;
    protected ?string $bto;
    protected ?string $cc;
    protected ?string $content;
    protected ?string $contentMap;
    protected ?string $context;
    protected ?string $duration;
    protected ?DateTime $endTime;
    protected ?string $generator;
    protected Image|string|null $icon;
    protected ?string $id;
    protected Image|string|null $image;
    protected ?string $inReplyTo;
    protected ?string $location;
    protected ?string $mediaType;
    protected ?string $name;
    protected ?string $nameMap;
    protected ?string $preview;
    protected ?DateTime $published;
    protected ?string $replies;
    protected ?DateTime $startTime;
    protected ?string $summary;
    protected ?string $summaryMap;
    protected ?string $tag;
    protected string|array|null $to;
    protected string $type = 'Object';
    protected ?string $updated;
    protected ?string $url;

    /**
     * @return APObjectInterface|array|string|null
     */
    public function getAttachment(): APObjectInterface|array|string|null
    {
        return $this->attachment;
    }

    /**
     * @param APObjectInterface|array|string|null $attachment
     * @return APObject
     */
    public function setAttachment(APObjectInterface|array|string|null $attachment): static
    {
        $this->attachment = $attachment;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getAttributedTo(): ?string
    {
        return $this->attributedTo;
    }

    /**
     * @param string $attributedTo
     * @return APObject
     */
    public function setAttributedTo(string $attributedTo): static
    {
        $this->attributedTo = $attributedTo;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getAudience(): ?string
    {
        return $this->audience;
    }

    /**
     * @param string $audience
     * @return APObject
     */
    public function setAudience(string $audience): static
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return APObject
     */
    public function setContent(string $content): static
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getContext(): ?string
    {
        return $this->context;
    }

    /**
     * @param string $context
     * @return APObject
     */
    public function setContext(string $context): static
    {
        $this->context = $context;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getContentMap(): ?string
    {
        return $this->contentMap;
    }

    /**
     * @param string $contentMap
     * @return APObject
     */
    public function setContentMap(string $contentMap): static
    {
        $this->contentMap = $contentMap;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return APObject
     */
    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getNameMap(): ?string
    {
        return $this->nameMap;
    }

    /**
     * @param string $nameMap
     * @return APObject
     */
    public function setNameMap(string $nameMap): static
    {
        $this->nameMap = $nameMap;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEndTime(): DateTime
    {
        return $this->endTime;
    }

    /**
     * @param DateTime|string|null $endTime
     * @return APObject
     * @throws Exception
     */
    public function setEndTime(DateTime|string|null $endTime): static
    {
        if (is_string($endTime)) { // Assume that this might be a date string...
            $endTime = new DateTime(strtotime($endTime));
        }
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getGenerator(): ?string
    {
        return $this->generator;
    }

    /**
     * @param string $generator
     * @return APObject
     */
    public function setGenerator(string $generator): static
    {
        $this->generator = $generator;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     * @return APObject
     */
    public function setIcon(string $icon): static
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return APObject
     */
    public function setImage(string $image): static
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getInReplyTo(): ?string
    {
        return $this->inReplyTo;
    }

    /**
     * @param string $inReplyTo
     * @return APObject
     */
    public function setInReplyTo(string $inReplyTo): static
    {
        $this->inReplyTo = $inReplyTo;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * @param string $location
     * @return APObject
     */
    public function setLocation(string $location): static
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getPreview(): ?string
    {
        return $this->preview;
    }

    /**
     * @param string $preview
     * @return APObject
     */
    public function setPreview(string $preview): static
    {
        $this->preview = $preview;
        return $this;
    }

    /**
     * @return ?DateTime
     */
    public function getPublished(): ?DateTime
    {
        return $this->published;
    }

    /**
     * @param DateTime|string|null $published
     * @return APObject
     * @throws Exception
     */
    public function setPublished(DateTime|string|null $published): static
    {
        if (is_string($published)) {
            $published = new DateTime(strtotime($published));
        }
        $this->published = $published;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getReplies(): ?string
    {
        return $this->replies;
    }

    /**
     * @param string $replies
     * @return APObject
     */
    public function setReplies(string $replies): static
    {
        $this->replies = $replies;
        return $this;
    }

    /**
     * @return ?DateTime
     */
    public function getStartTime(): ?DateTime
    {
        return $this->startTime;
    }

    /**
     * @param DateTime|string|null $startTime
     * @return APObject
     * @throws Exception
     */
    public function setStartTime(DateTime|string|null $startTime): static
    {
        if (is_string($startTime)) {
            $startTime = new DateTime(strtotime($startTime));
        }
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getSummary(): ?string
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     * @return APObject
     */
    public function setSummary(string $summary): static
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getSummaryMap(): ?string
    {
        return $this->summaryMap;
    }

    /**
     * @param string $summaryMap
     * @return APObject
     */
    public function setSummaryMap(string $summaryMap): static
    {
        $this->summaryMap = $summaryMap;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     * @return APObject
     */
    public function setTag(string $tag): static
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getUpdated(): ?string
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     * @return APObject
     */
    public function setUpdated(string $updated): static
    {
        $this->updated = $updated;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return APObject
     */
    public function setUrl(string $url): static
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getTo(): ?string
    {
        return $this->to;
    }

    /**
     * @param string|array|null $to
     * @return APObject
     */
    public function setTo(string|array|null $to): static
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getBto(): ?string
    {
        return $this->bto;
    }

    /**
     * @param string $bto
     * @return APObject
     */
    public function setBto(string $bto): static
    {
        $this->bto = $bto;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getCc(): ?string
    {
        return $this->cc;
    }

    /**
     * @param string $cc
     * @return APObject
     */
    public function setCc(string $cc): static
    {
        $this->cc = $cc;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getBcc(): ?string
    {
        return $this->bcc;
    }

    /**
     * @param string $bcc
     * @return APObject
     */
    public function setBcc(string $bcc): static
    {
        $this->bcc = $bcc;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getMediaType(): ?string
    {
        return $this->mediaType;
    }

    /**
     * @param string $mediaType
     * @return APObject
     */
    public function setMediaType(string $mediaType): static
    {
        $this->mediaType = $mediaType;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     * @return APObject
     */
    public function setDuration(string $duration): static
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return APObject
     */
    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }



}