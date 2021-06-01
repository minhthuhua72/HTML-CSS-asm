<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nike.css">
    <link rel="stylesheet" href="nike-index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair Display">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap">
    <title>Store</title>
</head>

<body>
    <header>
        <!--Logo-->
        <?php 
        //Open stores csv file
        if (($csv = fopen("../data/stores.csv", "r")) !== FALSE) {
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

        <a href="nike.php" class="logo-name">
            <img class="logo" src="imgs/logo.png" alt="logo">
        <?php
            $storeID = $_GET['id'];
            foreach ( $_SESSION['stores'] as $k => $v) {
                if ($storeID == $v['storeID']) {
                    echo'<span>'. $v['storeName'].'</span>';
                }
            }
        ?>
        </a>
        <nav>
            <!--Responsive Navbar-->
            <input type="checkbox" id="active">
            <label for="active">
                <i class="fa fa-bars" id="open"></i>
                <i class="fa fa-times" id="close"></i>
            </label>
            <ul>
                <li><a class="underline" id="home" href="nike.html">Home</a></li>
                <li><a class="underline" href="about.html">About Us</a></li>
                <li class="browse">
                    <span id="browse-text"><a href="#">Products</a></span>
                    <ul class="browse-dropdown">
                        <li class="browse-dropdown-info">
                            <a class="browse-links" href="browseProCT.html">Browse Products by Category</a>
                        </li>
                        <li class="browse-dropdown-info">
                            <a class="browse-links" href="browseProC.php?id=<?= $storeID.'&'.'page=1'; ?>">Browse Stores by Created Time</a>
                        </li>
                    </ul>
                </li>
                <li><a class="underline" href="contact.html">Contact</a></li>

            </ul>
        </nav>
    </header>
    <!--EndHeader-->

    <main>
        <div class="nike-store">
            <div class="slogan">
                <h1>Welcome To Our Store!</h1>
                <button id="learnmore"><a href="#first-section">LET'S EXPLORE</a></button>
            </div>
        </div>

        <p class="discover">Discover</p>
        <h2>Featured Products</h2>
        <div class="featured-products" id="first-section">
            <?php
             //open products csv file
             if (($csv2 = fopen("../data/products.csv", "r")) !== FALSE) {
                fgetcsv($csv2);
                while (($line2 = fgetcsv($csv2, 1000, ",")) !== FALSE) {
                    $proInfo = [
                        'proName' => $line2[1],
                        'proPrice' =>$line2[2],
                        'proTime' => $line2[3],
                        'storeID' => $line2[4],
                        'proFeatured' => $line2[6]
                    ];
                    $_SESSION['products'][] = $proInfo;    
                }
                fclose($csv2);
            }

            //Find all the featured stores
            $fpro = array();
            foreach ($_SESSION['products'] as $key => $item) {
            if ($item['proFeatured'] == "TRUE" && $item['storeID'] == $storeID) {
                $fpro[$key] = $item;
            }
            }
            //Get max 10 featured products out of total number of products
            $fproDisplay = array_slice($fpro,0,5,true);
            ?>
            <?php foreach ($fproDisplay as $key2 => $item2) : ?>
            <div class="products">
                <div class="featured" onclick="location.href='nikePro1.html'">
                    <img class="pro-img fpro" src="imgs/pro1.jpg" alt="product image">
                    <div class="pro-info">
                        <p class="price"><?= '$'.$item2['proPrice']; ?></p>
                        <p class="name"><?= $item2['proName']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!--New Products-->
        <p class="discover">Discover</p>
        <h2>New Products</h2>
        <div class="new-products">
        <?php
        //Created time comparison function
        function date_cmp ($p1, $p2) {
            $proTime1 = strtotime($p1['proTime']);
            $proTime2 = strtotime($p2['proTime']);
            return $proTime2 - $proTime1;
        }

        //Sort the products based on newest created date based on store ID
        $newestPro = array();
        foreach($_SESSION['products'] as $key3 => $value3) {
            if ($value3['storeID'] == $_GET['id']) {
                $newestPro[$key3] = $value3;
            }
        }
        usort($newestPro, 'date_cmp');
       
        //Get 10 newest products out of total number of products
        $nproDisplay = array_slice($newestPro,0,5,true);
        ?>
            <?php foreach ($nproDisplay as $key4 => $item4) : ?>
            <div class="products">
                <div class="new" onclick=" location.href='nikePro2.html'">
                    <img class=" pro-img npro" src="imgs/pro2.jpg" alt="product image">
                    <div class="pro-info">
                        <p class="price"><?= '$'.$item4['proPrice']; ?></p>
                        <p class="name"><?= $item4['proName']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </main>

    <footer>
        <a id="logoName" href="#">
            <img class="logo" src="imgs/logo.png" alt="logo">
            <?php
            $storeID = $_GET['id'];
            foreach ( $_SESSION['stores'] as $k => $v) {
                if ($storeID == $v['storeID']) {
                    echo'<span>'. $v['storeName'].'</span>';
                }
            }
        ?>
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
</body>

</html>

