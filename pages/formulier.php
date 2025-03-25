<?php
// Define variables for each personality type
$personalityA = 0;
$personalityB = 0;
$personalityC = 0;
$personalityD = 0;
$personalityE = 0;

// Check if the form is submitted and calculate points
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Each question is evaluated, adding points to the corresponding personality
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];

    // Personality points for each question
    $personalityA += ($q1 == "A") ? 1 : ($q1 == "B" ? 0.5 : 0);
    $personalityB += ($q2 == "A") ? 1 : ($q2 == "B" ? 0.5 : 0);
    $personalityC += ($q3 == "A") ? 1 : ($q3 == "C" ? 0.5 : 0);
    $personalityD += ($q4 == "A") ? 1 : ($q4 == "D" ? 0.5 : 0);
    $personalityE += ($q5 == "A") ? 1 : ($q5 == "E" ? 0.5 : 0);
}

include "../functions/func.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personality Quiz</title>
    <link rel="stylesheet" href="../styles/formulier.css">

</head>
<body>
<div class="quiz-container">
    <div class="social-container">
        <p>FOLLOW MINECRAFT</p>
        <div class="social-icons">
            <a href="https://www.youtube.com/minecraft" target="_blank">
                <img src="../images/Logo/Youtube.png" alt="YouTube">
            </a>
            <a href="https://www.instagram.com/minecraft" target="_blank">
                <img src="../images/Logo/instagram.png" alt="Instagram">
            </a>
            <a href="https://www.facebook.com/minecraft" target="_blank">
                <img src="../images/Logo/facebook.png" alt="Facebook">
            </a>
            <a href="https://twitter.com/Minecraft" target="_blank">
                <img src="../images/Logo/twitter.png" alt="X (Twitter)">
            </a>
            <a href="https://www.tiktok.com/@minecraft" target="_blank">
                <img src="../images/Logo/tiktok.png" alt="TikTok">
            </a>
            <a href="https://wa.me/" target="_blank">
                <img src="../images/Logo/whatsapp.png" alt="WhatsApp">
            </a>
            <a href="https://discord.com/invite/minecraft" target="_blank">
                <img src="../images/Logo/discord.png" alt="Discord">
            </a>
            <a href="https://www.reddit.com/r/Minecraft/" target="_blank">
                <img src="../images/Logo/reddit.png" alt="Reddit">
            </a>
        </div>
        <h2>Personality Quiz</h2>
        <form method="post">
            <h3>
                <label>1. Wat is het eerste wat je doe in een nieuwe wereld? <br>
                    <input type="radio" name="q1" value="A" required> I dive in headfirst.<br>
                    <input type="radio" name="q1" value="B"> I plan carefully before starting.<br>
                    <input type="radio" name="q1" value="C"> I take my time and observe.<br><br>
                </label><br>

                <label>2.  Speel je liever samen met mensen of alleen?  <br>
                    <input type="radio" name="q2" value="A" required> Achieving goals.<br>
                    <input type="radio" name="q2" value="B"> Working with others.<br>
                    <input type="radio" name="q2" value="C"> Learning and growth.<br><br>
                </label><br>

                <label>3. Wanneer vind je een server een succes <br>
                    <input type="radio" name="q3" value="A" required> I get things done quickly.<br>
                    <input type="radio" name="q3" value="B"> I talk to others about it.<br>
                    <input type="radio" name="q3" value="C"> I take time for myself to relax.<br><br>
                </label><br>

                <label>4. Wat verdiep je je al in als je Minecraft speel <br>
                    <input type="radio" name="q4" value="A" required> friendship forever <br>
                    <input type="radio" name="q4" value="B"> In a team.<br>
                    <input type="radio" name="q4" value="D"> A mix of both.<br><br>
                </label><br>


                <label>5. Waar wil je je nog in verdiepen wat je nog niet goed kan in Minecraft?  <br>
                    <input type="radio" name="q5" value="A" required> I prefer hands-on experience.<br>
                    <input type="radio" name="q5" value="B"> I like to read and gather information.<br>
                    <input type="radio" name="q5" value="E"> I learn by experimenting and trying new things.<br><br>
                </label><br>

                <input type="submit" value="Submit">

        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
            <h3>Congrats, you are <?php echo get_personality($personalityA, $personalityB, $personalityC, $personalityD, $personalityE); ?>!</h3>
            <p>Steve: <?php echo $personalityA; ?> points</p>
            <p>Iron Golem: <?php echo $personalityB; ?> points</p>
            <p>Creeper: <?php echo $personalityC; ?> points</p>
            <p>Enderman: <?php echo $personalityD; ?> points</p>
            <p>Ender Dragon: <?php echo $personalityE; ?> points</p>
        <?php endif; ?>
        </h3>
    </div>
</body>
</html>

