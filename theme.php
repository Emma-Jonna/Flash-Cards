<?php

declare(strict_types=1);

require("./memory-cards.php");
require("./header.php");

?>
<header>
    <div class="theme-title">
        <h2>Chose the theme</h2>
    </div>
</header>
<main>
    <section class="theme-buttons">
        <a class="hitman" type="button" href="difficulty.php?theme=hitman">Hitman</a>
        <a class="fire-emblem" type="button" href="difficulty.php?theme=fire-emblem">Fire Emblem</a>
        <a class="pokemon" type="button" href="difficulty.php?theme=pokemon">Pokemon</a>
    </section>

    <?php

    require("./footer.php");
