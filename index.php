<h1>
    Exo Cinema
</h1>

<p>
    Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.
</p>

<h2>
    Résultat
</h2>

<?php

spl_autoload_register(function ($class) {
    require "classes/" . $class . ".php";
});

$realisateur = new Realisateur("Quentin", "Tarantino", "M", "1963-03-27");
$film = new Film("Pulp Fiction", "1994-01-01", 153, "", new Genre("Drame"), $realisateur);
$casting = new Casting($film, new Acteur("Bruce", "Willis", "M", "1955-06-19"), new Role("Butch Coolidge"));
$film->addCasting($casting);
$casting = new Casting($film, new Acteur("John", "Travolta", "M", "1959-02-18"), new Role("Vincent Vega"));
$film->addCasting($casting);
FilmsManager::addFilm($film);

echo FilmsManager::listerCastingParFilm($film->getIdFilm());
echo FilmsManager::listerFilmographieActeur("Bruce Willis");
echo FilmsManager::listerFilmographieRealisateur("Quentin Tarantino");
echo FilmsManager::listerActeursParRole("Vincent Vega");
echo FilmsManager::listerFilmsParGenre("Drame");
