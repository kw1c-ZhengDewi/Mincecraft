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
return key($personalities); // Return highest scoring personality
}