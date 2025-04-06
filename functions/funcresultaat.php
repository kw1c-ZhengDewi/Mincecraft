
<?php
function resultaatpage()
{
if ($_COOKIE["personality"] == "Steve")  {
echo "Ur an person who likes to explore! <br>
Every block is a new adventure <br>
Playstyle: Adventures <br>
If u play the follwing modpacks u will get the best experience and maps,<br>
Enigmatica and FTB revelations
";
}
elseif ($_COOKIE["personality"] == "Iron Golem")  {
echo "CONGRATS UR AN IRON GOLEM <br>
Hammered, shaped, and given purpose. <br>
Based on your answers your a builder. <br>
Your very creative and like to build beautiful structures. <br>
We suggest u to play modpacks like Create and skyblock!
";
}
elseif ($_COOKIE["personality"] == "Creeper")  {
echo "CONGRATS UR A CREEPER! <br>
Aww man, you're a creeper, huh? <br>
Based on ur answers ur a fighter!<br>
Meaning  u most likely would like mod packs like dungeons where u fight other mobs to come out on top.
";
}
elseif ($_COOKIE["personality"] == "Ender Dragon")  {
echo "
CONGRATS UR AN ENDER DRAGON <br>
Your world is but a stop on my journey. <br>
U like all the dimensions of minecraft <br>
here are some modpacks with new exciting dimensions and biomes:<br>
Aether, Twilight Forest, BetterNether/BetterEnd
";
}
elseif ($_COOKIE["personality"] == "Enderman")  {
    echo "
CONGRATS UR AN ENDERMAN <br>
I do not guard the End—I craft it <br>
Ur someone who really likes unique in life!<br>
Modpacks that change everything is ur taste.<br>
Hereby we offer experiences like Cobblemon, RLcraft and BetterMC

";
}
}
