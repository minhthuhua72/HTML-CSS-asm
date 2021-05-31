<?php

session_start();



if (isset($_SESSION['loggedIN']) && $_SESSION['loggedIN'] == true ) {
    $accessLink = "Show_feature_product.php";
} else {
    $accessLink = " Show_new_product.php"; 

};