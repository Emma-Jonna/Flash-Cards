<?php

declare(strict_types=1);

require("./memory-cards.php");
require("./functions.php");
require("./header.php");
// require("./difficulty.php");
?>
<header>

</header>
<main>
    <section class="flash-cards-board">
        <?php

        $themeChosen = $themeHitman;

        // $themeChosen = $theme;

        $difficultyChosen = "hard";

        // $difficultyChosen = $difficulty;

        $difficultyAndTheme = shortenThemeArrayByDifficulty($themeChosen, $difficultyChosen);

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

        <form action="index.php">
            <button class="back-to-start">
                <a href="index.php">Back to start</a>
            </button>
        </form>

        <form action="memory-game.php">
            <button class="shuffle-cards">
                <a href="memory-game.php">Shuffle cards</a>
            </button>
        </form>

        <form action="difficulty.php">
            <button class="back">
                <a href="difficulty.php">back</a>
            </button>
        </form>
    </section>

    <?php

    require("./footer.php");
