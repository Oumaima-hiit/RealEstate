<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RealestateTypeRepository")
 */
class RealestateType
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
     * @ORM\ManyToOne(targetEntity="App\Entity\RealestateType", inversedBy="realestateTypes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RealestateType", mappedBy="type", orphanRemoval=true)
     */
    private $realestateTypes;

    public function __construct()
    {
        $this->realestateTypes = new ArrayCollection();
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

    public function getType(): ?self
    {
        return $this->type;
    }

    public function setType(?self $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getRealestateTypes(): Collection
    {
        return $this->realestateTypes;
    }

    public function addRealestateType(self $realestateType): self
    {
        if (!$this->realestateTypes->contains($realestateType)) {
            $this->realestateTypes[] = $realestateType;
            $realestateType->setType($this);
        }

        return $this;
    }

    public function removeRealestateType(self $realestateType): self
    {
        if ($this->realestateTypes->contains($realestateType)) {
            $this->realestateTypes->removeElement($realestateType);
            // set the owning side to null (unless already changed)
            if ($realestateType->getType() === $this) {
                $realestateType->setType(null);
            }
        }

        return $this;
    }
}
