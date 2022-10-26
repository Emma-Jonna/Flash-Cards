<?php

require(__DIR__ . "./memory-cards.php");

/* $hitmanEasy = array_slice($themeHitman, 0, 6);

$hitmanMedium = array_slice($themeHitman, 0, 10);

$hitmanHard = array_slice($themeHitman, 0, 15); */

// print_r(shortenArrayByDifficulty($themeHitman, "hard"));

// print_r(ShuffleCards(shortenArrayByDifficulty($themeHitman, "hard")));

// $themeChosen = $themePokemon;

/* $difficultyChosen = "easy";

$difficultyAndTheme = shortenThemeArrayByDifficulty($themeChosen, $difficultyChosen); */

function shortenThemeArrayByDifficulty(array $theme, string $difficulty): array
{
    //https://www.w3schools.com/php/func_array_slice.asp

    if ($difficulty === "easy") {
        $themeEasy = array_slice($theme, 0, 6);
        return $themeEasy;
    } elseif ($difficulty === "medium") {
        $themeMedium = array_slice($theme, 0, 10);
        return $themeMedium;
    } elseif ($difficulty === "hard") {
        $themeHard = array_slice($theme, 0, 15);
        return $themeHard;
    }
}

function ShuffleCards(array $cards)
{
    //https://www.w3schools.com/php/func_array_shuffle.asp
    shuffle($cards);

    return $cards;
}
