<?php

class Inscription
{
    private ?int $id;
    private int $eleve_id;
    private int $classe_id;
    private int $annee_scolaire_id;

    public function __construct(int $eleve_id, int $classe_id, int $annee_scolaire_id, ?int $id = null)
    {
        $this->id = $id;
        $this->eleve_id = $eleve_id;
        $this->classe_id = $classe_id;
        $this->annee_scolaire_id = $annee_scolaire_id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getEleveId(): int
    {
        return $this->eleve_id;
    }

    public function setEleveId(int $eleve_id): void
    {
        $this->eleve_id = $eleve_id;
    }

    public function getClasseId(): int
    {
        return $this->classe_id;
    }

    public function setClasseId(int $classe_id): void
    {
        $this->classe_id = $classe_id;
    }

    public function getAnneeScolaireId(): int
    {
        return $this->annee_scolaire_id;
    }

    public function setAnneeScolaireId(int $annee_scolaire_id): void
    {
        $this->annee_scolaire_id = $annee_scolaire_id;
    }
}
