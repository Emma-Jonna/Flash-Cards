<?php

declare(strict_types=1);

require("./memory-cards.php");
require("./header.php");
require("./functions.php");
require("./memory-cards.php");
// require("./GET.php");

?>
<header>
    <div class="difficulty-title">
        <h2>Chose the difficulty</h2>
    </div>
</header>
<main>

    <section class="difficulty-maps">
        <div class="difficuly-visual-cards">

            <div class="easy-map-container">
                <?php

                foreach ($memoryMapEasy as $row) {

                    foreach ($row as $block) {
                ?>
                        <div class="easy-map"><?php echo $block ?></div>
                <?php
                    }
                    // echo "<br>";
                } ?>
            </div>

            <div class="medium-map-container">
                <?php

                foreach ($memoryMapMedium as $row) {

                    foreach ($row as $block) {
                ?>
                        <!-- <div><?php echo $block; ?></div> -->
                        <div class="medium-map"><?php echo $block ?></div>
                <?php
                    }
                    // echo "<br>";
                } ?>
            </div>

            <div class="hard-map-container">
                <?php

                foreach ($memoryMapHard as $row) {

                    foreach ($row as $block) {
                ?>
                        <!-- <div><?php echo $block; ?></div> -->
                        <div class="hard-map"><?php echo $block ?></div>
                <?php
                    }
                    // echo "<br>";
                } ?>
            </div>
        </div>
    </section>

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

    require("./footer.php");
