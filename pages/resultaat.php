<?php

if (isset($_COOKIE["personality"])) {
    echo "Congrats, you are a " . $_COOKIE["personality"] . "<br>";
} else {
    echo "No winner data available.";
}

