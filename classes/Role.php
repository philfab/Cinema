<?php
class Role
{
    private int $id_role;
    private string $nomPersonnage;

    public function __construct(string $nomPersonnage)
    {
        $this->id_role = Indexation::tabRoles[$nomPersonnage];
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
}
