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
            <section class="score-section">
                <div class="win-or-lose">
                    <h3>You win</h3>
                </div>
                <div class="final-score">
                    <p>3893205892</p>
                </div>

                <form action="input">
                    <p>Enter your name</p>
                    <label for="Score"></label>
                    <button class="submit">
                        <a>Submit</a>
                    </button>
                </form>
            </section>
        </div>
        <a href="memory-game.php">Back</a>
        <a href="highscore-board.php">highscore board</a>
    </main>

</body>

</html>