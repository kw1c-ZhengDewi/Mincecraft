<?php
include "../functions/funcresultaat.php";
if (isset($_COOKIE["personality"])) {
    resultaatpage();
} else {
    echo "No winner data available.";
}



