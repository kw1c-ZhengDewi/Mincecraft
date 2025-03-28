<!DOCTYPE html>
<html lang="en">

<!--
Auteurs: Dewi, Connor, Damian
Datum: 29-03-2025
-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div id="Center-SliShow">
        <!--   Index slideshow   -->
        <div class="slideshow-container">
            <!--  Image 1, Sunset   -->
            <div class="mySlides fade">
                <img alt="Minecraft-Sunset" src="./images/Slideshows/Index/img-mc-sunset.png" class="SlidSho-Img_Width">

                <!--   De knop kan misschien iets anders komen, ik maak wel de startknop onderaan? -->
                <div class="FormBTN">
                    What mob are you?
                </div>
            </div>

        <!--  Image 2, Nether -->
            <div class="mySlides fade">
                <img alt="Minecraft-Nether" src="./images/Slideshows/Index/img-mc-nether.jpg" class="SlidSho-Img_Width">

                <!--   De knop kan misschien iets anders komen, ik maak wel de startknop onderaan? -->
                <div class="FormBTN">
                    What mob are you?
                </div>
            </div>

            <!--  Image 3, g portal -->
            <div class="mySlides fade">
                <img alt="Minecraft-Nether" src="./images/Slideshows/Index/img-mc-gportal.png" class="SlidSho-Img_Width">

                <!--   De knop kan misschien iets anders komen, ik maak wel de startknop onderaan? -->
                <div class="FormBTN">
                    What mob are you?
                </div>
            </div>
        </div>
        </div>



        <!--  Hier wordt Minecraft beschreven           -->
        <div id="AboutMcID">

        <h1>What is Minecraft?</h1>

          <div id="AboutMc-Container">
              <img alt="Zombie Riding a Chicken" src="./images/Extra-Images/Zombie-RidingChicken.png">
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla, quam id suscipit suscipit, nulla nisi auctor leo, ac pellentesque nulla nibh sit amet ligula. Maecenas sem purus, ultrices vitae risus id, tempus facilisis neque. Fusce eu venenatis diam. Quisque vel justo et orci rutrum cursus. Sed posuere cursus dictum. Quisque ullamcorper non enim ut euismod. Aliquam malesuada ex at risus molestie tempor.
                  Nam quis justo orci. Integer molestie commodo porta. Nunc eleifend tristique orci a viverra. Nam congue porta augue eget rhoncus. In fringilla diam at eros lacinia faucibus. Praesent aliquam eros vel orci faucibus, in sagittis lacus efficitur. Mauris non magna tristique ipsum rutrum eleifend in id massa. Aenean eget consectetur sapien, suscipit fermentum diam. Sed fermentum eros id viverra hendrerit. Proin non lorem ac sapien varius rhoncus. Nunc congue nisi at nibh auctor sodales. Etiam accumsan ultricies est nec bibendum.
              </p>
          </div>

        </div>



    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>
</div>

</body>

</html>
