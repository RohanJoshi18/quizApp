<?php

session_start();

if ($_SESSION["logintype"] == 'admin') {
    include "main.php";
} else {
    include "userMain.php";
}

?>