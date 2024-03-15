<?php 
class Genre
{
  private int $id_genre;
  private string $designation;

  public function __construct(string $designation)
  {
    $this->id_genre = IDGenerator::getUniqueId();
    $this->designation = $designation;
  }
}
