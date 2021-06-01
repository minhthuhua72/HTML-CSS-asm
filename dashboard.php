<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>

		<div class="logo">Xero<span>Source</span></div>
	</header>
<style>
    @import 'https://fonts.googleapis.com/css?family=Lato:300,400';

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    body, html {
    font-family: 'Lato', sans-serif;
    font-size: 20px;
    height: 100%;
    position: relative;
    }

    .clearfix:after {
    content: "";
    display: block;
    clear: both;
    }

    a {
    color: #fff;
    text-decoration: none; 
    }

    .nav-btn {
    width: 100%;
    height: 35px;
    padding-top: 4px;
    color: #D5D3D3;
    background-color: #212121;			 ;
    text-align: center;
    cursor: pointer;
    display: none;
    }
    .nav-btn:active {
    background-color: #090909; 
    }

    header {
    height: 50px;
    width: 100%;
    background-color: #274C6B;
    display: none;
    }

    header .logo {
    opacity: 0.9;
    font-size: 120%;
    padding-top: 9px;
    padding-left: 8px;
    color: #fff;
    }
    header .logo span {
    font-weight: 300;
    }

    .container {
    width: 100%;
    height: 100%;
    position: relative;
    }

    .sidebar {
    width: 250px;
    background-color: #302F2F;
    position: fixed;
    top: 0px;
    left: 0;
    bottom: 0;
    box-shadow: 1px 0px 10px #777;
    }

    .sidebar nav > a {
    font-size: 150%;
    display: inline-block;
    padding: 30px 0px;
    padding-left: 30px;
    opacity: 0.7;
    transition: all 0.2s;
    }
    .sidebar nav > a:hover {
    opacity: 1;
    }

    .sidebar nav a span {
    font-weight: 300;
    }

    .sidebar nav ul {
    list-style: none;
    }

    .sidebar nav ul li {
    font-size: 70%;
    padding: 19px 0;	
    padding-left: 20px;
    border-bottom: 0.5px solid #111;
    }

    .sidebar nav ul li:nth-child(1):hover {
    background-color: #e67e22;
    }

    .sidebar nav ul li:nth-child(1).active {
    background-color: #e67e22;
    }

    .sidebar nav ul li:nth-child(2):hover {
    background-color: #2980b9;
    }

    .sidebar nav ul li:nth-child(2).active {
    background-color: #2980b9;
    }

    .sidebar nav ul li:nth-child(3):hover {
    background-color: #16a085;
    }

    .sidebar nav ul li:nth-child(3).active {
    background-color: #16a085;
    }

    .sidebar nav ul li:nth-child(4):hover {
    background-color: #8e44ad;
    }

    .sidebar nav ul li:nth-child(4).active {
    background-color: #8e44ad;
    }

    .sidebar nav ul li:nth-child(5):hover {
    background-color: #f1c40f;
    }

    .sidebar nav ul li:nth-child(5).active {
    background-color: #f1c40f;
    }


    .sidebar nav ul li a {
    color: #D7D5D5;
    }

    .sidebar nav ul li:hover a{
    color: #fff;
    }

    .main-content {
    background-color: #fafafa;
    width: calc(100% - 250px);
    height: 100%;
    margin-left: 250px;
    padding: 20px 30px;
    }
    .main-content .panel-wrapper {
    margin: 20px 0;
    box-shadow: 0px 1px 5px #777;
    }

    .main-content .panel-wrapper .panel-head {
    background-color: #00A5F2;
    color: #fff;
    padding: 10px 10px;
    border: 1px solid #00A5F2;
    }
    .main-content .panel-wrapper .panel-body {
    padding: 20px 10px;
    font-size: 80%;
    }

    @media only screen and (max-width: 420px){
    header {
    display: block;
    }
    .nav-btn {
    display: block;
    }
    .sidebar {
    position: relative;
    height: 378px;
    width: 100%;
    display: none;
    margin-bottom: 40px;
    z-index: 1000;
    }
    .main-content {
    width: 100%;
    margin-left: 0;
    z-index: -1;
    position: relative;
    }
    }

    @media only screen and (max-width: 768px){
    header {
    display: block;
    }
    .nav-btn {
    display: block;
    }
    .sidebar {
    position: relative;
    height: 378px;
    width: 100%;
    display: none;
    margin-bottom: 40px;
    z-index: 1000;
    }
    .main-content {
    width: 100%;
    margin-left: 0;
    z-index: -1;
    position: relative;
    }
    }
