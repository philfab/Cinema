<?php
class Genre
{
  private int $id_genre;
  private string $designation;
  private  $films = [];
  
  public function __construct(string $designation)
  {
    $this->id_genre = Indexation::tabGenres[$designation];
    $this->designation = $designation;
  }

  public function addFilm(Film $film)
  {
      $this->films[] = $film;
  }

  public function getIdGenre(): int
  {
    return $this->id_genre;
  }

  public function getDesignation(): string
  {
    return $this->designation;
  }

  public function listerFilmsParGenre()
  {
    $nomsFilms = [];
        foreach ($this->films as $film) 
                $nomsFilms[] = $film->getTitre();
              
        $result = "Le genre $this->designation est associé à : " . implode(", ", $nomsFilms) . ".<br>";
        return $result;
  }
}
