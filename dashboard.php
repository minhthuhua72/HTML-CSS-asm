<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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