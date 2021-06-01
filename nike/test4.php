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
    <title>Nike</title>
</head>

<body>
    <header>
        <!--Logo-->
        <a href="nike.html" class="logo-name">
            <img class="logo" src="imgs/nikeLogo.jpg" alt="logo">
            <span>NIKE</span>
        </a>
        <nav>
            <!--Responsive Navbar-->
            <input type="checkbox" id="active">
            <label for="active">
                <i class="fa fa-bars" id="open"></i>
                <i class="fa fa-times" id="close"></i>
            </label>
            <ul>
                <li>
                <?php
                $link="test4.php?storeId=";
                echo'<a class="underline" id="home" href='.$link.'>Home</a></li>'
                ?>
                <li><a class="underline" href="about.html">About Us</a></li>
                <li class="browse">
                    <span id="browse-text"><a href="#">Products</a></span>
                    <ul class="browse-dropdown">
                        <li class="browse-dropdown-info">
                            <a class="browse-links" href="browseProCT.html">Browse Products by Category</a>
                        </li>
                        <li class="browse-dropdown-info">
                            <a class="browse-links" href="browseProC.html">Browse Stores by Created Time</a>
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
                <h1>Just Do It!</h1>
                <button id="learnmore"><a href="#first-section">LET'S GO</a></button>
            </div>
        </div>
        <div class="featured-products" id="first-section">
            <p>Discover</p>
            <h2>Featured Products</h2>
            <div class="products">
                <div class="featured" onclick="location.href='nikePro1.html'">
                    <img class="pro-img fpro" src="imgs/nikeXXXV.jpg">
                    <div class="pro-info">
                        <p class="price">$162</p>
                        <p class="name">Air Jordan XXXV</p>
                    </div>
                </div>
                <div class="featured" onclick="location.href='nikePro1.html'">
                    <img class="pro-img fpro" src="imgs/nikeJordan.jfif">
                    <div class="pro-info">
                        <p class="price">$90</p>
                        <p class="name">Air Jordan 1 ’07</p>
                    </div>
                </div>
                <div class="featured" onclick="location.href='nikePro1.html'">
                    <img class="pro-img fpro" src="imgs/nikeAir.jpg">
                    <div class="pro-info">
                        <p class="price">$120</p>
                        <p class="name">Nike Air Force 1 High</p>
                    </div>
                </div>
                <div class="featured" onclick="location.href='nikePro1.html'">
                    <img class="pro-img fpro" src="imgs/nikeHippie.jfif">
                    <div class="pro-info">
                        <p class="price">$150</p>
                        <p class="name">Nike Cosmic Unity <br> Space Hippie</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="new-products">
            <p>Discover</p>
            <h2>New Products</h2>
            <div class="products">
                <div class="new" onclick=" location.href='nikePro2.html'">
                    <img class=" pro-img npro" src="imgs/nike-a.jfif">
                    <div class="pro-info">
                        <p class="price">$135</p>
                        <p class="name">Air Jordan 1 Centre Court</p>
                    </div>
                </div>
                <div class="new" onclick="location.href='nikePro2.html'">
                    <img class="pro-img npro" src="imgs/nike-b.jfif">
                    <div class="pro-info">
                        <p class="price">$150</p>
                        <p class="name">KD14</p>
                    </div>
                </div>

                <div class="new" onclick="location.href='nikePro2.html'">
                    <img class="pro-img npro" src="imgs/nike-d.jfif">
                    <div class="pro-info">
                        <p class="price">$200</p>
                        <p class="name">Nike Air VaporMax <br> Flyknit 3 Exeter Edition</p>
                    </div>
                </div>

                <div class="new" onclick="location.href='nikePro2.html'">
                    <img class="pro-img npro" src="imgs/nike-e.jfif">
                    <div class="pro-info">
                        <p class="price">$180</p>
                        <p class="name">Nike ZoomX Invincible <br> Run Flyknit
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <a id="logoName" href="#">
            <img class="logo" src="imgs/nikeLogo.jpg" alt="logo">
            <span>Nike</span>
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

<?php 
if (($csv = fopen("../data/stores.csv", "r")) !== FALSE) {
    fgetcsv($csv);
    while (($line = fgetcsv($csv, 1000, ",")) !== FALSE) {
        $storeID = $line[0];
        $storeName = $line[1];   
        $storeInfo = [
            'storeID' => $storeID,
            'storeName' => $storeName
        ];
        $_SESSION['stores'][] = $storeInfo;    
    }
    fclose($csv);
}

if (($csv2 = fopen("../data/products.csv", "r")) !== FALSE) {
    fgetcsv($csv2);
    while (($line2 = fgetcsv($csv2, 1000, ",")) !== FALSE) {
        $proName = $line2[1];
        $proPrice = $line2[2];
        $storeID = $line2[4];
        $proInfo = [
            'proName' => $proName,
            'proPrice' => $proPrice,
            'storeID' => $storeID,
        ];
        $_SESSION['products'][] = $proInfo;    
    }
    fclose($csv2);
}

// echo "<pre>";
// var_dump( $_SESSION['products']);

foreach ($_SESSION['stores'] as $key => $item) {

}


// foreach ($_SESSION['products'] as $key => $item) {
//     foreach ($_SESSION['stores'] as $key2 => $item2) {
//         if ($item['storeID'] === $item2['storeID']) {
//            array_push($_SESSION['products'], $item2['storeName']);
//         }
//     }
// }

// echo "<pre>";
// var_dump( $_SESSION['products']);
?>

