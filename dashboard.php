<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
<header>

	<div class="logo">Xero<span>Source</span></div>
	</header>

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
                <!--News-->
				<h4 class="panel-head" id="h1">News</h4>	
				<div class="panel-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam fugiat culpa quia possimus molestiae id sapiente ad eveniet, aliquid, eum sint fuga eius, ratione suscipit ut minus voluptates dicta nesciunt. Totam fugiat culpa quia possimus molestiae id sapiente ad eveniet, aliquid, eum sint fuga eius, ratione suscipit ut minus voluptates dicta nesciunt.
				</div>
			</div>
            
        </div>
        <div id="copy" class="main-content">
            <div class="panel-wrapper">
                <h4 class="panel-head">Copyright</h4>	
				<div class="panel-body">
                    <form  method = "post" >
                    <?php
                        if(isset($_POST['submitData'])){
                            $content1 = $_POST['text'];
                            $path = "content.txt";
                            file_put_contents($path,$content1);
                        }
                        ?>
                        <label for="sect">Section:</label>
                        <select name="section" id="sect" >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                        
                        <?php
                        $path = 'content.txt';
                        $file= file_get_contents($path);
                        $content = explode(" - ", $file);
                        echo '<p class="text1" style= "border: solid 1px;margin-right: 774px;margin-top: 10px;">'.$content[0].'</p>'
                            ;
                        ?>
                        <textarea name="text" class="text" cols="100" rows="10">Edited content</textarea>
                        <div class="btns">
                            <p id="buttonEdit0" class="edit">Edit</p>
                            <butto id="submitData0" name="submitData">Update</button>
                        </div>
                    </form>
                
                
				</div>

			</div>
        </div>
        <div id="tos" class="main-content">
            <div class="panel-wrapper">
                <h4 class="panel-head">Term of Service</h4>	
				<div class="panel-body">
                    <form  method = "post" >
                    <?php
                        if(isset($_POST['submitData'])){
                            $content1 = $_POST['text'];
                            $path = "content.txt";
                            file_put_contents($path,$content1);
                        }
                        ?>
                        <label for="sect">Section:</label>
                        <select name="section" id="sect" >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                        
                        <?php
                        $path = 'content.txt';
                        $file= file_get_contents($path);
                        $content = explode(" - ", $file);
                        echo '<p class="text1" style= "border: solid 1px;margin-right: 774px;margin-top: 10px;">'.$content[0].'</p>'
                            ;
                        ?>
                        <textarea name="text" class="text" cols="100" rows="10">Edited content</textarea>
                        <div class="btns">
                            <p id="buttonEdit1" class="edit">Edit</p>
                            <butto id="submitData1" name="submitData">Update</button>
                        </div>
                    </form>
                
                
				</div>

			</div>
        </div>
        <div id="privacy" class="main-content">
            <div class="panel-wrapper">
                <h4 class="panel-head">Privacy Policy</h4>	
				<div class="panel-body">
                    <form  method = "post" >
                    <?php
                        if(isset($_POST['submitData'])){
                            $content1 = $_POST['text'];
                            $path = "content.txt";
                            file_put_contents($path,$content1);
                        }
                        ?>
                        <label for="sect">Section:</label>
                        <select name="section" id="sect" >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                        
                        <?php
                        $path = 'content.txt';
                        $file= file_get_contents($path);
                        $content = explode(" - ", $file);
                        echo '<p class="text1" style= "border: solid 1px;margin-right: 774px;margin-top: 10px;">'.$content[0].'</p>'
                            ;
                        ?>
                        <textarea name="text" class="text" cols="100" rows="10">Edited content</textarea>
                        <div class="btns">
                            <p id="buttonEdit" class="edit">Edit</p>
                            <butto id="submitData" name="submitData">Update</button>
                        </div>
                    </form>
                
                
				</div>

			</div>
        </div>
        <div id="aboutUs" class="main-content">
            <!--First member-->
            <div class="panel-wrapper" >
                <h4 class="panel-head">Hua Minh Thu</h4>
                <div class="panel-body" >
                    <form  method=POST enctype="multipart/form-data" >
                        <label for="file" >Choose file: </label>
                        <input id="file" type="file" name="file"/><br>
                        <input class="submitBtn" type="submit" value="Upload" name="upload"/>
                        <?php
                        if(isset($_POST["ok"])) {
                            if($_FILES["file"]["name"] != NULL) {
                                if($_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"]=="image/png" || $_FILES["file"]["type"]=="image/gif") {
                                    if($_FILES["file"]["size"]>1048576) {
                                        echo "File is too heavy";
                                    } elseif (file_exists("" . $_FILES["file"]["name"])) {
                                        echo $_FILES["file"]["name"]." File already exists. ";
                                    } else {
                                    $path = ""; 
                                    $tmp_name = $_FILES['file']['tmp_name'];
                                    $name = $_FILES['file']['name'];
                                    $type = $_FILES['file']['type']; 
                                    $size = $_FILES['file']['size']; 
                                    // Upload file
                                    move_uploaded_file($tmp_name,$path.$name);
                                    echo "File uploaded! <br />";
                                    echo "File name: ".$name."<br />";
                                    echo "File type: ".$type."<br />";
                                    echo "File size : ".$size;
                                    } 
                                } else {
                                    echo "Invalid file";
                                }
                            } else {
                                echo "Please select file";
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>

            <!--Second member-->
            <div class="panel-wrapper" >
                <h4 class="panel-head">Hoang Ngoc Tuan</h4>
                <div class="panel-body" >
                    <form  method=POST enctype="multipart/form-data" >
                        <label for="file">Choose file: </label>
                        <input id="file" type="file" name="file"/><br>
                        <input class="submitBtn" type="submit" value="Upload" name="upload"/>
                        <?php
                        if(isset($_POST["ok"])) {
                            if($_FILES["file"]["name"] != NULL) {
                                if($_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"]=="image/png" || $_FILES["file"]["type"]=="image/gif") {
                                    if($_FILES["file"]["size"]>1048576) {
                                        echo "File is too heavy";
                                    } elseif (file_exists("" . $_FILES["file"]["name"])) {
                                        echo $_FILES["file"]["name"]." File already exists. ";
                                    } else {
                                    $path = ""; 
                                    $tmp_name = $_FILES['file']['tmp_name'];
                                    $name = $_FILES['file']['name'];
                                    $type = $_FILES['file']['type']; 
                                    $size = $_FILES['file']['size']; 
                                    // Upload file
                                    move_uploaded_file($tmp_name,$path.$name);
                                    echo "File uploaded! <br />";
                                    echo "File name: ".$name."<br />";
                                    echo "File type: ".$type."<br />";
                                    echo "File size : ".$size;
                                    } 
                                } else {
                                    echo "Invalid file";
                                }
                            } else {
                                echo "Please select file";
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>

            <!--Third member-->
            <div class="panel-wrapper" >
                <h4 class="panel-head">Nguyen Hoang Dung</h4>
                <div class="panel-body" >
                    <form  method=POST enctype="multipart/form-data" >
                        <label for="file">Choose file: </label>
                        <input id="file" type="file" name="file"/><br>
                        <input class="submitBtn" type="submit" value="Upload" name="upload"/>
                        <?php
                        if(isset($_POST["ok"])) {
                            if($_FILES["file"]["name"] != NULL) {
                                if($_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"]=="image/png" || $_FILES["file"]["type"]=="image/gif") {
                                    if($_FILES["file"]["size"]>1048576) {
                                        echo "File is too heavy";
                                    } elseif (file_exists("" . $_FILES["file"]["name"])) {
                                        echo $_FILES["file"]["name"]." File already exists. ";
                                    } else {
                                    $path = ""; 
                                    $tmp_name = $_FILES['file']['tmp_name'];
                                    $name = $_FILES['file']['name'];
                                    $type = $_FILES['file']['type']; 
                                    $size = $_FILES['file']['size']; 
                                    // Upload file
                                    move_uploaded_file($tmp_name,$path.$name);
                                    echo "File uploaded! <br />";
                                    echo "File name: ".$name."<br />";
                                    echo "File type: ".$type."<br />";
                                    echo "File size : ".$size;
                                    } 
                                } else {
                                    echo "Invalid file";
                                }
                            } else {
                                echo "Please select file";
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>

             <!--Fourth member-->
             <div class="panel-wrapper" >
                <h4 class="panel-head">Phan Luu Thien Ngan</h4>
                <div class="panel-body" >
                    <form  method=POST enctype="multipart/form-data" >
                        <label for="file">Choose file: </label>
                        <input id="file" type="file" name="file"/><br>
                        <input class="submitBtn" type="submit" value="Upload" name="upload"/>
                        <?php
                        if(isset($_POST["ok"])) {
                            if($_FILES["file"]["name"] != NULL) {
                                if($_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"]=="image/png" || $_FILES["file"]["type"]=="image/gif") {
                                    if($_FILES["file"]["size"]>1048576) {
                                        echo "File is too heavy";
                                    } elseif (file_exists("" . $_FILES["file"]["name"])) {
                                        echo $_FILES["file"]["name"]." File already exists. ";
                                    } else {
                                    $path = ""; 
                                    $tmp_name = $_FILES['file']['tmp_name'];
                                    $name = $_FILES['file']['name'];
                                    $type = $_FILES['file']['type']; 
                                    $size = $_FILES['file']['size']; 
                                    // Upload file
                                    move_uploaded_file($tmp_name,$path.$name);
                                    echo "File uploaded! <br />";
                                    echo "File name: ".$name."<br />";
                                    echo "File type: ".$type."<br />";
                                    echo "File size : ".$size;
                                    } 
                                } else {
                                    echo "Invalid file";
                                }
                            } else {
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