<?= 'The Elephpent in the Room';

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
    <h1>Hello World</h1>
    <p>it's 13:45</p>

    <div class="boards">
        <div class="player-one-board">

            <?php

            foreach ($playingBoard as $rows) {
                # code...
            }

            ?>

        </div>
        <div class="computer-board"></div>
    </div>

</body>

</html>