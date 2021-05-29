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
                <li><a class="underline" href="index.html">Home</a></li>
                <li><a class="underline" href="aboutus.css">About Us</a></li>
                <li class="browse">
                    <span id="browse-text"><a href="#" id="browse">Browse</a></span>
                    <ul class="browse-dropdown">
                        <li class="browse-dropdown-info">
                            <a class="browse-links" href="browse-store-name.html">Browse Stores by Name</a>
                        </li>
                        <li class="browse-dropdown-info">
                            <a class="browse-links" href="browse-store-category.html">Browse Stores by
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
        <div class="category-select" required>
            <form method="POST">
                <select name="category" id="store-cate">
                    <option value="choice">Choose a Category</option>
                    <option value="accessories">Fashion Accessories</option>
                    <option value="unisex">Unisex Apparel</option>
                    <option value="other">Other</option>
                </select>
                <input type="submit" value="Search">
            </form>
        </div>
        <?php 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $selectedOption = $_POST['category'];
    switch ($selectedOption) {
                case 'accessories':
                    echo ' <div class="stores-list-cate">
                    <div class="category">
                        <h2>Fashion Accessories</h2>
                    </div>
                    <div class="store-browse">
                        <div class="stores-lst">
                            <a href="nike/nike.html"><img class="storeLogos" src="imgs/charles.png" alt="store-logo"></a>
                            <a href="nike/nike.html">
                                <h3>Charles & Keith</h3>
                            </a>
                        </div>
                        <div class="stores-lst">
                            <a href="nike/nike.html"><img class="storeLogos" src="imgs/pandora.jpg" alt="store-logo"></a>
                            <a href="nike/nike.html">
                                <h3>Pandora</h3>
                            </a>
                        </div>
                    </div>
                </div>';
                    break;
                case 'unisex':
                    echo ' <div class="stores-list-cate">
                    <div class="category">
                        <h2>Unisex Apparel</h2>
                    </div>
                    <div class="store-browse">
                        <div class="stores-lst">
                            <a href="nike/nike.html"><img class="storeLogos" src="imgs/nike.png" alt="store-logo"></a>
                            <a href="nike/nike.html">
                                <h3>Nike</h3>
                            </a>
                        </div>
                        <div class="stores-lst">
                            <a href="nike/nike.html"><img class="storeLogos" src="imgs/tommy.jpg" alt="store-logo"></a>
                            <a href="nike/nike.html">
                                <h3>Tommy Hilfiger</h3>
                            </a>
                        </div>
                    </div>
                </div>';
                    break;
                    case 'other':
                        echo ' ';
                        break;    
                default:
                    echo ' <div class="stores-list-cate">
                    <div class="category">
                        <h2>Fashion Accessories</h2>
                    </div>
                    <div class="store-browse">
                        <div class="stores-lst">
                            <a href="nike/nike.html"><img class="storeLogos" src="imgs/charles.png" alt="store-logo"></a>
                            <a href="nike/nike.html">
                                <h3>Charles & Keith</h3>
                            </a>
                        </div>
                        <div class="stores-lst">
                            <a href="nike/nike.html"><img class="storeLogos" src="imgs/pandora.jpg" alt="store-logo"></a>
                            <a href="nike/nike.html">
                                <h3>Pandora</h3>
                            </a>
                        </div>
                    </div>
                </div>
        
                <div class="stores-list-cate">
                    <div class="category">
                        <h2>Unisex Apparel</h2>
                    </div>
                    <div class="store-browse">
                        <div class="stores-lst">
                            <a href="nike/nike.html"><img class="storeLogos" src="imgs/nike.png" alt="store-logo"></a>
                            <a href="nike/nike.html">
                                <h3>Nike</h3>
                            </a>
                        </div>
                        <div class="stores-lst">
                            <a href="nike/nike.html"><img class="storeLogos" src="imgs/tommy.jpg" alt="store-logo"></a>
                            <a href="nike/nike.html">
                                <h3>Tommy Hilfiger</h3>
                            </a>
                        </div>
                    </div>
                </div>';
                    break;
    }
} ?>
    
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
</body>

</html>


/