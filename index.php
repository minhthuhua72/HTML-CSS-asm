<?php require_once 'deleteInstall.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Librabries/owl.carousel.min.css">
    <link rel="stylesheet" href="./Librabries/owl.theme.default.min.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="mall-home2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap">
    <link rel="stylesheet" href="ckstyle.css">   
    <title>Mall Home</title>
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
                <li><a class="underline" id="home" href="index.html">Home</a></li>
                <li><a class="underline" href="aboutus.html">About Us</a></li>
                <li class="browse">
                    <span id="browse-text"><a href="#">Browse</a></span>
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
                <li><a class="underline" href="faqs.html">FAQs</a></li>
                <li><a class="underline" href="MyAccount.html">My Account</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="mall-photo">
            <div class="slogan">
                <h1>FIND YOURSELF IN <br> YOUR FAVORITE PLACE!</h1>
                <button id="learnmore"><a href="#first-mall-section">LEARN MORE</a></button>
            </div>
        </div>

        <?php 
        //Open stores csv file
        if (($csv = fopen("data/stores.csv", "r")) !== FALSE) {
            fgetcsv($csv);
            while (($line = fgetcsv($csv, 1000, ",")) !== FALSE) {
                $storeInfo = [
                    'storeID' => $line[0],
                    'storeName' => $line[1],
                    'storeTime' => $line[3],
                    'storeFeatured' =>  $line[4]
                ];
                $_SESSION['stores'][] = $storeInfo;    
            }
            fclose($csv);
        }
        ?>

        <?php

        //Find all the featured stores
        $fstore = array();
        foreach ($_SESSION['stores'] as $key => $item) {
            if ($item['storeFeatured'] == "TRUE") {
                $fstore[$key] = $item;
            }
        }

        //Get max 10 featured stores out of total number of stores
        $fstoreDisplay = array_slice($fstore,0,10,true);
        ?>

        <!--Featured Store-->
        <h2><span class="vline">FEATURED STORES</span></h2>
        <div class="mall-section">
            <?php foreach ($fstoreDisplay as $key1 => $item1) : ?>
            <div class="store-sections">
                <div class="storeLists">
                    <div class="store-container">
                        <a href="nike/nike.php?id=<?= $item1['storeID']; ?>">
                            <img class="store-logo" src="nike/imgs/logo.png" alt="store-logo">
                        </a>
                    </div>
                    <div class="store-info">
                        <a href="nike/nike.html">
                            <p class="store"><?= $item1['storeName']; ?></p>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <?php
        //Created time comparison function
        function date_cmp ($s1, $s2) {
            $storeTime1 = strtotime($s1['storeTime']);
            $storeTime2 = strtotime($s2['storeTime']);
            return $storeTime2 - $storeTime1;
        }

        //Sort the stores based on newest created date
        $nstore = $_SESSION['stores'];
        usort($nstore, 'date_cmp');

        //Get 10 newest stores out of total number of stores
        $nstoreDisplay = array_slice($nstore,0,10,true);
        ?>

        <!--New Store-->
        <h2><span class="vline">NEW STORES</span></h2>
        <div class="mall-section">
            <?php foreach ($nstoreDisplay as $key2 => $item2) : ?>
            <div class="store-sections">
                <div class="storeLists">
                    <div class="store-container">
                        <a href="nike/nike.php?id=<?= $item2['storeID']; ?>">
                        <img class="store-logo" src="imgs/dunkin.png" alt="store-logo" />
                        </a>
                    </div>
                    <div class="store-info">
                        <a href="nike/nike.html">
                            <p class="store"><?= $item2['storeName']; ?></p>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <?php 
        // Open products csv file
        if (($csv2 = fopen("data/products.csv", "r")) !== FALSE) {
            fgetcsv($csv2);
            while (($line2 = fgetcsv($csv2, 1000, ",")) !== FALSE) {
                $proInfo = [
                    'proName' => $line2[1],
                    'proPrice' =>$line2[2],
                    'proTime' => $line2[3],
                    'storeID' => $line2[4],
                    'proFeatured' => $line2[5]
                ];
                $_SESSION['products'][] = $proInfo;    
            }
            fclose($csv2);
        }

        //Add store names to product info
        foreach ($_SESSION['stores'] as $a2 => $b2) {
            for ($i = 0; $i < count($_SESSION['products']); $i++) {
                if ($_SESSION['products'][$i]['storeID'] == $b2['storeID']) {
                    $_SESSION['products'][$i]['storeName'] = $b2['storeName'];
                }
            }
        }
        
        //Find all the featured products
        $fpro = array();
        foreach ($_SESSION['products'] as $key3 => $item3) {
            if ($item3['proFeatured'] == "TRUE") {
                $fpro[$key3] = $item3;
            }
        }

        //Get 10 featured products out of total number of products
        $limit = 10;
        $fproDisplay = array_slice($fpro,0,$limit,true);
        ?>

        <!--Featured Product-->
        <h2><span class="vline">FEATURED PRODUCTS</span></h2>
        <div class="mall-section">
            <?php foreach ($fproDisplay as $key4 => $item4) : ?>
            <div class="store-sections">
                <div class="storeLists">
                    <div class="store-container">
                    <a href="nike/nikePro1.html">
                        <img class="store-logo" src="imgs/snack.jpg"
                            alt="product-image">
                    </a>
                    </div>
                    <div class="store-info">
                        <a href="nike/nikePro1.html">
                            <p class="name"><?= $item4['proName']; ?></p>
                            <p class="price"><?= '$'.$item4['proPrice']; ?></p>
                            <p class="store"><?= $item4['storeName']; ?></p>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <?php 
        //Created time comparison functions 
        function date_cmp2 ($p1, $p2) {
            $proTime1 = strtotime($p1['proTime']);
            $proTime2 = strtotime($p2['proTime']);
            return $proTime2 - $proTime1;
        }

        // Sort the stores based on newest created date
        $npro = $_SESSION['products'];
        usort($npro, 'date_cmp2');

        //Get 10 new stores out of total number of stores
        $nproDisplay = array_slice($npro,0,10,true);
        ?>

        <!--New Product-->
        <h2><span class="vline">NEW PRODUCTS</span></h2>
        <div class="mall-section">
            <?php foreach ($nproDisplay as $key5 => $item5) : ?>
            <div class="store-sections">
                <div class="storeLists">
                    <div class="store-container">
                    <a href="nike/nikePro1.html">
                        <img class="store-logo" src="imgs/snack2.jpg"
                            alt="product-image">
                    </a>
                    </div>
                    <div class="store-info">
                        <a href="nike/nikePro1.html">
                            <p class="name"><?= $item5['proName']; ?></p>
                            <p class="price"><?= '$'.$item5['proPrice']; ?></p>
                            <p class="store"><?= $item5['storeName']; ?></p>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
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
    <footer>
        <a id="logoName" href="#">
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
    
    <script src="ck.js"></script>  
</body>

</html>

<?php


