<?php

declare(strict_types=1);

require("./memory-cards.php");
require("./header.php");
require("./functions.php");
require("./memory-cards.php");

$themeValue = $_GET['theme'];
?>
<header>
    <div class="difficulty-title">
        <h2>Chose the amount of cards</h2>
    </div>
</header>
<main>

    <section class="difficulty-maps">
        <div class="difficuly-visual-cards">

            <div class="easy-map-container">
                <?php
                difficultyMap($memoryMapEasy);
                ?>
            </div>

            <div class="medium-map-container">
                <?php
                difficultyMap($memoryMapMedium);
                ?>
            </div>

            <div class="hard-map-container">
                <?php
                difficultyMap($memoryMapHard);
                ?>
            </div>
        </div>
    </section>

    <section class="difficulty-buttons">
        <a class="easy" href="memory-game.php?theme=<?php echo $themeValue ?>&difficulty=easy" type="button">Six</a>
        <a class="medium" href="memory-game.php?theme=<?php echo $themeValue ?>&difficulty=medium" type="button">Ten</a>
        <a class="hard" href="memory-game.php?theme=<?php echo $themeValue ?>&difficulty=hard">Fifteen</a>
    </section>

    <?php

    require("./footer.php");
