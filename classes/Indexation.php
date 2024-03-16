<?php
// classe regroupant les index uniques des films,acteurs,roles,genres,realisateurs
final class Indexation
{

    public const tabActeurs = [
        "John Travolta" => 1,
        "Samuel Jackson" => 11,
        "Bruce Willis" => 111,
    ];

    public const tabRoles = [
        "Vincent Vega" => 2,
        "Jules Winnfield" => 22,
        "John McClane" => 222,
        "Butch Coolidge" => 2222,
    ];

    public const tabGenres = [
        "Action" => 3,
        "Drame" => 33,
        "Comédie" => 333,
    ];

    public const tabRealisateurs = [
        "Quentin Tarantino" => 4,
        "James Cameron" => 44,
        "John McTiernan" => 444,
    ];

    public const tabFilms = [
        "Pulp Fiction" => 5,
        "Piege de Cristal" => 55,
        "Titanic" => 555,
    ];
}
