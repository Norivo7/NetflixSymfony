<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MovieRepository::class)
 * @ORM\Table(name="movie")
 */
class Movie
{
//    public function __toString()
//    {
//        return $this->title;
//    }
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $year;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img;

    /**
     * @ORM\Column(type="integer")
     */
    private $likes;
//
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="movies")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $link;

    public function __construct()
    {
//        $this->category = new ArrayCollection(); // many2many
        $this->likes = 0;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getLikes(): ?int
    {
        return $this->likes;
    }

    public function setLikes(int $likes): self
    {
        $this->likes = $likes;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }


//    public function addCategory(Category $category): self       // many to many, nie trybi, kiedy indziej ogarne
//    {
//        if (!$this->category->contains($category)) {
//            $this->category[] = $category; // jezeli movie nie ma tej kategorii, dodaj obecną kategorie
//        }
//        return $this;
//    }

//    public function removeCategory(Category $category): self
//    {
//        $this->category->removeElement($category);
//
//        return $this;
//    }
                    // ManyToOne pozostalosci
    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function setIsSerial(bool $true)
    {
        
    }

}

