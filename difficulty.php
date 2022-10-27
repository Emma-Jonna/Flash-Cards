<?php

require(__DIR__ . "./memory-cards.php");
require(__DIR__ . "./header.php");

?>
<header>
    <div class="difficulty-title">
        <h2>Chose the difficulty</h2>
    </div>
</header>
<main>

    <section class="button-container">
        <div class="difficulty-buttons">
            <button class="easy">
                <a href="memory-game.php">Easy</a>
                <?php $difficultyChosen = "easy" ?>
            </button>
            <button class="medium">
                <a href="memory-game.php">Medium</a>
                <?php $difficultyChosen = "medium" ?>
            </button>
            <button class="hard">
                <a href="memory-game.php">Hard</a>
                <?php $difficultyChosen = "hard" ?>
            </button>
        </div>

        <div class="back-button">
            <button class="back">
                <a href="theme.php">Back</a>
            </button>
        </div>
    </section>

    <?php

    require(__DIR__ . "./footer.php");
