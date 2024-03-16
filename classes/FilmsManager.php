<?php
final class FilmsManager
{
    private static $films = []; // liste des films

    public static function addFilm(Film $film) // ajoute un film a la liste
    {
        self::$films[] = $film;
    }

    public static function getAllCastings() // renvoie tous les castings de tous les films
    {
        $tousLesCastings = [];
        foreach (self::$films as $film) {
            $tousLesCastings = array_merge($tousLesCastings, $film->getCastings());
        }
        return $tousLesCastings;
    }

    public static function listerActeursParRole(string $nomPersonnage): string // renvoie tous les acteurs par role
    {
        $id_role = Indexation::tabRoles[$nomPersonnage];
        $nomsActeurs = [];
        foreach (self::getAllCastings() as $casting) {
            if ($casting->role->getIdRole() == $id_role) {
                $nomCompletActeur = $casting->acteur->getNomComplet();
                if (!in_array($nomCompletActeur, $nomsActeurs)) {
                    $nomsActeurs[] = $nomCompletActeur;
                }
            }
        }
        $resultat = "Les acteurs ayant joué le rôle de $nomPersonnage : " . implode(", ", $nomsActeurs) . ".<br>";

        return $resultat;
    }

    public static function listerCastingParFilm(int $id_film): string // renvoie le casting d'un film
    {
        $result = "";
        foreach (self::$films as $film) {
            if ($film->getIdFilm() == $id_film) {
                $result .= "Dans le film " . $film->getTitre() . ", ";
                foreach ($film->getCastings() as $casting) {
                    $role = $casting->getRole()->getNomPersonnage();
                    $acteur = $casting->getActeur()->getNomComplet();

                    $descriptions[] = "$role a été incarné par $acteur";
                }

                // concatène descriptions avec une virgule
                $result .= implode(", ", $descriptions) . ".<br>";
                return $result;
            }
        }
    }

    public static function listerFilmsParGenre(string $designation): string // renvoie tous les films par genre
    {
        $id_genre = Indexation::tabGenres[$designation];
        $nomsFilms = [];
        foreach (self::$films as $film) {
            if ($film->getGenre()->getIdGenre() == $id_genre) {
                $nomsFilms[] = $film->getTitre();
            }
        }
        $nombreDeFilms = count($nomsFilms);
        $result = "Le genre $designation est associé à $nombreDeFilms film(s) : " . implode(", ", $nomsFilms) . ".<br>";
        return $result;
    }

    public static function listerFilmographieActeur(string $nomActeur): string // renvoie tous les films d'un acteur
    {
        $id_acteur = Indexation::tabActeurs[$nomActeur];
        $result = "Filmographie de $nomActeur : ";
        $films = [];
        foreach (self::getAllCastings() as $casting) {
            if ($casting->getActeur()->getIdActeur() == $id_acteur) {
                $films[] = $casting->getFilm()->getTitre();
            }
        }
        $result .= implode(", ", $films) . ".<br>";

        return $result;
    }

    public static function listerFilmographieRealisateur(string $nomRealisateur): string // renvoie tous les films d'un realisateur
    {
        $id_realisateur = Indexation::tabRealisateurs[$nomRealisateur];
        $result = "Filmographie du réalisateur $nomRealisateur : ";
        $films = [];
        foreach (self::$films as $film) {
            if ($film->getRealisateur()->getIdRealisateur() == $id_realisateur) {
                // évite les doublons
                if (!in_array($film->getTitre(), $films)) {
                    $films[] = $film->getTitre();
                }
            }
        }
        $result .= implode(", ", $films) . ".<br>";

        return $result;
    }
}
