<?php

declare(strict_types=1);

require("./memory-cards.php");
require("./functions.php");
require("./header.php");

$themeValue = $_GET['theme'];

$difficultyValue = $_GET['difficulty'];
?>
<header>

</header>
<main>

    <section class="flash-cards-board">
        <?php

        if ($themeValue === 'hitman') {
            $themeChosen = $themeHitman;
        } elseif ($themeValue === 'fire-emblem') {
            $themeChosen = $themeFireEmblem;
        } elseif ($themeValue === 'pokemon') {
            $themeChosen = $themePokemon;
        }


        if ($difficultyValue === 'hitman') {
            $difficultyValue = $themeHitman;
        } elseif ($difficultyValue === 'fire-emblem') {
            $difficultyValue = $themeFireEmblem;
        } elseif ($difficultyValue === 'pokemon') {
            $difficultyValue = $themePokemon;
        }

        $difficultyAndTheme = shortenThemeArrayByDifficulty($themeChosen, $difficultyValue);

        $memoryPairs = ShuffleCards($difficultyAndTheme);

        foreach ($memoryPairs as $image) {
        ?>

            <section class="flash-cards">
                <section class="flash-card">
                    <div class="flash-card-inner">
                        <div class="back-of-card">
                            <p><?php echo $image['title'] .  "<br>" . $image['description']; ?></p>
                        </div>
                        <div class="front-of-card">
                            <img src="<?php echo $image['img'] ?>" alt="<?php echo $image['name'] ?>">
                        </div>
                    </div>
                </section>
            </section>
        <?php
        }
        ?>
    </section>

    <section class="choice-buttons">
        <a class="back-to-start" type="button" href="index.php">Back to start</a>
        <a class="shuffle-cards" type="button" href="memory-game.php?theme=<?php echo $themeValue ?>&difficulty=<?php echo $difficultyValue ?>">Shuffle cards</a>
    </section>

    <?php

    require("./footer.php");
