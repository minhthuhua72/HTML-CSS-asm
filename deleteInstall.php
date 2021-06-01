<?php
    $filename = 'install.php';

    if (file_exists($filename)) {
        exit("Stop programming because install.php has not deleted");
    }
?>