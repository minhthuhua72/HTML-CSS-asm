<?php

session_start();

if (isset($_SESSION['loggedIN']) && $_SESSION['loggedIN'] == true ) {
    $accessLink = "logged-in.php";
} else {
    $accessLink = "register.php"; 

}; 