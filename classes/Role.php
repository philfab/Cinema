<?php
class Role
{
    private int $id_role;
    private string $nomPersonnage;
    private array $acteurs = [];

    public function __construct(string $nomPersonnage)
    {
        $this->id_role = IDGenerator::getUniqueId();
        $this->nomPersonnage = $nomPersonnage;
    }

    public function getIdRole(): int
    {
        return $this->id_role;
    }

    public function getNomPersonnage(): string
    {
        return $this->nomPersonnage;
    }

    public function getActeurs(): array
    {
        return $this->acteurs;
    }

    public function setNomPersonnage(string $nomPersonnage)
    {
        $this->nomPersonnage = $nomPersonnage;
    }

    public function ajouterActeur(Acteur $acteur)
    {
        // check si l'acteur y est deja pour éviter les doublons
        if (!in_array($acteur, $this->acteurs, true)) {
            $this->acteurs[] = $acteur;
        }
    }

    public function listerActeurs(): string
    {
        $resultat = "";
        foreach ($this->acteurs as $acteur) {
            $resultat .= $acteur->getNomComplet() . "\n";
        }
        return $resultat;
    }
}
