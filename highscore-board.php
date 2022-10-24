<?php

/* require(__DIR__ . "./memory-cards.php");
require(__DIR__ . "./difficulty.php"); */
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

        <div class="score-screen">
            <section class="highscore-section">
                <div class="win-or-lose">
                    <h3>Highscore</h3>
                    <ol>
                        <li>Aron 3893205892</li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ol>

            </section>

            <section class="choice-buttons">
                <button class="back-to-start">
                    <a href="index.php">Back to start</a>
                </button>

                <button class="play-again">
                    <a href="memory-game.php">Play again</a>
                </button>
            </section>

            <a href="score-screen.php">Back</a>

        </div>
    </main>

</body>

</html>