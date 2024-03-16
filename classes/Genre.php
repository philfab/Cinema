<?php
class Genre
{
  private int $id_genre;
  private string $designation;

  public function __construct(string $designation)
  {
    $this->id_genre = Indexation::tabGenres[$designation];
    $this->designation = $designation;
  }

  public function getIdGenre(): int
  {
    return $this->id_genre;
  }

  public function getDesignation(): string
  {
    return $this->designation;
  }
}
