<?php

declare(strict_types=1);

require(__DIR__ . "./memory-cards.php");
require(__DIR__ . "./header.php");
// require(__DIR__ . "./GET.php");

?>
<header>
    <div class="theme-title">
        <h2>Chose the theme</h2>
    </div>
</header>
<main>
    <section class="button-container">

        <div class="theme-buttons">

            <form action="difficulty.php" method="GET">
                <button class="hitman" name="hitman">
                    <a href="difficulty.php">Hitman</a>
                </button>
            </form>

            <form action="difficulty.php" method="GET">
                <button class="fire-emblem" name="fire-emblem">
                    <a href="difficulty.php">Fire Emblem</a>
                </button>
            </form>

            <form action="difficulty.php" method="GET">
                <button class="pokemon" name="pokemon">
                    <a href="difficulty.php">Pokemon</a>
                </button>
            </form>

        </div>

        <form action="index.php">
            <button class="back">
                <a href="index.php">Back</a>
            </button>
        </form>
    </section>

    <?php

    require(__DIR__ . "./footer.php");
