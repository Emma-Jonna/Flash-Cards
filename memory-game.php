<?php

require(__DIR__ . "./memory-cards.php");
require(__DIR__ . "./functions.php");
require(__DIR__ . "./header.php");
/*require(__DIR__ . "./difficulty.php"); */
?>
<header>

</header>
<main>
    <section class="flash-cards-board">
        <?php

        $themeChosen = $themeFireEmblem;

        $difficultyChosen = "hard";

        $difficultyAndTheme = shortenThemeArrayByDifficulty($themeChosen, $difficultyChosen);

        $memoryPairs = ShuffleCards($difficultyAndTheme);

        foreach ($memoryPairs as $image) {
        ?>

            <section class="flash-cards">
                <section class="flash-card">
                    <div class="flash-card-inner">
                        <div class="back-of-card">
                            <p><?php echo $image['name']; ?></p>
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
        <button class="back-to-start">
            <a href="index.php">Back to start</a>
        </button>
        <button class="shuffle-cards">
            <a href="memory-game.php">Shuffle cards</a>
        </button>
        <button class="back">
            <a href="difficulty.php">back</a>
        </button>
    </section>

    <?php

    require(__DIR__ . "./footer.php");
