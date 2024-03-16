<?php
class Realisateur extends Personne
{
    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance)
    {
        parent::__construct(Indexation::tabRealisateurs[$prenom . ' ' . $nom], $prenom, $nom, $sexe, $dateNaissance);
    }

    public function getIdRealisateur()
    {
        return parent::getIdPersonne();
    }
}
