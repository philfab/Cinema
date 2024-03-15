<?php
class Acteur extends Personne
{
    private array $roles = [];
    private array $films = [];

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
    }

    public function getIdActeur(): int
    {
        return parent::getIdPersonne();
    }

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function getFilms(): array
    {
        return $this->films;
    }

    public function ajouterRole(Role $role): void //pour suivre roles d'un acteur mais pas d'un film
    {
        if (!in_array($role, $this->roles, true)) {
            $this->roles[] = $role;
        }
    }

    public function ajouterFilm(Film $film): void //pour suivre films d'un acteur
    {
        if (!in_array($film, $this->films, true)) {
            $this->films[] = $film;
        }
    }

    public function listerRoles(): string
    {
        $resultat = "";
        foreach ($this->roles as $role) {
            $resultat .= $role->getNomPersonnage() . "\n";
        }
        return $resultat;
    }
}
