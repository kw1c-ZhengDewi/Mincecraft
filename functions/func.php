<?php

function get_personality($personalityA, $personalityB, $personalityC, $personalityD, $personalityE) {
    $max_score = max($personalityA, $personalityB, $personalityC, $personalityD, $personalityE);
    if ($max_score == $personalityA) {
        return "Steve";
    } elseif ($max_score == $personalityB) {
        return "Iron Golem";
    } elseif ($max_score == $personalityC) {
        return "Creeper";
    } elseif ($max_score == $personalityD) {
        return "Enderman";
    } else {
        return "Ender Dragon";
    }
}
