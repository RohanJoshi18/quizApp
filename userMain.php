<?php

include "header.php";

?>

<html>
<head>
    <title>PHP Quiz Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="User can take a quiz on this page">
    <meta charset="utf-8">
    <script src="myScript.js"></script>
</head>

<body>
    <?php $current_time = time(); echo $current_time;?>
    <div class="navbar">
        <div class="take-quiz">
            <!-- shows available quizzes -->
            <!-- take quiz if available -->
        </div>
        <div class="score-history">
            <!-- display a timeline of user score history -->
            <!-- try using React / Angular to do this -->
        </div>
    </div>
    <div class="main-section">
        <h1>Welcome to TakeQuiz!!</h1>
        <p>Here, you can attempt a quiz and view your score   
            history in the timeline panel.
        </p>
        <p>You can take any quiz as many times as you 
            want, and also compare your score with other players 
            in the <a href="leaderboard.php">Leaderboard</a> section.
        </p>
    </div>
</body>


</html>