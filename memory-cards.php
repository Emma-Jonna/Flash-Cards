<?php

$memoryMapEasy = [
    [0, 0, 0, 0],
    [0, 0, 0, 0],
    [0, 0, 0, 0]
];

$memoryMapMedium = [
    [0, 0, 0, 0],
    [0, 0, 0, 0],
    [0, 0, 0, 0],
    [0, 0, 0, 0],
    [0, 0, 0, 0]
];

$memoryMapHard = [
    [0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0]
];

/* <img src="<?php echo $themeHitman['img'] ?>" alt="<?php echo $themeHitman['name'] ?>"> */

$themeHitman = [
    ['img' => 'images/hitman/47.jpg', 'name' => 'agent 47', 'description' => ''],
    ['img' => 'images/hitman/Diana.jpg', 'name' => 'diana burnwood', 'description' => ''],
    ['img' => 'images/hitman/Lucas-Grey.jpeg', 'name' => 'lucas grey', 'description' => ''],
    ['img' => 'images/hitman/Arthur-Edwards.jpeg', 'name' => 'arthur edwards', 'description' => ''],
    ['img' => 'images/hitman/Duck.jpeg', 'name' => 'a rubber duck', 'description' => ''],
    ['img' => 'images/hitman/Symbol.jpg', 'name' => 'hitman logo', 'description' => ''],
    ['img' => 'images/hitman/47-promo.jpg', 'name' => 'agent 47', 'description' => ''],
    ['img' => 'images/hitman/Pistol.jpeg', 'name' => 'pistol', 'description' => ''],
    ['img' => 'images/hitman/Poison.jpeg', 'name' => 'poison', 'description' => ''],
    ['img' => 'images/hitman/Screwdriver.jpeg', 'name' => 'screwdriver', 'description' => ''],
    ['img' => 'images/hitman/Coin.jpeg', 'name' => 'a coin', 'description' => ''],
    ['img' => 'images/hitman/Briefcase.jpeg', 'name' => 'a briefcase', 'description' => ''],
    ['img' => 'images/hitman/Lockpick.jpeg', 'name' => 'a lockpick', 'description' => ''],
    ['img' => 'images/hitman/Fish.jpeg', 'name' => 'a fish', 'description' => ''],
    ['img' => 'images/hitman/Muffin.jpeg', 'name' => 'a muffin', 'description' => '']
];


$themeFireEmblem = [
    ['img' => 'images/fire-emblem/Chrom.png', 'name' => 'Chrom', 'description' => ''],
    ['img' => 'images/fire-emblem/Robin F.png', 'name' => 'female Robin', 'description' => ''],
    ['img' => 'images/fire-emblem/Frederik.png', 'name' => 'Frederik', 'description' => ''],
    ['img' => 'images/fire-emblem/Lissa.png', 'name' => 'Lissa', 'description' => ''],
    ['img' => 'images/fire-emblem/Validar.png', 'name' => 'Validar', 'description' => ''],
    ['img' => 'images/fire-emblem/Aversa.png', 'name' => 'Aversa', 'description' => ''],
    ['img' => 'images/fire-emblem/Gangrel.png', 'name' => 'Gangrel', 'description' => ''],
    ['img' => 'images/fire-emblem/Gaius.png', 'name' => 'Gaius', 'description' => ''],
    ['img' => 'images/fire-emblem/Panne.png', 'name' => 'Panne', 'description' => ''],
    ['img' => 'images/fire-emblem/Maribelle.png', 'name' => 'Maribelle', 'description' => ''],
    ['img' => 'images/fire-emblem/Henry.png', 'name' => 'Henry', 'description' => ''],
    ['img' => 'images/fire-emblem/Lon\'qu.png', 'name' => 'Lon\'qu', 'description' => ''],
    ['img' => 'images/fire-emblem/Libra.png', 'name' => 'Libra', 'description' => ''],
    ['img' => 'images/fire-emblem/Basilio.png', 'name' => 'Basilio', 'description' => ''],
    ['img' => 'images/fire-emblem/Flavia.png', 'name' => 'Flavia', 'description' => '']
];

$themeFireEmblemPairs = array_merge($themeFireEmblem, $themeFireEmblem);

shuffle($themeFireEmblemPairs);

$themePokemon = [
    ['img' => 'images/pokemon/Infernape.png', 'name' => 'Infernape', 'description' => ''],
    ['img' => 'images/pokemon/Luxray.png', 'name' => 'Luxray', 'description' => ''],
    ['img' => 'images/pokemon/Roserade.png', 'name' => 'Roserade', 'description' => ''],
    ['img' => 'images/pokemon/Gyarados.png', 'name' => 'Gyarados', 'description' => ''],
    ['img' => 'images/pokemon/Gengar.png', 'name' => 'Gengar', 'description' => ''],
    ['img' => 'images/pokemon/Purugly.png', 'name' => 'Purugly', 'description' => ''],
    ['img' => 'images/pokemon/Rapidash.png', 'name' => 'Rapidash', 'description' => ''],
    ['img' => 'images/pokemon/Pikachu.png', 'name' => 'Pikachu', 'description' => ''],
    ['img' => 'images/pokemon/Garchomp.png', 'name' => 'Garchomp', 'description' => ''],
    ['img' => 'images/pokemon/Milotic.png', 'name' => 'Milotic', 'description' => ''],
    ['img' => 'images/pokemon/Giratina.png', 'name' => 'Giratina', 'description' => ''],
    ['img' => 'images/pokemon/Houndoom.png', 'name' => 'Houndoom', 'description' => ''],
    ['img' => 'images/pokemon/Umbreon.png', 'name' => 'Umbreon', 'description' => ''],
    ['img' => 'images/pokemon/Crobat.png', 'name' => 'Crobat', 'description' => ''],
    ['img' => 'images/pokemon/Altaria.png', 'name' => 'Altaria', 'description' => '']
];

$themePokemonPairs = array_merge($themePokemon, $themePokemon);

shuffle($themePokemonPairs);


/* foreach ($themePokemon as $image) {
?>
    <img src="<?php echo $image['img'] ?>" alt="<?php echo $image['name'] ?>">
<?php
} */
