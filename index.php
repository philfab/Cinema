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

spl_autoload_register(function($class) {
    include "classes/" . $class . ".php";
    });

    $film = new Film(
        "Fight Club",
        '1999-01-01',
        120,
        "synopsis.",
        new Genre("Thriller"),
        new Realisateur("Fincher", "David", "M", "1962-08-28"),
        $casting
    );

    $casting = new Casting(
        $film, 
        [new Acteur("Pitt", "Brad",  "M", "1990-06-06"),
         new Acteur("Edward", "Norton",  "M", "1992-05-05")], 
        [new Role("Narateur"),
         new Role("Tyler Durden")]
    );

echo "Casting du film : " . $casting->listerCasting();

