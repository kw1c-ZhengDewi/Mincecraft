<!DOCTYPE html>
<html lang="en">
<!--
Auteurs: Dewi, Connor, Damian
Datum: 02-04-2025
-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/Header-Icons/Favicon/favicon.ico">
    <title>Mincecraft</title>

    <!-- stylesheet for all pages  -->
    <link rel="stylesheet"
          href="../styles/stylesheet.css">
    <!--  stylesheet only for this page  -->
    <link rel="stylesheet"
          href="../styles/resultaat.css">
</head>

<body>

<div id="site-wrapper-footer">
    <header>
        <?php
        include '../includes/navigation.php';
        ?>
    </header>

    <main>
        <?php
        if (isset($_COOKIE["personality"])) {
    echo "Congrats, you are a " . $_COOKIE["personality"] . "<br>";
        }

        else {

<?php
include "../functions/funcresultaat.php";
if (isset($_COOKIE["personality"])) {
    resultaatpage();
} else {

    echo "No winner data available.";
       }
?>
      
</main>

    <?php include '../includes/footer.php'; ?>
</div>

</body>


</html>

