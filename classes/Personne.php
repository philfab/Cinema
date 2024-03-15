<?php
class Personne
{
    protected int $id_personne;
    protected string $nom;
    protected string $prenom;
    protected string $sexe;
    protected DateTime $dateNaissance;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
    {
        $this->id_personne = IDGenerator::getUniqueId();
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateNaissance = new DateTime($dateNaissance);
    }

    public function getIdPersonne(): int
    {
        return $this->id_personne;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getSexe(): string
    {
        return $this->sexe;
    }

    public function getDateNaissance(): string
    {
        return $this->dateNaissance->format('Y-m-d');
    }

    public function setDateNaissance(string $dateNaissance): void
    {
        $this->dateNaissance = new DateTime($dateNaissance);
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function setSexe(string $sexe): void
    {
        $this->sexe = $sexe;
    }

    public function getNomComplet(): string
    {
        return $this->prenom . ' ' . $this->nom;
    }
}
