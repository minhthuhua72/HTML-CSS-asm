<?php 
    include "deleteInstall.php";
    $nortification1 = '';
    $check = true;
    // Check the will the user submit data
    if (isset($_POST["submit"]))
    {   
        // Open file and read
        $file_open = fopen("register.csv", "r");
        $file_open2 = fopen("admin.csv", "r");
        // Get the data from file csv to check account user
        while(! feof($file_open))
        {
            $row = fgetcsv($file_open);
            if ($_POST['mail'] == $row[3] && password_verify($_POST['password'], $row[5]) == true)
            {
                $nortification1 .= '<p style = "color: red; text-align: center;">Login successfully</p>';
                $check = false;
                break;
            }
        }
        // Get data from csv for checking admin user
        while(! feof($file_open2))
        {
            $row2 = fgetcsv($file_open2);
            if ($_POST['mail'] == $row2[1] && password_verify($_POST['password'], $row2[2]) == true)
            {
                $check = false;
                header("Location: dashboard.php");
                break;
            }
        }
        // Check error
        if ($check)
        {
            $nortification1 .= '<p style = "color: red; text-align: center;">Your email or password is incorrect!!!</p>';
        }
        fclose($file_open);
        fclose($file_open2);
    }
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="login.css">
    <title>My Account</title>
</head>

<body>
    <!--Header-->
    <header>
        <!--Logo-->
        <a href="index.html" class="logo-name">
            <img class="logo" src="imgs/LOGO-01.png" alt="logo">
            <span>Shopeeverse</span>
        </a>
        <nav>
            <!--Responsive Navbar-->
            <input type="checkbox" id="active">
            <label for="active">
                <i class="fa fa-bars" id="open"></i>
                <i class="fa fa-times" id="close"></i>
            </label>
            <ul>
                <li><a class="underline" href="index.html">Home</a></li>
                <li><a class="underline" href="AboutUs.html">About Us</a></li>
                <li class="browse">
                    <span id="browse-text"><a href="#">Browse</a></span>
                    <ul class="browse-dropdown">
                        <li class="browse-dropdown-info">
                            <a class="browse-links" href="browse-store-name.html">Browse Stores by Name</a>
                        </li>
                        <li class="browse-dropdown-info">
                            <a class="browse-links" href="browse-store-category.html">Browse Stores by Category</a>
                        </li>
                    </ul>
                </li>
                <li><a class="underline" href="contact.html">Contact</a></li>
                <li><a class="underline" href="fees.html">Fees</a></li>
                <li><a class="underline" href="FAQs.html">FAQs</a></li>
                <li><a class="underline" id="account" href="MyAccount.html">My Account</a></li>
            </ul>
        </nav>
    </header>
    <!--EndHeader-->


    <main>
        <form class="content" method = "POST" action = "login.php">
        
            <fieldset>
                <legend><span class="vline">LOGIN</span></legend>
                <?php echo $nortification1 ?>
                <div class="input-field">
                    <label for="mail">Email Address</label>
                    <input class="input-design" type="text" id="mail" name="mail"
                        placeholder="Enter your email address" >
                </div>

                <div class="input-field">
                    <label for="pw">Password</label>
                    <input class="input-design" type="password" id="pww" name="password"
                        placeholder="Enter your password" >
                </div>

                <input id ="Tuan" type="submit" name = "submit" value = "Login">

                <div class="container">
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                    <div class="subcontainer">
                        <a href="ForgetPw.html">Forgot Password?</a>
                        <span>Not Registered?
                            <a href="register.html">Click here</a></span>
                    </div>
                </div>
            </fieldset>
        </form>
    </main>

    <footer>
        <a id="logoName" href="index.html">
            <img class="logo" src="imgs/LOGO-01.png" alt="logo">
            <span>Shopeeverse</span>
        </a>
        <div class="policy">
            <ul>
                <li><a href="tos.html">Term Of Service</a></li>
                <li><a href="privacy.html">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="copyright">
            <a href="copyright.html">Copyright &copy; Mall 2021</a>
        </div>
    </footer>
    <!--EndFooter-->
    <!-- <script src="./js/Myaccount.js"></script> -->

    </script>
</body>

</html>