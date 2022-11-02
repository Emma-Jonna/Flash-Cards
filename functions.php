<?php

declare(strict_types=1);

require("./memory-cards.php");

function difficultyMap(array $memoryMap)
{
    foreach ($memoryMap as $row) {

        foreach ($row as $block) {
?>
            <div></div>
<?php
        }
    }
}

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

function randomGif(array $gifs): int
{
    $randomGifKey = rand(0, count($gifs) - 1);

    return $randomGifKey;
}

function ShuffleCards(array $cards): array
{
    //https://www.w3schools.com/php/func_array_shuffle.asp
    shuffle($cards);

    return $cards;
}
