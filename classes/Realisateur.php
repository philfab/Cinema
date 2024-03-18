<?php
class Realisateur extends Personne
{
    private  $films = [];

    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance)
    {
        parent::__construct(Indexation::tabRealisateurs[$prenom . ' ' . $nom], $prenom, $nom, $sexe, $dateNaissance);
    }

    public function addFilm(Film $film)
    {
        $this->films[] = $film;
    }

    public function listerFilms(){
        $result = "Filmographie du réalisateur " . parent::getNomComplet(). " : ";
        $descriptions = [];
        foreach ($this->films as $film) 
                $result .= $film->getTitre();

        $result .= implode(", ", $descriptions) . ".<br>";
        return $result;
    }
}
