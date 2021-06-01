<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="browse-cate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap">
    <link rel="stylesheet" href="ckstyle.css">
    <title>Browse by Category</title>
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
                <li><a class="underline" href="aboutus.css">About Us</a></li>
                <li class="browse">
                    <span id="browse-text"><a href="#" id="browse">Browse</a></span>
                    <ul class="browse-dropdown">
                        <li class="browse-dropdown-info">
                            <a class="browse-links" href="browse-store-name.php">Browse Stores by Name</a>
                        </li>
                        <li class="browse-dropdown-info">
                            <a class="browse-links" href="browse-store-category.php">Browse Stores by
                                Category</a>
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

    <!--Main content starts here-->
    <main>
        <h1><span class="vline">OUR STORES</span></h1>
        <p>Browse by Category</p>

        <div class="category-select">
            <select name="category" id="category">
                <option value="choice" disabled selected>Choose a Category</option>
            <?php 
                // Open categories csv file
                if (($csv = fopen("data/categories.csv", "r")) !== FALSE) {
                    fgetcsv($csv);
                    while (($line = fgetcsv($csv, 1000, ",")) !== FALSE) {
                        $name = $line[1];
                        $cateInfo = [
                            'cateID' => $line[0],
                            'cateName' => $line[1],
                        ];
                        $_SESSION['categories'][] = $cateInfo;    
            ?>
                    <option value="<?php echo $name?>"><?php echo $name ?></option>
            <?php        
                    }
                    fclose($csv);
                }
            ?>
            </select>
        </div>

        <?php
        // Open stores csv file
        if (($csv2 = fopen("data/stores.csv", "r")) !== FALSE) {
            fgetcsv($csv2);
            while (($line2 = fgetcsv($csv2, 1000, ",")) !== FALSE) {
                $storeInfo = [
                    'storeID' => $line2[0],
                    'storeName' => $line2[1],
                    'cateID' => $line2[2],
                    'storeTime' => $line2[3],
                    'storeFeatured' =>  $line2[4]
                ];
                $_SESSION['stores'][] = $storeInfo;    
            }
            fclose($csv2);
        }

        //Add category names to store info
        foreach ($_SESSION['categories'] as $key => $value) {
            for ($i = 0; $i < count($_SESSION['stores']); $i++) {
                if ($_SESSION['stores'][$i]['cateID'] == $value['cateID']) {
                    $_SESSION['stores'][$i]['cateName'] = $value['cateName'];
                }
            }
        }
        
        ?>
       <div class="stores-list-cate">
        <?php
        if (isset($_GET['category'])) {
            $selected = $_GET['category'];
            echo '<div class="category">
                    <h2>'.$selected.'</h2>
                </div>';
        } else {
            $selected = null;
        }
        foreach ($_SESSION['stores'] as $key2 => $value2) {
            if ($value2['cateName'] === $selected) {
                echo '<div class="store-browse">
                        <div class="stores-lst">
                            <a href="nike/nike.html"><img class="storeLogos" src="nike/imgs/logo.png" alt="store-logo"></a>
                            <a href="nike/nike.html">
                                <h3>'.$value2['storeName'].'</h3>
                            </a>
                    </div>
                </div>';
            }
    
            if (isset($selected) == false) {
                echo'<div class="store-browse">
                        <div class="stores-lst">
                            <a href="nike/nike.html"><img class="storeLogos" src="nike/imgs/logo.png" alt="store-logo"></a>
                            <a href="nike/nike.html">
                                <h3>'.$value2['storeName'].'</h3>
                            </a>
                        </div>
                    </div>';
            }
        }
        ?>
        </div>  
    </main>
    <div class="cookie-container">
        <p>
            We use cookies in this website to help you have the best experience with the website and the advertisements.
            For more information, you can read our <a href="#">privacy policy</a>
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
                <li><a href="tos.html">Term Of Service</a></li>
                <li><a href="privacy.html">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="copyright">
            <a href="copyright.html">Copyright &copy; Mall 2021</a>
        </div>
    </footer>
    <script src="ck.js"></script>
    <script> 
    let selectCate = document.querySelector("#category");
    selectCate.addEventListener("change", function(){
        let selected = selectCate.value;
        console.log(selected);
        location.href = "browse-store-category.php?category=" + selected;
    });
    </script>
</body>


</html>

<?php 








