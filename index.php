<?php

declare(strict_types=1);

require(__DIR__ . "./memory-cards.php");
require(__DIR__ . "./functions.php");
require(__DIR__ . "./header.php");
?>


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

    <?php

    require(__DIR__ . "./footer.php");
