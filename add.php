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
            <form action="" method="post">
                <label for="qname" placeholder="Enter question here">Question 1</label>
                <input type="text" id="qname" name="qname"><br><br>
                <label for="aname" placeholder="Enter option text">Option 1:</label>
                <button onclick="addOption()">Add option</button>
                <input type="text" id="aname" name="aname"><br><br>
                <button onclick="addQuestion()">New question</button>
                <button onclick="deleteQuestion()">Delete question</button>
                <input type="submit" value="Submit">
            </form>
        </div>        
    </div>
</body>


</html>