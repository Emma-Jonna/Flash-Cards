<img src="https://media2.giphy.com/media/3VHQFu8AmPZzXlSVcw/giphy.gif?cid=790b76116b252922cae02fa551b6335515d14e649b8603e2&rid=giphy.gif&ct=g" width="100%"/>

# Flash Cards

Just a simple litte Flash Card program with videogame trivia, probably not very useful but it was a fun project.<br>
<a href="https://www.johannaep.se/Flash-Cards/index.php">Link to my Webbsite</a>

# Installation

Nothing fancy in this project, just clone or fork the repository and you should be fine.

# Code Review

Code review written by [Ruben Olander](https://github.com/rubenolander).

1. `index.php:20` - Remember that you can use "<?=" instead of "<?php echo". There are some more instances of this throughout the project.
2. `index.php:20` - You should find a way to work in related info in the alt class. Just like you do with the pictures in /memory-game.php:55 =) !
3. `memory-game.php:72` - I'm guessing this might be a remnant of an earlier string/echo but there's no need for the nl2br() function if you don't make a new line.
4. `memory-game.php:18` - This page should have a header element above the card section. a11y-thing.
5. * - Now I didn't really have any issues following the flow of the code, it's really neat, well separated (files) and it's variables well named. 
Though you could keep in mind the usefulness of some well placed comments here and there. 
As our projects grow in size and scope, and we perhaps take breaks from them, there might be lines and functions you forget how they work etc. 

Well done, very fun page! Side note: doesn't really work in the firefox browser. 
I had to switch to Edge to clearly see the text on the back of the cards. With firefox the text is hidden behind a mirror of the image.
I don't really know how to fix that though.


# Testers

Tested by the following people:

1. Anna Brumark
2. Magnus Vargvinter
