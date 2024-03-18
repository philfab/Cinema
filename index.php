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
$genre = new Genre("Drame");
$film = new Film("Pulp Fiction", "1994-01-01", 153, "", $genre, $realisateur);

$acteur1 = new Acteur("Bruce", "Willis", "M", "1955-06-19");
$acteur2 = new Acteur("John", "Travolta", "M", "1959-02-18");
$role1 = new Role("Butch Coolidge");
$role2 = new Role("Vincent Vega");

$casting = new Casting($film, $acteur1, $role1 );
$casting = new Casting($film, $acteur2, $role2);

echo $film->listerCasting();
echo $acteur1->listerFilmographie();
echo $acteur2->listerFilmographie();
echo $realisateur->listerFilms();
echo $role1->listerActeursParRole();
echo $genre->listerFilmsParGenre();