</style>
	<div class="nav-btn">Menu</div>
	<div class="container">
		
		<div class="sidebar">
			<nav>
				<a href="#">Admin<span>Admin</span></a>
				<ul>
					<li class="active"><a href="#">Dashboard</a></li>
					<li><a href="#copy">Copyright</a></li>
					<li><a href="#tos">ToS</a></li>
					<li><a href="#privacy">Privacy Policy</a></li>
					<li><a href="#aboutUs">About Us</a></li>
                    

				</ul>
			</nav>
		</div>

		<div class="main-content">
			<h1>Dashboard</h1>
			<p>Here you can stuff!</p>
			
			<div class="panel-wrapper">
				<div class="panel-head">
					News
				</div>
				<div class="panel-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam fugiat culpa quia possimus molestiae id sapiente ad eveniet, aliquid, eum sint fuga eius, ratione suscipit ut minus voluptates dicta nesciunt. Totam fugiat culpa quia possimus molestiae id sapiente ad eveniet, aliquid, eum sint fuga eius, ratione suscipit ut minus voluptates dicta nesciunt.
				</div>
			</div>
            
        </div>
        <div id="copy" class="main-content">
            <div class="panel-wrapper">
				<div class="panel-head">
					Copyright
				</div>
				<div class="panel-body">
                <form  method = "post" >
                <?php
                    if(isset($_POST['submitData'])){
                        $content1 = $_POST['text'];
                        $path = "content.txt";
                        file_put_contents($path,$content1);
                    }
                    ?>
                    Section: <input name="section" style="font-size:15px; padding:10px" type="text" value ="Why why why are u" disabled>
                    <br>
                    
                    <?php
                    $path = 'content.txt';
                    $file= file_get_contents($path);
                    $content = explode(" - ", $file);
                    echo '<p class="text1" style= "border: solid 1px;margin-right: 774px;margin-top: 10px;">'.$content[0].'</p>'
                        ;
                    ?>
                    <textarea  name="text" style="margin-top:20px;display:none" class="text" cols="40" rows="10" >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates ducimus odio porro perspiciatis. Eligendi quae iste mollitia est, rerum dolorem veritatis sint, culpa totam quam voluptates vero maxime. Libero, dolore.</textarea>
                    <br>
                    
                    <p style="cursor: pointer;
                            border: solid 2px black;
                            margin-right: 1055px;
                            padding-left: 10px;
                            color: blue;" 
                         id="buttonEdit" class="edit" >Edit
                    </p>
                    <button name="submitData" style="color: blue;padding: 5px;padding-left: 15px;padding-right: 15px;margin-top: 20px;">Update</button>
                    
                </form>
                
                
				</div>

			</div>
            <div class="panel-wrapper">
				<div class="panel-head">
                    Copyright
				</div>
				<div class="panel-body">
                <form  method = "post" >
                <?php
                    if(isset($_POST['submitData'])){
                        $content1 = $_POST['text'];
                        $path = "content.txt";
                        file_put_contents($path,$content1);
                    }
                    ?>
                    Section: <input name="section"  style="font-size:15px; padding:10px" type="text" value ="Do do do you need" disabled>
                    <br>
                    
                    <?php
                    $path = 'content.txt';
                    $file= file_get_contents($path);
                    $content = explode(" - ", $file);
                    echo '<p class="text1" style= "border: solid 1px;margin-right: 774px;margin-top: 10px;">'.$content[0].'</p>'
                        ;
                    ?>
                    <textarea  name="text" style="margin-top:20px;display:none" class="text" cols="40" rows="10" >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates ducimus odio porro perspiciatis. Eligendi quae iste mollitia est, rerum dolorem veritatis sint, culpa totam quam voluptates vero maxime. Libero, dolore.</textarea>
                    <br>
                    
                    <p style="cursor: pointer;
                            border: solid 2px black;
                            margin-right: 1055px;
                            padding-left: 10px;
                            color: blue;" 
                         id="buttonEdit" class="edit" >Edit
                    </p>
                    <button name="submitData" style="color: blue;padding: 5px;padding-left: 15px;padding-right: 15px;margin-top: 20px;">Update</button>
                    
                </form>
                
                
				</div>

			</div>
            
        </div>
        <div id="tos" class="main-content">
            <div class="panel-wrapper">
				<div class="panel-head">
					Term of Service
				</div>
				<div class="panel-body">
                <form  method = "post" >
                <?php
                    if(isset($_POST['submitData'])){
                        $content1 = $_POST['text'];
                        $path = "content.txt";
                        file_put_contents($path,$content1);
                    }
                    ?>
                    Section: <input name="section"  style="font-size:15px; padding:10px" type="text" value ="Why why why are u" disabled>
                    <br>
                    
                    <?php
                    $path = 'content.txt';
                    $file= file_get_contents($path);
                    $content = explode(" - ", $file);
                    echo '<p class="text1" style= "border: solid 1px;margin-right: 774px;margin-top: 10px;">'.$content[0].'</p>'
                        ;
                    ?>
                    <textarea  name="text" style="margin-top:20px;display:none" class="text" cols="40" rows="10" >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates ducimus odio porro perspiciatis. Eligendi quae iste mollitia est, rerum dolorem veritatis sint, culpa totam quam voluptates vero maxime. Libero, dolore.</textarea>
                    <br>
                    
                    <p style="cursor: pointer;
                            border: solid 2px black;
                            margin-right: 1055px;
                            padding-left: 10px;
                            color: blue;" 
                         id="buttonEdit" class="edit"  >Edit
                    </p>
                    <button name="submitData" style="color: blue;padding: 5px;padding-left: 15px;padding-right: 15px;margin-top: 20px;">Update</button>
                    
                </form>
                
                
				</div>

			</div>
            <div class="panel-wrapper">
				<div class="panel-head">
                Term of Service
				</div>
				<div class="panel-body">
                <form  method = "post" >
                <?php
                    if(isset($_POST['submitData'])){
                        $content1 = $_POST['text'];
                        $path = "content.txt";
                        file_put_contents($path,$content1);
                    }
                    ?>
                    Section: <input name="section"  style="font-size:15px; padding:10px" type="text" value ="Do do do you need" disabled>
                    <br>
                    
                    <?php
                    $path = 'content.txt';
                    $file= file_get_contents($path);
                    $content = explode(" - ", $file);
                    echo '<p class="text1" style= "border: solid 1px;margin-right: 774px;margin-top: 10px;">'.$content[0].'</p>'
                        ;
                    ?>
                    <textarea  name="text" style="margin-top:20px;display:none" class="text" cols="40" rows="10" >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates ducimus odio porro perspiciatis. Eligendi quae iste mollitia est, rerum dolorem veritatis sint, culpa totam quam voluptates vero maxime. Libero, dolore.</textarea>
                    <br>
                    
                    <p style="cursor: pointer;
                            border: solid 2px black;
                            margin-right: 1055px;
                            padding-left: 10px;
                            color: blue;" 
                         id="buttonEdit" class="edit"  >Edit
                    </p>
                    <button name="submitData" style="color: blue;padding: 5px;padding-left: 15px;padding-right: 15px;margin-top: 20px;">Update</button>
                    
                </form>
                
                
				</div>

			</div>
            
        </div>
        <div id="privacy" class="main-content">
            <div class="panel-wrapper">
				<div class="panel-head">
					Privacy Police
				</div>
				<div class="panel-body">
                <form  method = "post" >
                <?php
                    if(isset($_POST['submitData'])){
                        $content1 = $_POST['text'];
                        $path = "content.txt";
                        file_put_contents($path,$content1);
                    }
                    ?>
                    Section: <input name="section"  style="font-size:15px; padding:10px" type="text" value ="Why why why are u" disabled>
                    <br>
                    
                    <?php
                    $path = 'content.txt';
                    $file= file_get_contents($path);
                    $content = explode(" - ", $file);
                    echo '<p class="text1" style= "border: solid 1px;margin-right: 774px;margin-top: 10px;">'.$content[0].'</p>'
                        ;
                    ?>
                    <textarea  name="text" style="margin-top:20px;display:none" class="text" cols="40" rows="10" >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates ducimus odio porro perspiciatis. Eligendi quae iste mollitia est, rerum dolorem veritatis sint, culpa totam quam voluptates vero maxime. Libero, dolore.</textarea>
                    <br>
                    
                    <p style="cursor: pointer;
                            border: solid 2px black;
                            margin-right: 1055px;
                            padding-left: 10px;
                            color: blue;" 
                         id="buttonEdit" class="edit"  >Edit
                    </p>
                    <button name="submitData" style="color: blue;padding: 5px;padding-left: 15px;padding-right: 15px;margin-top: 20px;">Update</button>
                    
                </form>
                
                
				</div>

			</div>
            <div class="panel-wrapper">
				<div class="panel-head">
					Privacy Police
				</div>
				<div class="panel-body">
                    <form  method = "post" >
                        <?php
                            if(isset($_POST['submitData'])){
                                $content1 = $_POST['text'];
                                $path = "content.txt";
                                file_put_contents($path,$content1);
                            }
                        ?>
                        Section: <input name="section"  style="font-size:15px; padding:10px" type="text" value ="Do do do you need" disabled>
                        <br>
                        
                        <?php
                        $path = 'content.txt';
                        $file= file_get_contents($path);
                        $content = explode(" - ", $file);
                        echo '<p class="text1" style= "border: solid 1px;margin-right: 774px;margin-top: 10px;">'.$content[0].'</p>'
                            ;
                        ?>
                        <textarea  name="text" style="margin-top:20px;display:none" class="text" cols="40" rows="10" >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates ducimus odio porro perspiciatis. Eligendi quae iste mollitia est, rerum dolorem veritatis sint, culpa totam quam voluptates vero maxime. Libero, dolore.</textarea>
                        <br>
                        
                        <p style="cursor: pointer;
                                border: solid 2px black;
                                margin-right: 1055px;
                                padding-left: 10px;
                                color: blue;" 
                            id="buttonEdit1" class="edit"  >Edit
                        </p>
                        <button name="submitData" style="color: blue;padding: 5px;padding-left: 15px;padding-right: 15px;margin-top: 20px;">Update</button>
                        
                    </form>
                
                
				</div>

			</div>
            
        </div>
        <div id="aboutUs" class="main-content">
            <div class="panel-wrapper" >
                <div class="panel-head">
                    Hứa Minh Thư
                </div>
                <div class="panel-body" >
                        <form  method=POST enctype="multipart/form-data" >
                            Choose file: <input type="file" name="file"/><br>
                            <input type="submit" value="Uploading" name="ok"/>
                            <?php
                            if(isset($_POST["ok"])) //kiem tra xem nguoi xu dung da bam vao nut "tai len" hay chua
                            {
                            if($_FILES["file"]["name"]!=NULL)
                            {

                            if($_FILES["file"]["type"]=="image/jpeg"
                            ||$_FILES["file"]["type"]=="image/png"
                            ||$_FILES["file"]["type"]=="image/gif"
                            )
                            {
                            if($_FILES["file"]["size"]>1048576)
                            {
                            echo "File is too heavy";
                            }

                            // kiem tra su ton tai cua file
                            elseif (file_exists("" . $_FILES["file"]["name"])) 
                            {
                            echo $_FILES["file"]["name"]." File already exists. ";
                            }

                            else{

                            $path = ""; // file luu vào thu muc chua file upload
                            $tmp_name = $_FILES['file']['tmp_name'];
                            $name = $_FILES['file']['name'];
                            $type = $_FILES['file']['type']; 
                            $size = $_FILES['file']['size']; 
                            // Upload file
                            move_uploaded_file($tmp_name,$path.$name);
                            echo "File uploaded! <br />";
                            echo "Tên file : ".$name."<br />";
                            echo "Kieu file : ".$type."<br />";
                            echo "File size : ".$size;
                            }
                            }
                            else {
                            echo "Invalid file";
                            }
                            }
                            else 
                            {
                            echo "Please select file";
                            }
                            }

                            ?>
                        </form>
            </div>
            
            </div>
            <div class="panel-wrapper" >
                    <div class="panel-head">
                        Hứa Minh Thư
                    </div>
                    <div class="panel-body" >
                        <form  method=POST enctype="multipart/form-data" >
                            Choose file: <input type="file" name="file"/><br>
                            <input type="submit" value="Uploading" name="ok"/>
                            <?php
                            if(isset($_POST["ok"])) //kiem tra xem nguoi xu dung da bam vao nut "tai len" hay chua
                            {
                            if($_FILES["file"]["name"]!=NULL)
                            {

                            if($_FILES["file"]["type"]=="image/jpeg"
                            ||$_FILES["file"]["type"]=="image/png"
                            ||$_FILES["file"]["type"]=="image/gif"
                            )
                            {
                            if($_FILES["file"]["size"]>1048576)
                            {
                            echo "File is too heavy";
                            }

                            // kiem tra su ton tai cua file
                            elseif (file_exists("" . $_FILES["file"]["name"])) 
                            {
                            echo $_FILES["file"]["name"]." File already exists. ";
                            }

                            else{

                            $path = ""; // file luu vào thu muc chua file upload
                            $tmp_name = $_FILES['file']['tmp_name'];
                            $name = $_FILES['file']['name'];
                            $type = $_FILES['file']['type']; 
                            $size = $_FILES['file']['size']; 
                            // Upload file
                            move_uploaded_file($tmp_name,$path.$name);
                            echo "File uploaded! <br />";
                            echo "Tên file : ".$name."<br />";
                            echo "Kieu file : ".$type."<br />";
                            echo "File size : ".$size;
                            }
                            }
                            else {
                            echo "Invalid file";
                            }
                            }
                            else 
                            {
                            echo "Please select file";
                            }
                            }

                            ?>
                        </form>
                </div>
            
            </div>
            <div class="panel-wrapper" >
                    <div class="panel-head">
                        Hứa Minh Thư
                    </div>
                    <div class="panel-body" >
                        <form  method=POST enctype="multipart/form-data" >
                            Choose file: <input type="file" name="file"/><br>
                            <input type="submit" value="Uploading" name="ok"/>
                            <?php
                            if(isset($_POST["ok"])) //kiem tra xem nguoi xu dung da bam vao nut "tai len" hay chua
                            {
                            if($_FILES["file"]["name"]!=NULL)
                            {

                            if($_FILES["file"]["type"]=="image/jpeg"
                            ||$_FILES["file"]["type"]=="image/png"
                            ||$_FILES["file"]["type"]=="image/gif"
                            )
                            {
                            if($_FILES["file"]["size"]>1048576)
                            {
                            echo "File is too heavy";
                            }

                            // kiem tra su ton tai cua file
                            elseif (file_exists("" . $_FILES["file"]["name"])) 
                            {
                            echo $_FILES["file"]["name"]." File already exists. ";
                            }

                            else{

                            $path = ""; // file luu vào thu muc chua file upload
                            $tmp_name = $_FILES['file']['tmp_name'];
                            $name = $_FILES['file']['name'];
                            $type = $_FILES['file']['type']; 
                            $size = $_FILES['file']['size']; 
                            // Upload file
                            move_uploaded_file($tmp_name,$path.$name);
                            echo "File uploaded! <br />";
                            echo "Tên file : ".$name."<br />";
                            echo "Kieu file : ".$type."<br />";
                            echo "File size : ".$size;
                            }
                            }
                            else {
                            echo "Invalid file";
                            }
                            }
                            else 
                            {
                            echo "Please select file";
                            }
                            }

                            ?>
                        </form>
                </div>
            
            </div>
            <div class="panel-wrapper" >
                    <div class="panel-head">
                        Hứa Minh Thư
                    </div>
                    <div class="panel-body" >
                        <form  method=POST enctype="multipart/form-data" >
                            Choose file: <input type="file" name="file"/><br>
                            <input type="submit" value="Uploading" name="ok"/>
                            <?php
                            if(isset($_POST["ok"])) //kiem tra xem nguoi xu dung da bam vao nut "tai len" hay chua
                            {
                            if($_FILES["file"]["name"]!=NULL)
                            {

                            if($_FILES["file"]["type"]=="image/jpeg"
                            ||$_FILES["file"]["type"]=="image/png"
                            ||$_FILES["file"]["type"]=="image/gif"
                            )
                            {
                            if($_FILES["file"]["size"]>1048576)
                            {
                            echo "File is too heavy";
                            }

                            // kiem tra su ton tai cua file
                            elseif (file_exists("" . $_FILES["file"]["name"])) 
                            {
                            echo $_FILES["file"]["name"]." File already exists. ";
                            }

                            else{

                            $path = ""; // file luu vào thu muc chua file upload
                            $tmp_name = $_FILES['file']['tmp_name'];
                            $name = $_FILES['file']['name'];
                            $type = $_FILES['file']['type']; 
                            $size = $_FILES['file']['size']; 
                            // Upload file
                            move_uploaded_file($tmp_name,$path.$name);
                            echo "File uploaded! <br />";
                            echo "Tên file : ".$name."<br />";
                            echo "Kieu file : ".$type."<br />";
                            echo "File size : ".$size;
                            }
                            }
                            else {
                            echo "Invalid file";
                            }
                            }
                            else 
                            {
                            echo "Please select file";
                            }
                            }

                            ?>
                        </form>
                </div>
            
            </div>
            
            
            
        </div>
        
        
        

    <script>
            var text = document.getElementsByClassName("text");
            var text1 = document.getElementsByClassName("text1");
            var edits = document.getElementsByClassName("edit");
            for(let i=0;i<edits.length;i++){
                edits[i].addEventListener("click",function(){
                text1[i].style.display="none";
                text[i].style.display="block";
                })
            }


        
        $(document).ready(function() {
        $('.nav-btn').on('click', function(event) {
            event.preventDefault();
            /* Act on the event */
            $('.sidebar').slideToggle('fast');

            window.onresize = function(){
                if ($(window).width() >= 768) {
                    $('.sidebar').show();
                } else {
                    $('.sidebar').hide();
                }
            };
        });
        });
    </script>
</body>
</html>