<?php

include "header.php";

?>

<html>
<head>
    <title>PHP Quiz Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Only staff can access the content on this page">
    <meta charset="utf-8">
    <script src="myScript.js"></script>
</head>

<body>
    <?php $current_time = time(); echo $current_time;?>
    <div class="navbar">
        <div class="add-quiz">
            <a href="add.php" target="_self"><button>Add Quiz</button></a>
        </div>
        <div class="remove-quiz">
            <a href="remove.php"><button>Remove Quiz</button></a>
        </div>
        <div class="modify-quiz">
            <a href="modify.php"><button>Modify Quiz</button></a>
        </div>
    </div>
    <div class="add-content">
        <div class="question">
            <!-- question text box goes here -->
        </div>
        <div class="answer1">
            <!-- first answer goes here -->
        </div>
        <!-- subsequent answer fields are added as the "Add option button is pressed" -->
        <!-- Relevant CSS and JS is added here -->
        <div class="add-option">
            <!-- Add option button goes here -->
        </div>
        <div class="add-question">
            <!-- Add question button goes here -->
        </div>
        <!-- subsequent question fields are added as the "Add question button is pressed" -->
        <!-- Relevant CSS and JS is added here -->
    </div>
</body>


</html>