
<?php
function resultaatpage()
{
if ($_COOKIE["personality"] == "Steve")  {
echo "Steve's resultaat";
}
elseif ($_COOKIE["personality"] == "Iron Golem")  {
echo "Iron Golem's resultaat";
}
elseif ($_COOKIE["personality"] == "Creeper")  {
echo "Creeper's resultaat";
}
elseif ($_COOKIE["personality"] == "Ender Dragon")  {
echo "Ender Dragon's resultaat";
}
elseif ($_COOKIE["personality"] == "Enderman")  {
echo "Endermans resultaat";
}
}
