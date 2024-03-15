<?php
    class Realisateur extends Personne
    {
        private array $films = [];
    
        public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
        {
            parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        }
    
        public function getIdRealisateur(): int
        {
            return parent::getIdPersonne();
        }
    
        public function getFilms(): array
        {
            return $this->films;
        }
    
        public function ajouterFilm(Film $film): void
        {
            $this->films[] = $film;
        }
    
        public function listerFilms(): string
        {
            $resultat = "";
            foreach ($this->films as $film) {
                $resultat .= $film->getTitre() . "\n";
            }
            return $resultat;
        }


}