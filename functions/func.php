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
    //setcookie("personality", "aaa", time() + (86400 * 30), "/", "", true, true);
    setcookie("personality", "aaa", 10000000, "/", "");
    return $chosenperson;
}
?>
