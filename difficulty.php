<?php

declare(strict_types=1);

require(__DIR__ . "./memory-cards.php");
require(__DIR__ . "./header.php");
require(__DIR__ . "./functions.php");
// require(__DIR__ . "./GET.php");

?>
<header>
    <div class="difficulty-title">
        <h2>Chose the difficulty</h2>
    </div>
</header>
<main>

    <!-- <section class="difficulty-maps">
        <div class="difficuly-visual-cards">
            <div class="easy-map"><?php difficultyMap($memoryMapEasy) ?></div>
            <div class="medium-map"><?php difficultyMap($memoryMapMedium) ?></div>
            <div class="hard-map"><?php difficultyMap($memoryMapHard) ?></div>
        </div>
    </section> -->

    <section class="button-container">

        <div class="difficulty-buttons">

            <form action="memory-game.php" method="GET">
                <button class="easy" name="easy">
                    <a href="memory-game.php">Easy</a>
                    <?php $difficultyChosen = "easy" ?>
                </button>
            </form>

            <form action="memory-game.php" method="GET">
                <button class="medium" name="medium">
                    <a href="memory-game.php">Medium</a>
                    <?php $difficultyChosen = "medium" ?>
                </button>
            </form>

            <form action="memory-game.php" method="GET">
                <button class="hard" name="hard">
                    <a href="memory-game.php">Hard</a>
                    <?php $difficultyChosen = "hard" ?>
                </button>
            </form>

        </div>

        <form action="theme.php">
            <button class="back">
                <a href="theme.php">Back</a>
            </button>
        </form>

    </section>

    <?php

    require(__DIR__ . "./footer.php");
