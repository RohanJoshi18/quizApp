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
    <?php $current_time = time(); echo $current_time; ?>
    <div class="navbar">
        <div class="add-quiz">
            <!-- adding a quiz to the database -->
            <!-- display all quizzes -->
        </div>
        <div class="remove-quiz">
            <!-- deleting a quiz from the database -->
            <!-- display all quizzes -->
        </div>
        <div class="update-quiz">
            <!-- changing the contents of the quiz -->
            <!-- display all quizzes -->
        </div>
    </div>
</body>


</html>