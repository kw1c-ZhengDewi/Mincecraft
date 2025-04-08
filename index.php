<!DOCTYPE html>
<html lang="en">
<!--
Auteurs: Dewi, Connor, Damian
Datum: 29-03-2025
-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/images/Header-Icons/Favicon/favicon.ico">
    <title>Mincecraft</title>

    <!-- stylesheet for all pages  -->
    <link rel="stylesheet"
          href="<?php echo htmlspecialchars(dirname($_SERVER['SCRIPT_NAME']) . '/styles/stylesheet.css', ENT_QUOTES, 'UTF-8'); ?>">
    <!--  stylesheet only for this page  -->
    <link rel="stylesheet"
          href="<?php echo htmlspecialchars(dirname($_SERVER['SCRIPT_NAME']) . '/styles/home.css', ENT_QUOTES, 'UTF-8'); ?>">

    <!-- Script index slider   -->
    <script src="./scripts/Index-slideshow/index-slideshows.js" defer></script>
</head>

<body>

<div id="site-wrapper-footer">
    <header>
        <?php include __DIR__ . '/includes/navigation.php'; ?>
    </header>

    <main>
        <div id="FirstImpressionText">
            <h1>Discover your character</h1>
            <br>
            <br>
            <h2>Welcome to the Mincecraft Official Quiz page!</h2>

            <div>
                <span id="Form-div-BTN">
                <a id="Form-a-BTN" href="./pages/formulier.php"><span id="BTN-Touches">Start the quiz</span></a>
                </span>
            </div>
        </div>

        <div id="Center-SliShow">
            <!--   Index slideshow   -->
            <div class="slideshow-container">
                <!--  Image 1, Sunset   -->
                <div class="mySlides fade">
                    <img alt="Minecraft-Sunset" src="./images/Slideshows/Index/img-mc-sunset.png" class="SlidSho-Img_Width">
                </div>

                <!--  Image 2, Nether -->
                <div class="mySlides fade">
                    <img alt="Minecraft-Nether" src="./images/Slideshows/Index/img-mc-nether.jpg" class="SlidSho-Img_Width">
                </div>

                <!--  Image 3, g portal -->
                <div class="mySlides fade">
                    <img alt="Minecraft-Nether" src="./images/Slideshows/Index/img-mc-gportal.png" class="SlidSho-Img_Width">
                </div>
            </div>
        </div>

        <!--  Hier wordt Minecraft beschreven           -->
        <div id="AboutMcID">

            <h1>About us</h1>

            <div id="AboutMc-Container">
                <img alt="Zombie Riding a Chicken" src="./images/AboutMincecraft/ZombieChicken.png">
                <p>
                    We are Damian, Dewi, and Connor passionate gamers dedicated to helping players find the perfect Minecraft modpacks and communities. Our platform offers a fun and interactive quiz that guides users to the best modpacks based on their preferences, making it easier to discover new adventures and like-minded players.
                </p>
            </div>
        </div>

    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>
</div>

</body>

</html>