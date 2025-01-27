<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nike.css">
    <link rel="stylesheet" href="nikePro1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <title>Product Details</title>
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
                <li><a class="underline" href="nike.html">Home</a></li>
                <li><a class="underline" id="about" href="about.html">About Us</a></li>
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
                <li><a class="underline" id="contact" href="contact.html">Contact</a></li>

            </ul>
        </nav>
    </header>

    <main>
        <h1><span class="vline">PRODUCT DETAILS</span></h1>
        <div class="proSection">
            <div class="imgContainer">
                <div class="subContainer">
                    <img src="imgs/nikeJordan2.png" alt="product img">
                    <img src="imgs/nikeJordan3.png" alt="product img">
                    <img src="imgs/nikeJordan4.png" alt="product img">
                </div>
                <img src="imgs/nikeJordan.jfif" alt="product img">
            </div>
            <div class="detailsContainer">
                <h2>Air Jordan 1 ’07</h2>
                <h3>$90</h3>
                <p>The radiance lives on in the Nike Air Force 1 ’07, the b-ball OG that puts a fresh spin on what
                    you
                    know best: durably stitched overlays, clean finishes and the perfect amount of flash to make you
                    shine.
                </p>
                <hr>
                <h4>Color</h4>
                <div class="color"></div>
                <h4>Style</h4>
                <p class="style">CW2288-111</p>
                <h4>Size</h4>
                <div class="size">
                    <button class="size">6</button>
                    <button class="size">6.5</button>
                </div>

                <div id="buttons" class="btn">
                    <button onclick="addItem()" class="addBtn" type="button">ADD TO CART</button>
                    <button onclick="location.href='cart.html'" type="button">BUY NOW</button>
                </div>
            </div>
        </div>

        <h1><span class="vline"> RECOMMENDED PRODUCTS</span></h1>
        <div class="remSection">
            <div class="products" onclick="location.href='nikePro2.html'">
                <img src="imgs/nikeEvo.png" alt="product img">
                <p>Nike Air VaporMax Evo</p>
            </div>
            <div class="products" onclick="location.href='nikePro2.html'">
                <img src="imgs/nikeHippie.jfif" alt="product img">
                <p>Nike Cosmic Unity <br> Space Hippie</p>
            </div>
            <div class="products" onclick="location.href='nikePro2.html'">
                <img src="imgs/nikeAir.jpg" alt="product img">
                <p>Nike Air Force 1 High</p>
            </div>
            <div class="products" onclick="location.href='nikePro2.html'">
                <img src="imgs/nikeXXXV.jpg" alt="product img">
                <p>Air Jordan XXXV</p>
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
    <script src="products.js"></script>
</body>

</html>