<!DOCTYPE html>
<html lang="en">

<!-- Authors: Dewi, Connor, Damian  -->
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
</head>

<body>

<div id="site-wrapper-footer">
    <header>
        <?php include __DIR__ . '/includes/navigation.php'; ?>
    </header>

    <main>
        <!-- Functioneel even testen  -->
    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>
</div>

</body>

</html>
