<?php

require(__DIR__ . "./memory-cards.php");
require(__DIR__ . "./functions.php")
/*require(__DIR__ . "./difficulty.php"); */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Memory Game</title>
</head>

<body>
    <header>

    </header>
    <main>

        <section class="game-screen">
            <section class="playing-board">

                <div class="memory-board">
                    <div class="grid-board">
                        <?php

                        $themeChosen = $themePokemon;

                        $difficultyChosen = "hard";

                        $difficultyAndTheme = shortenThemeArrayByDifficulty($themeChosen, $difficultyChosen);

                        $memoryPairs = mergeAndshuffleArray($difficultyAndTheme);

                        foreach ($memoryPairs as $image) {
                        ?>
                            <div class="memory-card">
                                <img src="<?php echo $image['img'] ?>" alt="<?php echo $image['name'] ?>">
                            </div>
                            <!-- <div class="back-of-card"></div> -->
                        <?php
                        }

                        ?>
                    </div>
                </div>

                <div class="information">
                    <div class="time">
                        <p>Time left:</p>
                        <p>1:30</p>
                    </div>
                    <div class="pair-left">
                        <p>Pairs left:</p>
                        <p>4</p>
                    </div>
                    <div class="score">
                        <p>Score:</p>
                        <p>03259045</p>
                    </div>
                </div>
            </section>
        </section>


        <a href="score-screen.php">final score</a>
        <a href="difficulty.php">back</a>
    </main>

</body>

</html>