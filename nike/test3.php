<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nike.css">
    <link rel="stylesheet" href="browsePro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap">
    <title>Browse by Created Time</title>
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
                <li><a class="underline" href="#">About Us</a></li>
                <li class="browse">
                    <span id="browse-text"><a id="browsePro" href="#">Products</a></span>
                    <ul class="browse-dropdown">
                        <li class="browse-dropdown-info">
                            <a class="browse-links" href="browseProCT.html">Browse Products by Category</a>
                        </li>
                        <li class="browse-dropdown-info">
                            <a class="browse-links" href="browseProC.html">Browse Stores by Created Time</a>
                        </li>
                    </ul>
                </li>
                <li><a class="underline" href="Contact.html">Contact</a></li>

            </ul>
        </nav>
    </header>
    <!--EndHeader-->

    <main>
        <h1><span class="vline">OUR PRODUCTS</span></h1>
        <p>Browse by Created Time</p>
        <div class="category-select">
            <select name="category" id="category">
            <?php 
                $categoryPro = array (
                    'choice' => 'Choose a Created Time',
                    'newest' => 'Newest First',
                    'latest' => 'Lastest First'
                );
                foreach ($categoryPro as $value => $description) {
            ?>
                    <option value="<?php echo $value?>"><?php echo $description ?></option>
            <?php
            }
            ?>
            </select>
        </div>

        <div class="productLST">
            <?php 
            if (($csv = fopen("../data/products.csv", "r")) !== FALSE) {
                fgetcsv($csv);
                while (($line = fgetcsv($csv, 1000, ",")) !== FALSE) {
                    $proName = $line[1];
                    $proPrice = $line[2];
                    $proTime = $line[3];
                    $storeID = $line[4];
                    $productInfo = [
                        'name' => $proName,
                        'price' => $proPrice,
                        'latest' => $proTime,
                        'newest' => $proTime,
                        'storeID' => $storeID
                    ];
                    $_SESSION['products'][] = $productInfo;    
            ?>
            <?php
                }
                fclose($csv);
            }?>
            
        
            <?php 
            
            // Created time comparison functions
            function createdTime_latest($pro1, $pro2) {
                    return strtotime($pro1['latest']) - strtotime($pro2['latest']);
            }

            function createdTime_newest($pro1, $pro2) {
                return strtotime($pro2['newest']) - strtotime($pro1['newest']);
            }

            $mapping = [
                'newest' => 'createdTime_newest',
                'latest' => 'createdTime_latest'
            ];

            $selectedOption = 'createdTime_newest';
            if (isset($_GET['category']) && !empty($_GET['category'])) {
                $selectedOption = $mapping[$_GET['category']];
            }

            usort($_SESSION['products'], $selectedOption);
            ?>
            <?php foreach ($_SESSION['products'] as $key => $item) : ?>
            <div class="nikePro">
                <div class="pro-img" onclick="location.href='nikePro1.html'">
                    <img class="shoes" src="imgs/3 (1).png">
                    <div class="overlay">
                        <div class="description">
                            <p><span>Created date: </span><?= $item['newest']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="pro-info">
                    <p class="price"><?= '$'.$item['price']; ?></p>
                    <p class="name"><?= $item['name']; ?></p>
                </div>
            </div>  
            <?php endforeach; ?>
        </div> 
</main>

<footer>
        <a id="logoName" href="nike.html">
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
<script> 
    let selectProCT = document.querySelector("#category");
    selectProCT.addEventListener("change", function(){
        let selectedProCT = selectProCT.value;
        console.log(selectedProCT);
        location.href = "test3.php?category=" + selectedProCT;
    });
    </script>
</html>

<?php 
//define numbers of products per page
$limit = 2;

//find out the number of products stored in csv file
$csv2 = file('../data/products.csv');
$totalProducts= count($csv2) -1;

//find number of page 
$totalPages = ceil($totalProducts / $limit);

//display the link to pages
for ($p =1; $p <= $totalPages; $p ++) {
    echo '<a href="test3.php?page=' . $p. '">'. $p. '</a>';
}

//determine which page is currently on 
if (!isset($_GET['page'])) {
    $p = 1;
    echo $p;
} else {
    $p = $_GET['page'];
    echo $p;
}

echo "<pre>";
var_dump(array_slice($_SESSION['products'],$limit * intval($_GET['page']) - $limit, $limit));

if($_GET['page'] > 1)
    $prev_link = '<a href="test3.php?page='.($_GET['page']-1).'"> previous </a>';
if($_GET['page'] < $totalPages)
    $next_link = '<a href="test3.php?page='.($_GET['page']+1).'"> next </a>';