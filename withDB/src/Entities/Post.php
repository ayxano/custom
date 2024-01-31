<?php

namespace Entities;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;

/**
 * @Entity
 */
class Post
{
    /**
     * @Column(type="integer")
     * @Id
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(type="string", unique=true)
     */
    private $slug;


    /**
     * @Column(type="text")
     */
    private $body;

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug($value)
    {
        $this->slug = $value;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($value)
    {
        $this->body = $value;
    }

}
