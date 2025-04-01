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
    $chosenperson = key($personalities); // Get highest scorer

    // Set cookie (valid for 30 days, secure and HTTP-only)
    setcookie("personality", "$chosenperson", time() + (86400 * 1), "/", "", true, true);
    return $chosenperson;
}
?>
