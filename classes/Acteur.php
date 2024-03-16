<?php
class Acteur extends Personne
{
    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance)
    {
        parent::__construct(Indexation::tabActeurs[$prenom . ' ' . $nom], $prenom, $nom, $sexe, $dateNaissance);
    }

    public function getIdActeur()
    {
        return parent::getIdPersonne();
    }

    public function getNomComplet() :string { 
        return parent::getNomComplet();
    }
}
