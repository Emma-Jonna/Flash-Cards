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
        <h2>Chose the theme</h2>
    </header>
    <main>
        <div class="theme-buttons">
            <button class="hitman">
                <a href="difficulty.php">Hitman</a>
                <img src="" alt="">
            </button>
            <button class="fire-emblem">
                <a href="difficulty.php">Fire Emblem</a>
                <img src="" alt="">
            </button>
            <button class="pokemon">
                <a href="difficulty.php">Pokemon</a>
                <img src="" alt="">
            </button>
        </div>
    </main>

</body>

</html>