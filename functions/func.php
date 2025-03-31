<?php
function get_personality($personalityA, $personalityB, $personalityC, $personalityD, $personalityE) {
$personalities = [
"Steve" => $personalityA,
"Iron Golem" => $personalityB,
"Creeper" => $personalityC,
"Enderman" => $personalityD,
"Ender Dragon" => $personalityE
];
arsort($personalities); // Sort in descending order
$chosenpersonality = key($personalities); // take highest scoring personality

setcookie("personality", $chosenpersonality, time() + (86400 * 30), "/");

    return $chosenpersonality; //return highest scoring personality
}