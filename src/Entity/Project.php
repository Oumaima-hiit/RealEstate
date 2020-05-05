<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjectRepository")
 */
class Project
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
    private $project_state;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ProjectType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $project_type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProjectState(): ?bool
    {
        return $this->project_state;
    }

    public function setProjectState(bool $project_state): self
    {
        $this->project_state = $project_state;

        return $this;
    }

    public function getProjectType(): ?ProjectType
    {
        return $this->project_type;
    }

    public function setProjectType(?ProjectType $project_type): self
    {
        $this->project_type = $project_type;

        return $this;
    }
}
