<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="browse.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap">
    <link rel="stylesheet" href="ckstyle.css">
    <title>Browse by Name</title>
</head>

<body>
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
                <li><a class="underline" href="index.php">Home</a></li>
                <li><a class="underline" href="aboutus.html">About Us</a></li>
                <li class="browse">
                    <span id="browse-text"><a href="#" id="browse">Browse</a></span>
                    <ul class="browse-dropdown">
                        <li class="browse-dropdown-info">
                            <a class="browse-links" href="browse-store-name.php">Browse Stores by Name</a>
                        </li>
                        <li class="browse-dropdown-info">
                            <a class="browse-links" href="browse-store-category.php">Browse Stores by Category</a>
                        </li>
                    </ul>
                </li>
                <li><a class="underline" href="contact.html">Contact</a></li>
                <li><a class="underline" href="fees.html">Fees</a></li>
                <li><a class="underline" href="FAQs.html">FAQs</a></li>
                <li><a class="underline" href="MyAccount.html">My Account</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1><span class="vline">OUR STORES</span></h1>
        <p>Browse by Name</p>

        <div class="alpha-links">
            <ul>
                <li><a href="browse-store-name.php?name=a" class="link" title="Scroll to A">A</a></li>
                <li><a href="browse-store-name.php?name=b" class="link" title="Scroll to B">B</a></li>
                <li><a href="browse-store-name.php?name=c" class="link" title="Scroll to C">C</a></li>
                <li><a href="browse-store-name.php?name=d" class="link" title="Scroll to D">D</a></li>
                <li><a href="browse-store-name.php?name=e" class="link" title="Scroll to E">E</a></li>
                <li><a href="browse-store-name.php?name=f" class="link" title="Scroll to F">F</a></li>
                <li><a href="browse-store-name.php?name=g" class="link" title="Scroll to G">G</a></li>
                <li><a href="browse-store-name.php?name=h" class="link" title="Scroll to H">H</a></li>
                <li><a href="browse-store-name.php?name=i" class="link" title="Scroll to I">I</a></li>
                <li><a href="browse-store-name.php?name=j" class="link" title="Scroll to J">J</a></li>
                <li><a href="browse-store-name.php?name=k" class="link" title="Scroll to K">K</a></li>
                <li><a href="browse-store-name.php?name=l" class="link" title="Scroll to L">L</a></li>
                <li><a href="browse-store-name.php?name=m" class="link" title="Scroll to M">M</a></li>
                <li><a href="browse-store-name.php?name=n" class="link" title="Scroll to N">N</a></li>
                <li><a href="browse-store-name.php?name=o" class="link" title="Scroll to O">O</a></li>
                <li><a href="browse-store-name.php?name=p" class="link" title="Scroll to P">P</a></li>
                <li><a href="browse-store-name.php?name=q" class="link" title="Scroll to Q">Q</a></li>
                <li><a href="browse-store-name.php?name=r" class="link" title="Scroll to R">R</a></li>
                <li><a href="browse-store-name.php?name=s" class="link" title="Scroll to S">S</a></li>
                <li><a href="browse-store-name.php?name=t" class="link" title="Scroll to T">T</a></li>
                <li><a href="browse-store-name.php?name=u" class="link" title="Scroll to U">U</a></li>
                <li><a href="browse-store-name.php?name=v" class="link" title="Scroll to V">V</a></li>
                <li><a href="browse-store-name.php?name=q" class="link" title="Scroll to W">W</a></li>
                <li><a href="browse-store-name.php?name=x" class="link" title="Scroll to X">X</a></li>
                <li><a href="browse-store-name.php?name=y" class="link" title="Scroll to Y">Y</a></li>
                <li><a href="browse-store-name.php?name=z" class="link" title="Scroll to Z">Z</a></li>
                <li><a href="browse-store-name.php?name=Other" class="link" title="Scroll to #">#</a></li>
            </ul>
        </div>

        <?php
        if (isset($_GET['name']) && !empty($_GET['name'])) { 
            echo '<div class="category">
                    <h2>'.strtoupper($_GET['name']).'</h2>
                </div>';
        } 
        ?>
            

        <div class= "storeList">
            <?php 
            // Open stores csv file
            if (($csv = fopen("data/stores.csv", "r")) !== FALSE) {
                fgetcsv($csv);
                while (($line = fgetcsv($csv, 1000, ",")) !== FALSE) { 
                    $storeInfo = [
                        'storeID' => $line[0],
                        'storeName' => $line[1]
                    ];
                    $_SESSION['stores'][] = $storeInfo;    
                }
                fclose($csv);
            }

            $browsed = array();
            ?>
            <?php
            //Create name comparison function
            function name_cmp ($s1, $s2) {
                return strcmp($s1['storeName'], $s2['storeName']);
            }

            //Sort store by alphabetically order
            usort($_SESSION['stores'], 'name_cmp');
            foreach ($_SESSION['stores'] as $key => $value ) {
                if (isset($_GET['name']) && !empty($_GET['name'])) {
                    echo '';
                    if (strtolower($value['storeName'])[0] == $_GET['name']) {
                        echo '<div class="store-info">
                                    <a href="nike/nike.php?id='.$value["storeID"].'">'.'<img class="sLogo" src="nike/imgs/logo.png" alt="logo"></a>
                                    <h3>'.$value["storeName"].'</h3>
                                </div>';
                    } elseif (is_numeric($value['storeName'][0]) && $_GET['name'] == 'Other') {
                        echo '<div class="store-info">
                                    <a href="nike/nike.php?id='.$value["storeID"].'">'.'<img class="sLogo" src="nike/imgs/logo.png" alt="logo"></a>
                                    <h3>'.$value['storeName'].'</h3>
                                </div>';
                    } 
                }else {
                    echo '<div class="store-info">
                            <a href="nike/nike.php?id='.$value["storeID"].'">'.'<img class="sLogo" src="nike/imgs/logo.png" alt="logo"></a>
                            <h3>'.$value["storeName"].'</h3>
                        </div>';
            }
            } 
            ?>
        </div>
    


        <a class="back-top" href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
    </main>
    <div class="cookie-container">
        <p>
            We use cookies in this website to help you have the best experience with the website and the advertisements. 
            For more information,  you can read our <a href="#">privacy policy</a>
            and <a href="#">cookie policy</a>.
        </p>
        <button class="cookie-btn">
            Agree
        </button>
        
    </div>
</div>
    <!--Footer copy this-->
    <footer>
        <a id="logoName" href="index.html">
            <img class="logo" src="imgs/LOGO-01.png" alt="logo">
            <span>Shopeeverse</span>
        </a>
        <div class="policy">
            <ul>
                <li><a href="tos.html">Term of Service</a></li>
                <li><a href="privacy.html">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="copyright">
            <a href="copyright.html">Copyright &copy; Mall 2021</a>
        </div>
    </footer>

    <!--EndFooter-->
<script src="ck.js"></script>
</body>

</html>



<?php 

