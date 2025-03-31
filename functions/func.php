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
$chosenperson = key($personalities); // Return highest scoring personality


setcookie("personality", $chosenperson, time() + (86400 * 30), "/");

    return $chosenperson;
}