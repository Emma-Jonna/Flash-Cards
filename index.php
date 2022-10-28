<?php

declare(strict_types=1);

require("./memory-cards.php");
require("./functions.php");
require("./header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Flash Cards</title>
</head>

<body>
    <header>

        <div class="memories-title">
            <h1>Memories</h1>
        </div>
    </header>
    <main>

        <section class="gif-and-startbtton">

            <div class="gif">
                <img src="<?php echo $startpageGifs[randomGif($startpageGifs)] ?>" alt="">
            </div>

            <form action="theme.php">
                <div class="start-button">
                    <button>
                        <a href="theme.php">Start</a>
                    </button>
                </div>
            </form>

        </section>

    </main>

</body>

</html>