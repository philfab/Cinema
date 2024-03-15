<?php
class Casting {
    private int $id_casting;
    private Film $film;
    private array $acteurs;
    private array $roles;

    public function __construct(Film $film, array $acteurs, array $roles){
        $this->id_casting = IDGenerator::getUniqueId();
        $this->film = $film;

    }

    public function getIdCasting(): int{
        return $this->id_casting;
    }

    public function getFilm(): Film
    {
        return $this->film;
    }

    public function setFilm(Film $film)
    {
        $this->$film = $film;
    }

    public function getActeurs(): array
    {
        return $this->acteurs;
    }

    public function setActeur(Acteur $acteur)
    {
        $this->acteurs[] = $acteur;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function setRole(Role $role)
    {
        $this->roles[] = $role;
    }

    public function listerCasting(): string
    {
        $resultat = "";
        foreach ($this->acteurs as $acteur) {
            $resultat .= "Dans le film " . $this->film->getTitre() . ", ";
            $resultat .= $this->roles[0]->getNomRole() . " a été incarné par " . $acteur->getNomPersonne() . ". ";
        }
        return $resultat;
    }
}