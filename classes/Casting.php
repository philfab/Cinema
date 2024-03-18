<?php
class Casting
{
    private Film $film;
    private Role $role;
    private Acteur $acteur;

    public function __construct(Film $film, Acteur $acteur, Role $role)
    {
        $this->film = $film;
        $this->acteur = $acteur;
        $this->role = $role;
        $film->addCasting($this);
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
