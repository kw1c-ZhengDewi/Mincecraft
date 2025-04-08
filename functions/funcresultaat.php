
<?php
function resultaatpage()
{
if ($_COOKIE["personality"] == "Steve")  {   //check if personality cookie is gezet als steve, print steve text
echo "CONGRATS YOU ARE STEVE
you are a person who likes to explore! <br>
Every block is a new adventure <br>
If u play the following modpacks uou will get the best experience and maps:
Enigmatica and FTB revelations<br>
";

}
elseif ($_COOKIE["personality"] == "Iron Golem")  { //anders rest van personalities
echo "CONGRATS YOU ARE AN IRON GOLEM <br><br>
Hammered, shaped, and given purpose. <br>
Based on your answers your a builder. <br>
Your very creative and like to build beautiful structures. <br>
We suggest you to play modpacks like Create and skyblock!
";
}
elseif ($_COOKIE["personality"] == "Creeper")  {
echo "CONGRATS YOU ARE A CREEPER! <br><br>
Aww man, you're a creeper, huh? <br>
Based on your answers ur a fighter!<br>
Meaning  you most likely would like mod packs like dungeons where u fight other mobs to come out on top.
";
}
elseif ($_COOKIE["personality"] == "Ender Dragon")  {
echo "
CONGRATS YOU ARE THE ENDER DRAGON <br><br>
Your world is but a stop on my journey. <br>
You like all the dimensions of minecraft <br>
here are some modpacks with new exciting dimensions and biomes:<br>
Aether, Twilight Forest, BetterNether/BetterEnd
";
}
elseif ($_COOKIE["personality"] == "Enderman")  {
    echo "
CONGRATS YOU ARE AN ENDERMAN <br><br>
I do not guard the End—I craft it <br>
You are someone who really likes unique in life!<br>
Modpacks that change everything is your taste.<br>
Hereby we offer experiences like Cobblemon, RLcraft and BetterMC

";
}
}
