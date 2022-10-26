<?php

require(__DIR__ . "./memory-cards.php");
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
        <div class="theme-title">
            <h2>Chose the theme</h2>
        </div>
    </header>
    <main>
        <section class="button-container">
            <div class="theme-buttons">
                <button class="hitman">
                    <a href="difficulty.php">Hitman</a>

                    <?php $themeChosen = $themeHitman ?>

                </button>
                <button class="fire-emblem">
                    <a href="difficulty.php">Fire Emblem</a>

                    <?php $themeChosen = $themeFireEmblem ?>

                </button>
                <button class="pokemon">
                    <a href="difficulty.php">Pokemon</a>

                    <?php $themeChosen = $themePokemon ?>

                </button>
            </div>
            <div class="back-button">
                <button class="back">
                    <a href="index.php">Back</a>
                </button>
            </div>
        </section>
    </main>

</body>

</html>