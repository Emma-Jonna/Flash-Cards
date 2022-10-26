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

        <?php

        $themeChosen = $themePokemon;

        $difficultyChosen = "hard";

        $difficultyAndTheme = shortenThemeArrayByDifficulty($themeChosen, $difficultyChosen);

        $memoryPairs = ShuffleCards($difficultyAndTheme);

        foreach ($memoryPairs as $image) {
        ?>

            <section class="flash-cards">
                <section class="flash-card">
                    <div class="flash-card-inner">
                        <div class="back-of-card">
                            <p>hello</p>
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



        <section class="choice-buttons">
            <button class="back-to-start">
                <a href="index.php">Back to start</a>
            </button>
            <button class="shuffle-cards">
                <a href="">Shuffle cards</a>
            </button>
            <button class="back">
                <a href="difficulty.php">back</a>
            </button>
        </section>
    </main>

</body>

</html>