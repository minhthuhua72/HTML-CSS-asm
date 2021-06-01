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

                $err['username']="Please enter username admin!!!";
    
            }
            if(empty($_POST ['pass'])){
                $err['pass']="Please enter password!!!";
            }
            if($_POST ['pass'] !== $_POST['repass'] ){
                $err['repass']="Please enter correct repassword!!!";
            }
            
            if($nortification == ''){
                $file_open = fopen("admin.csv", "a");
                $no_rows = count(file("admin.csv"));          
                if($no_rows > 1){
                    $no_rows = ($no_rows - 1) + 1;
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
                echo "Successfull account !!!";
            }
        }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    .errPHP{
        color: red;
    }
</style>

    <h1>Admin</h1>
    <form method="post">
        <label for="">Username Admin</label>
        <input type="text" name="username"> <br>
        <div class="errPHP">
            <span><?php echo (isset($err['username']))?$err['username']:'' ?></span>
        </div>
        
        <label for="">Password</label>
        <input type="text" name="pass"> <br>
        <div class="errPHP">
            <span><?php echo (isset($err['pass']))?$err['pass']:'' ?></span>
        </div>
        <label for="">Repassword</label>
        <input type="text" name="repass"> <br>
        <div class="errPHP">
            <span><?php echo (isset($err['repass']))?$err['repass']:'' ?></span>
        </div>

        <input type="submit" name= "submit" value="Submit">

        
    </form>
    
</body>
</html>