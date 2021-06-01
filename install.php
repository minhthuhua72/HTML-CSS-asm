<?php
        $nortification = '';
        $username = '';
        $pass = '';
        $repass = '';
        $err =[];
        
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $pass = $_POST ['pass'];
            $pass_hash = password_hash($_POST ['pass'], PASSWORD_DEFAULT);
            $repass = $_POST['repass'];
            $repass_hash = password_hash($_POST ['repass'], PASSWORD_DEFAULT);
            if(empty($_POST['username'])){
                $err['username']="Please enter username for admin!!!";
            }
            if(empty($_POST ['pass'])){
                $err['pass']="Please enter password!!!";
            }
            if($_POST ['pass'] !== $_POST['repass'] ){
                $err['repass']="Please enter correct repassword!!!";
            }

            if(empty($err)){
                $file_open = fopen ("admin.csv", "a");
                $no_rows = count(file("admin.csv"));

                if($no_rows > 1){
                    $no_rows = ($no_rows - 1) + 1;
                    echo '<span class="account"><p>Successful account created!</p></span>';
                }   
               
                $form_data = array(
                'sr_no'  => $no_rows,
                'username'  => $username,
                'pass'  => $pass_hash,
                'repass' => $repass_hash);
    
                fputcsv($file_open, $form_data);
                $username = '';
                $pass_hash = '';
                $repass = '';
            }
        }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Install</title>
    <link rel="stylesheet" href="install.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
</head>
<body>
    <h1>Install</h1>
    <form method="post">
        <fieldset>
            <legend>For Admin</legend>
            <label for="username">Username</label>
            <input type="text" id="username" name="username"> <br>
            <div class="errPHP">
                <span><?php echo (isset($err['username']))?$err['username']:'' ?></span>
            </div>
            
            <label for="pass">Password</label>
            <input type="text" id="pass" name="pass"> <br>
            <div class="errPHP">
                <span><?php echo (isset($err['pass']))?$err['pass']:'' ?></span>
            </div>
            <label for="repass">Retype Password</label>
            <input type="text" id="repass" name="repass"> <br>
            <div class="errPHP">
                <span><?php echo (isset($err['repass']))?$err['repass']:'' ?></span>
            </div>
            <input type="submit" name= "submit" value="Submit">
        </fieldset>
        
    </form>
    
</body>
</html>