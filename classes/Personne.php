<?php
abstract class Personne
{
    protected int $id_personne;
    protected string $nom;
    protected string $prenom;
    protected string $sexe;
    protected DateTime $dateNaissance;

    public function __construct(int $id_personne, string $prenom, string $nom, string $sexe, string $dateNaissance)
    {
        $this->id_personne = $id_personne;
        $this->prenom = $prenom;
        $this->nom = $nom;
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

    public function getNomComplet(): string // renvoie le nom complet    
    {
        return $this->prenom . ' ' . $this->nom;
    }
}
