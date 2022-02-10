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
            <a href="add.php"><button>Add quiz</button></a>
        </div>
        <div class="remove-quiz">
            <a href="remove.php"><button>Remove Quiz</button></a>
        </div>
        <div class="modify-quiz">
            <a href="modify.php"><button>Modify Quiz</button></a>
        </div>
    </div>
    <div class="main-section">
        <h1>Welcome, Staff Member!!</h1>
        <p>Here, you can add, update or delete quizzes which are 
            taken by the students in the department.
        </p>
        <p>Head over to the menu links to get started.</p>
    </div>
</body>


</html>