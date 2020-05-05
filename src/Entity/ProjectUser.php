<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjectUserRepository")
 */
class ProjectUser
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
    private $in_out_status;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\User", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_user;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Project", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_project;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInOutStatus(): ?string
    {
        return $this->in_out_status;
    }

    public function setInOutStatus(string $in_out_status): self
    {
        $this->in_out_status = $in_out_status;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->id_user;
    }

    public function setIdUser(User $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getIdProject(): ?Project
    {
        return $this->id_project;
    }

    public function setIdProject(Project $id_project): self
    {
        $this->id_project = $id_project;

        return $this;
    }
}
