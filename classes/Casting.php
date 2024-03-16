<?php
class Casting
{
    public Film $film;
    public Role $role;
    public Acteur $acteur;

    public function __construct(Film $film, Acteur $acteur, Role $role)
    {
        $this->film = $film;
        $this->acteur = $acteur;
        $this->role = $role;
    }

    public function getFilm(): Film
    {
        return $this->film;
    }

    public function getActeur(): Acteur
    {
        return $this->acteur;
    }

    public function getRole(): Role
    {
        return $this->role;
    }
}
