<?php

namespace App\Entity;

use App\Repository\PostsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostsRepository::class)
 */
class Posts
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $postTitle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $postSlug;

    /**
     * @ORM\Column(type="text")
     */
    private $postContent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $postImage;

    /**
     * @ORM\Column(type="datetime")
     */
    private $postCreatedAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $postUpdatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPostTitle(): ?string
    {
        return $this->postTitle;
    }

    public function setPostTitle(string $postTitle): self
    {
        $this->postTitle = $postTitle;

        return $this;
    }

    public function getPostSlug(): ?string
    {
        return $this->postSlug;
    }

    public function setPostSlug(string $postSlug): self
    {
        $this->postSlug = $postSlug;

        return $this;
    }

    public function getPostContent(): ?string
    {
        return $this->postContent;
    }

    public function setPostContent(string $postContent): self
    {
        $this->postContent = $postContent;

        return $this;
    }

    public function getPostImage(): ?string
    {
        return $this->postImage;
    }

    public function setPostImage(string $postImage): self
    {
        $this->postImage = $postImage;

        return $this;
    }

    public function getPostCreatedAt(): ?\DateTimeInterface
    {
        return $this->postCreatedAt;
    }

    public function setPostCreatedAt(\DateTimeInterface $postCreatedAt): self
    {
        $this->postCreatedAt = $postCreatedAt;

        return $this;
    }

    public function getPostUpdatedAt(): ?\DateTimeInterface
    {
        return $this->postUpdatedAt;
    }

    public function setPostUpdatedAt(?\DateTimeInterface $postUpdatedAt): self
    {
        $this->postUpdatedAt = $postUpdatedAt;

        return $this;
    }
}
