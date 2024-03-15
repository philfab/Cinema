<?php 
class Film {
    private int $id_film;
    private string $titre;
    private DateTime $dateSortie;
    private int $duree;
    private ?string $synopsis;
    private Genre $genre;
    private Realisateur $realisateur;
    private Casting $casting; 

    public function __construct(string $titre, string $dateSortie, int $duree, ?string $synopsis, Genre $genre, Realisateur $realisateur,Casting $Casting)
    {
        $this->id_film = IDGenerator::getUniqueId();
        $this->titre = $titre;
        $this->dateSortie =  new DateTime($dateSortie);
        $this->duree = $duree;
        $this->synopsis = $synopsis;
        $this->genre = $genre;
        $this->realisateur = $realisateur;
        $this->realisateur->ajouterFilm($this);//ajoute le film dans la liste des films du réalisateur
        $this->casting = $Casting;

    }

    public function getIdFilm(): int
    {
        return $this->id_film;
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

    public function getSynopsis(): ?string
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

    public function setTitre(string $titre)
    {
        $this->titre = $titre;
    }

    public function setDateSortie(string $dateSortie)
    {
        $this->dateSortie = new DateTime($dateSortie);
    }

    public function setDuree(int $duree)
    {
        $this->duree = $duree;
    }

    public function setSynopsis(?string $synopsis)
    {
        $this->synopsis = $synopsis;
    }

    public function setGenre(Genre $genre)
    {
        $this->genre = $genre;
    }

    public function setRealisateur(Realisateur $realisateur)
    {
        $this->realisateur = $realisateur;
    }

    public function listerCasting(): string
    {
        $resultat = "";
        foreach ($this->casting as $cast) {
           
        }
        return $resultat;
    }
}
?>