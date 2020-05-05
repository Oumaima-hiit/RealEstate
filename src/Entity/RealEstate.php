<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RealEstateRepository")
 */
class RealEstate
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $nature;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNature(): ?bool
    {
        return $this->nature;
    }

    public function setNature(bool $nature): self
    {
        $this->nature = $nature;

        return $this;
    }
}
