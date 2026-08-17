<?php

class MatiereClasse
{
    private ?int $id;
    private int $classe_id;
    private int $matiere_id;

    public function __construct(int $classe_id, int $matiere_id, ?int $id = null)
    {
        $this->id = $id;
        $this->classe_id = $classe_id;
        $this->matiere_id = $matiere_id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getClasseId(): int
    {
        return $this->classe_id;
    }

    public function setClasseId(int $classe_id): void
    {
        $this->classe_id = $classe_id;
    }

    public function getMatiereId(): int
    {
        return $this->matiere_id;
    }

    public function setMatiereId(int $matiere_id): void
    {
        $this->matiere_id = $matiere_id;
    }
}
