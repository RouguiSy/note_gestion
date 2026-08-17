<?php

class Eleve
{
    private ?int $id;
    private string $matricule;
    private string $nom;
    private string $prenom;
    private string $status;

    public function __construct(string $matricule, string $nom, string $prenom, string $status, ?int $id = null)
    {
        $this->id = $id;
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->status = $status;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getMatricule(): string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): void
    {
        $this->matricule = $matricule;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}
