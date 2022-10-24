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
        <div class="difficulty-title">
            <h2>Chose the difficulty</h2>
        </div>
    </header>
    <main>
        <div class="difficulty-buttons">
            <button class="easy">
                <a href="memory-game.php">Easy</a>
            </button>
            <button class="medium">
                <a href="memory-game.php">Medium</a>
            </button>
            <button class="hard">
                <a href="memory-game.php">Hard</a>
            </button>
        </div>
    </main>

</body>

</html>