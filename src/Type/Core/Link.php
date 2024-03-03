<?php

namespace AP\Type\Core;

class Link extends AbstractAPObject implements APObjectInterface
{
    /**
     * https://www.w3.org/ns/activitystreams#Link
     *
     * A Link is an indirect, qualified reference to a resource
     * identified by a URL. The fundamental model for links is
     * established by [ RFC5988]. Many of the properties defined
     * by the Activity Vocabulary allow values that are either
     * instances of Object or Link. When a Link is used, it
     * establishes a qualified relation connecting the subject
     * (the containing object) to the resource identified by the
     * href. Properties of the Link are properties of the reference
     * as opposed to properties of the resource.
     */

    protected string $href;
    protected string $rel;
    protected string $mediatype;
    protected string $name;
    protected string $hreflang;
    protected string $height;
    protected string $width;
    protected string $preview;
    protected string $type = 'Link';

    /**
     * @return string
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @param string $href
     * @return Link
     */
    public function setHref(string $href): static
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @return string
     */
    public function getRel(): string
    {
        return $this->rel;
    }

    /**
     * @param string $rel
     * @return Link
     */
    public function setRel(string $rel): static
    {
        $this->rel = $rel;
        return $this;
    }

    /**
     * @return string
     */
    public function getMediaType(): string
    {
        return $this->mediaType;
    }

    /**
     * @param string $mediaType
     * @return Link
     */
    public function setMediaType(string $mediaType): static
    {
        $this->mediaType = $mediaType;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Link
     */
    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getHreflang(): string
    {
        return $this->hreflang;
    }

    /**
     * @param string $hreflang
     * @return Link
     */
    public function setHreflang(string $hreflang): static
    {
        $this->hreflang = $hreflang;
        return $this;
    }

    /**
     * @return string
     */
    public function getHeight(): string
    {
        return $this->height;
    }

    /**
     * @param string $height
     * @return Link
     */
    public function setHeight(string $height): static
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return string
     */
    public function getWidth(): string
    {
        return $this->width;
    }

    /**
     * @param string $width
     * @return Link
     */
    public function setWidth(string $width): static
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return string
     */
    public function getPreview(): string
    {
        return $this->preview;
    }

    /**
     * @param string $preview
     * @return Link
     */
    public function setPreview(string $preview): static
    {
        $this->preview = $preview;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Link
     */
    public function setType(string $type): Link
    {
        $this->type = $type;
        return $this;
    }
    
    

}