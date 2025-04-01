<?php

if (isset($_COOKIE["chosenperson"])) {
    echo "Congrats, you are a " . $_COOKIE["chosenperson"] . "<br>";
} else {
    echo "No winner data available.";
}

