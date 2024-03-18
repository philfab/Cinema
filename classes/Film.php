<?php
class Film
{
    private int $id_film;
    private string $titre;
    private DateTime $dateSortie;
    private int $duree;
    private ?string $synopsis;
    private Genre $genre;
    private Realisateur $realisateur;
    private $castings = [];

    public function __construct(string $titre, string $dateSortie, int $duree, ?string $synopsis, Genre $genre, Realisateur $realisateur)
    {
        $this->id_film = Indexation::tabFilms[$titre];
        $this->titre = $titre;
        $this->dateSortie =  new DateTime($dateSortie);
        $this->duree = $duree;
        $this->synopsis = $synopsis;
        $this->genre = $genre;
        $this->genre->addFilm($this);
        $this->realisateur = $realisateur;
        $realisateur->addFilm($this);
    }

    public function getIdFilm(): int
    {
        return $this->id_film;
    }

    public function addCasting(Casting $casting)
    {
        $this->castings[] = $casting; //ajoute un casting a la liste
    }

    public function getCastings(): array
    {
        return $this->castings;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function getDateSortie(): string
    {
        return $this->dateSortie->format('Y-m-d');
    }

    public function getDuree(): int
    {
        return $this->duree;
    }

    public function getSynopsis(): ?string // peut être null
    {
        return $this->synopsis;
    }

    public function getGenre(): Genre
    {
        return $this->genre;
    }

    public function getRealisateur(): Realisateur
    {
        return $this->realisateur;
    }

    public function listerCasting()
    {
        $result = "Dans le film " . $this->getTitre() . ", ";
        $descriptions = [];
        foreach ($this->castings as $casting) {
            $role = $casting->getRole()->getNomPersonnage();
            $acteur = $casting->getActeur()->getNomComplet();
            $descriptions[] = "$role a été incarné par $acteur";
        }

        $result .= implode(", ", $descriptions) . ".<br>";
        return $result;
    }     
}
