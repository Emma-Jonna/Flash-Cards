<?php

declare(strict_types=1);

require("./memory-cards.php");
require("./functions.php");
require("./header.php");
?>

<div class="memories-title">
    <h1>Memories</h1>
</div>
</header>
<main>

    <?php $randomNumber = randomGif($startpageGifs); ?>

    <section class="gif-and-startbutton">
        <div class="gif">
            <img src="<?php echo $startpageGifs[$randomNumber] ?>" alt="">
        </div>
        <a class="start-button" type="button" href="theme.php">Start</a>
    </section>

    <?php
    require("./footer.php");
