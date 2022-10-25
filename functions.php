<?php

require(__DIR__ . "./memory-cards.php");

/* $hitmanEasy = array_slice($themeHitman, 0, 6);

$hitmanMedium = array_slice($themeHitman, 0, 10);

$hitmanHard = array_slice($themeHitman, 0, 15); */

/* $themeHitmanPairs = array_merge($themeHitman, $themeHitman);

shuffle($themeHitmanPairs); */

// print_r(shortenArrayByDifficulty($themeHitman, "hard"));

// print_r(mergeAndshuffle(shortenArrayByDifficulty($themeHitman, "hard")));

/* $themeChosen = $themePokemon;

$difficultyChosen = "easy";

$difficultyAndTheme = shortenArrayByDifficulty($themeChosen, $difficultyChosen);

$memoryPairs = mergeAndshuffle($difficultyAndTheme);

print_r($memoryPairs);

foreach ($memoryPairs as $image) {
?>
    <div class="memory-card">
        <img src="<?php echo $image['img'] ?>" alt="<?php echo $image['name'] ?>">
        <!-- <img src="<?php echo $image['img'] ?>" alt="<?php echo $image['name'] ?>"> -->
    </div>
<?php
}
 */

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

function mergeAndshuffleArray(array $cards)
{
    //https://stackoverflow.com/questions/8234899/php-duplicate-values-in-an-array
    $cardsDoubbled = array_merge($cards, $cards);

    //https://www.w3schools.com/php/func_array_shuffle.asp
    shuffle($cardsDoubbled);

    return $cardsDoubbled;
}
