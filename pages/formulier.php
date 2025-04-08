<?php

// Define variables for each personality type
$personalityA = 0; // Steve
$personalityB = 0; // Iron Golem
$personalityC = 0; // Creeper
$personalityD = 0; // Enderman
$personalityE = 0; // Ender Dragon


// Define custom point allocation per question-answer combination eg: 'A'   'A' => 3 betekent dat personality A 3 points krijgt voor dat antwoord
$point_allocation = [
    'q1' => [
        'A' => ['A' => 3, 'B' => 1],
        'B' => ['C' => 3, 'D' => 1],
        'C' => ['E' => 3, 'A' => 1],
        'D' => ['B' => 3, 'C' => 1]
    ],
    'q2' => [
        'A' => ['B' => 3, 'C' => 1],
        'B' => ['A' => 3, 'D' => 2],
        'C' => ['E' => 3, 'C' => 1],
        'D' => ['A' =>  3, 'B' => 1]
    ],
    'q3' => [
        'A' => ['C' => 3, 'E' => 1],
        'B' => ['D' => 3, 'B' => 2],
        'C' => ['A' => 3, 'D' => 1],
        'D' => ['E' => 3, 'B' => 1]
    ],
    'q4' => [
        'A' => ['A' => 3, 'E' => 1],
        'B' => ['B' => 3, 'C' => 1],
        'C' => ['D' => 3, 'A' => 1],
        'D' => ['E' => 3, 'B' => 1]
    ],
    'q5' => [
        'A' => ['A' => 3, 'C' => 1],
        'B' => ['B' => 3, 'D' => 1],
        'C' => ['E' => 3, 'A' => 1],
        'D' => ['C' => 3, 'B' => 1]
    ]
];

// Process form submission: Checked of form = submitted, loop door alle questions, allocate points, select hoogste gescoorde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach (['q1', 'q2', 'q3', 'q4', 'q5'] as $question) {
        $answer = $_POST[$question] ?? ''; // Get selected answer
        if ($answer && isset($point_allocation[$question][$answer])) {
            foreach ($point_allocation[$question][$answer] as $personality => $points) {
                switch ($personality) {
                    case 'A': $personalityA += $points; break;
                    case 'B': $personalityB += $points; break;
                    case 'C': $personalityC += $points; break;
                    case 'D': $personalityD += $points; break;
                    case 'E': $personalityE += $points; break;
                }
            }
        }
    }
}

include "../functions/func.php";


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // ✅ Call function BEFORE any HTML output
            $chosenperson = get_personality($personalityA, $personalityB, $personalityC, $personalityD, $personalityE);
        }
        ?>




// Function to determine the highest scoring personality



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personality Quiz</title>
    <link rel="stylesheet" href="../styles/formulier.css">

</head>
<body>

<h2>Personality Quiz</h2>
<form method="post">

    <!--VRAAG 1-->
    <label>1. Wat is het eerste wat je doet in een nieuwe wereld?</label><br>
    <input type="radio" name="q1" value="A" required> I dive in headfirst.<br>
    <input type="radio" name="q1" value="B"> I plan carefully before starting.<br>
    <input type="radio" name="q1" value="C"> I take my time and observe.<br>
    <input type="radio" name="q1" value="D"> I ask others for advice.<br><br>

    <!--VRAAG 2-->
    <label>2. Speel je liever samen met mensen of alleen?</label><br>
    <input type="radio" name="q2" value="A" required> Achieving goals.<br>
    <input type="radio" name="q2" value="B"> Working with others.<br>
    <input type="radio" name="q2" value="C"> Learning and growth.<br>
    <input type="radio" name="q2" value="D"> Exploring new things.<br><br>
    <!--VRAAG 3-->
    <label>3. Wanneer vind je een server een succes?</label><br>
    <input type="radio" name="q3" value="A" required> I get things done quickly.<br>
    <input type="radio" name="q3" value="B"> I talk to others about it.<br>
    <input type="radio" name="q3" value="C"> I take time for myself to relax.<br>
    <input type="radio" name="q3" value="D"> I challenge myself.<br><br>

    <!--VRAAG 4-->
    <label>4. Waar verdiep je je al in als je Minecraft speelt?</label><br>
    <input type="radio" name="q4" value="A" required> Friendship forever.<br>
    <input type="radio" name="q4" value="B"> In a team.<br>
    <input type="radio" name="q4" value="C"> Solving puzzles.<br>
    <input type="radio" name="q4" value="D"> Being the best.<br><br>

    <!--VRAAG 5-->
    <label>5. Waar wil je je nog in verdiepen wat je nog niet goed kan in Minecraft?</label><br>
    <input type="radio" name="q5" value="A" required> I prefer hands-on experience.<br>
    <input type="radio" name="q5" value="B"> I like to read and gather information.<br>
    <input type="radio" name="q5" value="C"> I learn by experimenting and trying new things.<br>
    <input type="radio" name="q5" value="D"> I watch others and adapt.<br><br>

    <input type="submit" value="Submit">
</form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
            <h3>Congrats, you are <?php echo $chosenperson; ?>!</h3> <!--select personality with highest score-->
    <p>Steve: <?php echo $personalityA; ?> points</p> <!--TEMP, om te zien of point allocation werkt-->
    <p>Iron Golem: <?php echo $personalityB; ?> points</p>
    <p>Creeper: <?php echo $personalityC; ?> points</p>
    <p>Enderman: <?php echo $personalityD; ?> points</p>
    <p>Ender Dragon: <?php echo $personalityE; ?> points</p>
        <?php endif; ?>

</body>
</html>
<div id="TestA">
                <span id="Form-div-BTN">
                <a id="TestB" href="resultaat.php">Start the quiz</a>
                </span>
</div>
