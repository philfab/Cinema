<?php
class Acteur extends Personne
{

    private $castings = [];

    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance)
    {
        parent::__construct(Indexation::tabActeurs[$prenom . ' ' . $nom], $prenom, $nom, $sexe, $dateNaissance);
    }

    public function addCasting(Casting $casting)
    {
         $this->castings[] = $casting; //ajoute un casting a la liste
    }

    public function listerFilmographie()
    {
        $result = "Filmographie de " . $this->getNomComplet() . " : ";
        $films = [];
        foreach ($this->castings as $casting) 
            $films[] = $casting->getFilm()->getTitre();
        
        $result .= implode(", ", $films) . ".<br>";
        return $result;
    }
}
