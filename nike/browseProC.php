<?php require_once '../deleteInstall.php';?>
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
                <li><a class="underline" href="nike.php?id=<?php echo $_GET['id'] ?>">Home</a></li>
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
                    $productInfo = [
                        'name' => $line[1],
                        'price' => $line[2],
                        'latest' => $line[3],
                        'newest' => $line[3],
                        'storeID' => $line[4]
                    ];
                    $_SESSION['products'][] = $productInfo;    
            ?>
            <?php
                }
                fclose($csv);
            }?>
            <?php 
            //All products of the store
            $proDisplay = array();
            foreach($_SESSION['products'] as $key => $value) {
                if ($value['storeID'] == $_GET['id']) {
                    $proDisplay[$key] = $value;
                }
            }
            
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
            usort($proDisplay, $selectedOption);
            ?>

            <?php 
            //define numbers of products per page
            $limit = 2;

            //find out the number of products stored in csv file
            $totalProducts= count($proDisplay);

            //find number of page 
            $totalPages = ceil($totalProducts / $limit);

            $pagDisplay = array_slice($proDisplay,$limit * intval($_GET['page']) - $limit, $limit);
            ?>
            <?php foreach ($pagDisplay as $key3 => $item3) : ?>
            <div class="nikePro">
                <div class="pro-img" onclick="location.href='nikePro1.html'">
                    <img class="shoes" src="imgs/pro1.jpg">
                    <div class="overlay">
                        <div class="description">
                            <p><span>Created date: </span><?= $item3['newest']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="pro-info">
                    <p class="price"><?= '$'.$item3['price']; ?></p>
                    <p class="name"><?= $item3['name']; ?></p>
                </div>
            </div>  
            <?php endforeach; ?>
        </div> 

        <!--Pagination-->
        <div class="pagination">
        <?php 
        
        //Determine which page is currently on 
        if (!isset($_GET['page'])) {
            $p = 1;
        } else {
            $p = $_GET['page'];
        }

        //Previous button
        if ($_GET['page'] > 1) {
            $prev_link =  '<a href="browseProC.php?id='.$_GET['id'].'&'.'page='.($_GET['page']-1).'">Previous</a>';
            echo $prev_link;
        } elseif ($_GET['page'] > 1 && isset($_GET['category'])) {
            $next_link = '<a href="browseProC.php?id='.$_GET['id'].'&'.'page='.($_GET['page']-1).'&'.'category='.$_GET['category'].'">Next</a>';
            echo $next_link; 
        } 
           
        //Display the link to pages
        for ($p = 1; $p <= $totalPages; $p ++) {
            if (isset($_GET['category'])) {
                if ($p == $_GET['page']) {
                    echo '<a class="currentPage" href="browseProC.php?id='.$_GET['id'].'&'.'page='.$p.'&'.'category='.$_GET['category'].'">'. $p.'</a>';
                } else {
                    echo '<a href="browseProC.php?id='.$_GET['id'].'&'.'page='.$p.'&'.'category='.$_GET['category'].'">'. $p.'</a>';
                }
            } else {
                if ($p == $_GET['page']) {
                    echo '<a class="currentPage" href="browseProC.php?id='.$_GET['id'].'&'.'page='.$p.'">'. $p.'</a>';
                } else {
                    echo '<a href="browseProC.php?id='.$_GET['id'].'&'.'page='.$p.'">'. $p.'</a>';
                }
            }
        }
        //Next button
        if ($_GET['page'] < $totalPages && !isset($_GET['category'])) {
            $next_link = '<a href="browseProC.php?id='.$_GET['id'].'&'.'page='.($_GET['page']+1).'">Next</a>';
            echo $next_link;   
        } elseif ($_GET['page'] < $totalPages && isset($_GET['category'])) {
            $next_link = '<a href="browseProC.php?id='.$_GET['id'].'&'.'page='.($_GET['page']+1).'&'.'category='.$_GET['category'].'">Next</a>';
            echo $next_link; 
        } 
        ?>
        </div>

        <span id="storeID"><?php echo $_GET['id']?></span>
</main>

<footer>
        <a id="logoName" href="nike.html">
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
<script> 
    let selectProCT = document.querySelector("#category");
    selectProCT.addEventListener("change", function(){
        let storeID = document.getElementById("storeID").innerHTML;
        let selectedProCT = selectProCT.value;
        console.log(selectedProCT);
        location.href = "browseProC.php?id="+ storeID + "&" + "page=1" +"&" + "category=" + selectedProCT ;
    });
    </script>
</html>


