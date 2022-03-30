<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MovieRepository::class)
 * @ORM\Table(name="movie")
 */
class Movie
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
     * @ORM\Column(type="string", length=255)
     */
    private $link;

    /**
     * @ORM\ManyToMany(targetEntity=Category::class, inversedBy="movies")
     * @ORM\JoinTable(name="movie_category")
     */
    private $categories;

    /**
     * @ORM\ManyToMany(targetEntity=Subuser::class, inversedBy="likedMovies")
     */
    private $likedBy;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\OneToMany(targetEntity=Video::class, mappedBy="movie")
     */
    private $episodes;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->likedBy = new ArrayCollection();
        $this->episodes = new ArrayCollection();
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

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        $this->categories->removeElement($category);

        return $this;
    }

    public function setCategories($category): self
    {
        $this->categories = $category;

        return $this;
    }


    /**
     * @return Collection<int, Subuser>
     */
    public function getLikedBy(): Collection
    {
        return $this->likedBy;
    }

    public function addLikedBy(Subuser $likedBy): self
    {
        if (!$this->likedBy->contains($likedBy)) {
            $this->likedBy[] = $likedBy;
        }

        return $this;
    }

    public function removeLikedBy(Subuser $likedBy): self
    {
        $this->likedBy->removeElement($likedBy);

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return Collection<int, Video>
     */
    public function getEpisodes(): Collection
    {
        return $this->episodes;
    }

    public function addEpisode(Video $episode): self
    {
        if (!$this->episodes->contains($episode)) {
            $this->episodes[] = $episode;
            $episode->setMovie($this);
        }

        return $this;
    }

    public function removeEpisode(Video $episode): self
    {
        if ($this->episodes->removeElement($episode)) {
            // set the owning side to null (unless already changed)
            if ($episode->getMovie() === $this) {
                $episode->setMovie(null);
            }
        }

        return $this;
    }



}

