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