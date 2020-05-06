<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CityRepository")
 */
class City
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
    private $titlr;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitlr(): ?string
    {
        return $this->titlr;
    }

    public function setTitlr(string $titlr): self
    {
        $this->titlr = $titlr;

        return $this;
    }
}
