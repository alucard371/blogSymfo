<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AuthorRepository")
 */
class Author
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $company;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $shortBio;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $facebook;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $twitter;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $github;

	/**
	 * @return mixed
	 */
	public function getId()
    {
        return $this->id;
    }

	/**
	 * @return null|string
	 */
	public function getName(): ?string
    {
        return $this->name;
    }

	/**
	 * @param string $name
	 *
	 * @return Author
	 */
	public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

	/**
	 * @return null|string
	 */
	public function getTitle(): ?string
    {
        return $this->title;
    }

	/**
	 * @param string $title
	 *
	 * @return Author
	 */
	public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

	/**
	 * @return null|string
	 */
	public function getUsername(): ?string
    {
        return $this->username;
    }

	/**
	 * @param string $username
	 *
	 * @return Author
	 */
	public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

	/**
	 * @return null|string
	 */
	public function getCompany(): ?string
    {
        return $this->company;
    }

	/**
	 * @param string $company
	 *
	 * @return Author
	 */
	public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

	/**
	 * @return null|string
	 */
	public function getShortBio(): ?string
    {
        return $this->shortBio;
    }

	/**
	 * @param string $shortBio
	 *
	 * @return Author
	 */
	public function setShortBio(string $shortBio): self
    {
        $this->shortBio = $shortBio;

        return $this;
    }

	/**
	 * @return null|string
	 */
	public function getPhone(): ?string
    {
        return $this->phone;
    }

	/**
	 * @param null|string $phone
	 *
	 * @return Author
	 */
	public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

	/**
	 * @return null|string
	 */
	public function getFacebook(): ?string
    {
        return $this->facebook;
    }

	/**
	 * @param null|string $facebook
	 *
	 * @return Author
	 */
	public function setFacebook(?string $facebook): self
    {
        $this->facebook = $facebook;

        return $this;
    }

	/**
	 * @return null|string
	 */
	public function getTwitter(): ?string
    {
        return $this->twitter;
    }

	/**
	 * @param null|string $twitter
	 *
	 * @return Author
	 */
	public function setTwitter(?string $twitter): self
    {
        $this->twitter = $twitter;

        return $this;
    }

	/**
	 * @return null|string
	 */
	public function getGithub(): ?string
    {
        return $this->github;
    }

	/**
	 * @param null|string $github
	 *
	 * @return Author
	 */
	public function setGithub(?string $github): self
    {
        $this->github = $github;

        return $this;
    }
}
