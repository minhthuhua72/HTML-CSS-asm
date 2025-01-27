<?php
include "deleteInstall.php";
// Set variables 
$nortification1 = '';
$nortification2 = '';
$mail = '';
$phonenum = '';
$password = '';
$repassword = '';
$fname = '';
$lname = '';
$address = '';
$cities = '';
$zip = '';
$country = '';

// Function to clear the text
function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{

   // Check blank
   if(empty($_POST["mail"]) 
   || empty($_POST["fname"]) 
   || empty($_POST["lname"]) 
   || empty($_POST["password"]) 
   || empty($_POST["repassword"]) 
   || empty($_POST["phonenumber"]) 
   || empty($_POST["address"]) 
   || empty($_POST["cities"]) 
   || empty($_POST["zip"]) 
   || empty($_POST["countries"]) 
   || empty($_POST["type"]))
      {
         $nortification1 .= '<p id="nortification1">Please fill the blank</p>';
      }
   else
      {
          // Add value to the variables
         $mail = clean_text($_POST["mail"]);
         $fname = clean_text($_POST["fname"]);
         $lname = clean_text($_POST["lname"]);
         $password = clean_text($_POST["password"]);
         $repassword = clean_text($_POST["repassword"]);
         $phonenum = clean_text($_POST["phonenumber"]);
         $address = clean_text($_POST["address"]);
         $cities = clean_text($_POST["cities"]);
         $country = clean_text($_POST["countries"]);
         $zip = clean_text($_POST["zip"]);
         // Validation email
         if(!filter_var($mail, FILTER_VALIDATE_EMAIL))
         {
            $nortification1 .= '<p id="nortification1">Invalid email</p>';
         }
         // Validate first name
         if(!preg_match("/^[a-zA-Z ]*$/",$fname))
         {
            $nortification1 .= '<p id="nortification1">Only letters and white space allowed</p>';
         }
         // Validate last name
         if(!preg_match("/^[a-zA-Z ]*$/",$lname))
         {
            $nortification1 .= '<p id="nortification1">Only letters and white space allowed</p>';
         }
         // Validate password
         if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^\w]).{8,20}$/",$password))
         {
            $nortification1 .= '<p id="nortification1">Incorrect Password format</p>';
         }
         else
         {
            $h_password = password_hash($password, PASSWORD_DEFAULT); // Hash password
         }

         $h_repassword = password_hash($repassword, PASSWORD_DEFAULT); // Hash repassword
         // Validate repassword
         if($password !== $repassword)
        {
            $nortification1 .= '<p id="nortification1">Please retype the correct Password</p>';
        }
        // Validate phone number
        if(!preg_match("/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{3,5}$/",$phonenum))
        {
            $nortification1 .= '<p id="nortification1">Please enter the valid phone number</p>';
        }
        // Validate zip code
        if(!preg_match("/\d{4,6}/",$zip))
        {
            $nortification1 .= '<p id="nortification1">Please enter the valid phone number</p>';
        }
        // Check username and phone number are unique      
        // Open and write into the file
        $file_open1 = fopen("register.csv", "r");
        // Check username and phone number are unique      
        while(! feof($file_open1))
        {
            $row = fgetcsv($file_open1);
            if ($_POST['mail'] == $row[3])
            {
                $nortification1 .= '<p id="nortification1">Your email are already used !!</p>';
            }
            if($_POST['phonenumber'] == $row[4])
            {
                $nortification1 .= '<p id="nortification1">Your phone are already used !!</p>';
            }

        }
        fclose($file_open1);
    }

    // Check if the nortification is null, the code inside will be excecuted
   if($nortification1 == '')
      {
        // Open and write into the file
        $file_open = fopen("register.csv", "a");
         // Check row data add number row for it
         $no_rows = count(file("register.csv"));
         if($no_rows > 1)
            {
               $no_rows = ($no_rows - 1) + 1;
            }
         // Add data into the array 
         $form_data = array(
         'sr_no'  => $no_rows,
         'first_name' => $fname,
         'last_name'  => $lname,
         'email'  => $mail,
         'phone_number' => $phonenum,
         'password' => $h_password,
         'address' => $address,
         'city' => $cities,
         'zip' => $zip,
         'country' => $country
         );
         // Add array into the csv file
         fputcsv($file_open, $form_data);
         $mail = '';
         $phonenum = '';
         $password = '';
         $repassword = '';
         $fname = '';
         $lname = '';
         $address = '';
         $cities = '';
         $zip = '';
         $country = '';
         header("Location: login.php"); // head user if success the register process to the login page
      }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="register.css">
    <title>Register Account</title>
</head>

<body>
    <header>
        <!--Logo-->
        <a href="index.html" class="logo-name">
            <img class="logo" src="imgs/LOGO-01.png" alt="logo">
            <span>Shopeeverse</span>
        </a>
        <nav>
            <!-- Responsive Navbar-->
            <input type="checkbox" id="active">
            <label for="active">
                <i class="fa fa-bars" id="open"></i>
                <i class="fa fa-times" id="close"></i>
            </label>
            <ul>
                <li><a class="underline" href="index.html">Home</a></li>
                <li><a class="underline" href="AboutUs.html">About Us</a></li>
                <li class="browse">
                    <span id="browse-text"><a href="#">Browse</a></span>
                    <ul class="browse-dropdown">
                        <li class="browse-dropdown-info">
                            <a class="browse-links" href="browse-store-name-copy.html">Browse Stores by Name</a>
                        </li>
                        <li class="browse-dropdown-info">
                            <a class="browse-links" href="browse-store-category.html">Browse Stores by Category</a>
                        </li>
                    </ul>
                </li>
                <li><a class="underline" href="Contact.html">Contact</a></li>
                <li><a class="underline" href="Fees.html">Fees</a></li>
                <li><a class="underline" href="FAQs.html">FAQs</a></li>
                <li><a class="underline" id="account" href="MyAccount.html">My Account</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1><span class="vline">REGISTER</span></h1>
        
        <form method="POST" class = "RegistForm" action="register.php">
            <?php echo $nortification1 ?>
            <?php echo $nortification2 ?>
            <!-- input mail -->
            <div class="wrap-input150">
                <label for="mail" class="form-group">Email</label>
                <input class="input-design" type="email" id="mail" value="<?php echo $mail; ?>" name="mail" placeholder="Enter your email">
            </div>
            <!-- input phone num -->
            <div class="wrap-input150">
                <label for="phonenum" class="form-group">Phone Number</label>
                <input class="input-design" type="tel" id="phonenum" name="phonenumber" 
                    placeholder="Enter your phone number" value = '<?php echo $phonenum; ?>' >
            </div>
            <!-- input password -->
            <div class="wrap-input150">
                <label for="pw" class="form-group">Password</label>
                <input class="input-design" type="password" id="pw" value = "<?php echo $password; ?>" name="password" 
                    placeholder="Enter a password" >
            </div>
            <!-- retype pass -->
            <div class="wrap-input150">
                <label for="rpw" class="form-group">Retype Password</label>
                <input class="input-design" type="password" value = "<?php echo $repassword; ?>" id="rpw" name="repassword" 
                    placeholder="Retype your password" >
            </div>
            <!-- Add picture -->
            <div class="wrap-input150">
                <label class="form-group">Profile Picture</label>
                <input type="file" id="proimage" name="proimage">
            </div>
            <!-- input fname -->
            <div class="wrap-input150">
                <label for="fname" class="form-group">First Name</label>
                <input class="input-design" type="text" id="fname" value = "<?php echo $fname; ?>" name="fname" placeholder="Enter your first name"
                    >
            </div>
            <!-- input lname -->
            <div class="wrap-input150">
                <label for="lname" class="form-group">Last Name</label>
                <input class="input-design" type="text" id="<?php echo $lname; ?>" name="lname" placeholder="Enter your last name"
                    >
            </div>
            <!-- input address -->
            <div class="wrap-input150">
                <label for="address" class="form-group">Address</label>
                <input class="input-design" type="text" id="address" value = "<?php echo $address; ?>" name="address"
                    placeholder="Enter your home address" minlength = "3" >
            </div>
            <!-- city -->
            <div class="wrap-input150">
                <label for="cities" class="form-group">City</label>
                <input class="input-design" type="text" id="cities" value = "<?php echo $cities; ?>" name="cities" placeholder="Enter your city" minlength = "3"
                    >
            </div>
            <!-- zip code -->
            <div class="wrap-input150">
                <label for="zip" class="form-group">Zip Code</label>
                <input class="input-design" type="number" id="zip" name="zip" value = "<?php echo $zip; ?>"
                    placeholder="Enter your zip code" >
            </div>
            <!-- select countries -->
            <div class="wrap-input150">
                <label for="countries" class="form-group">Country</label>
                <select id="countries" name="countries" value = "<?php echo $country; ?>">
                    <option value="0" selected>Select your country</option>
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Åland Islands</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo</option>
                    <option value="CD">Congo, The Democratic Republic of The</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CI">Cote D'ivoire</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czechia</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands (Malvinas)</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard Island and Mcdonald Islands</option>
                    <option value="VA">Holy See (Vatican City State)</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran, Islamic Republic of</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KP">Korea, Democratic People's Republic of</option>
                    <option value="KR">Korea, Republic of</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Lao People's Democratic Republic</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libyan Arab Jamahiriya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macao</option>
                    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia, Federated States of</option>
                    <option value="MD">Moldova, Republic of</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="AN">Netherlands Antilles</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="MP">Northern Mariana Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PS">Palestinian Territory, Occupied</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">Reunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russian Federation</option>
                    <option value="RW">Rwanda</option>
                    <option value="SH">Saint Helena</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and The Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and The South Sandwich Islands</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syrian Arab Republic</option>
                    <option value="TW">Taiwan, Province of China</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania, United Republic of</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US">United States</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Viet Nam</option>
                    <option value="VG">Virgin Islands, British</option>
                    <option value="VI">Virgin Islands, U.S.</option>
                    <option value="WF">Wallis and Futuna</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                </select>
            </div>
            <!-- type -->
            <div class="wrap-input150">
                <label class="form-group">Account Type</label>
                <input type="radio" id="sowner" class="cc" name="type" value="storeowner" />
                <label for="sowner">Store Owner</label>
                <input type="radio" id="shopper" name="type" value="shopper" />
                <label for="shopper">Shopper</label>

                <!-- <form action="get" action="register.html"> -->
                    <fieldset class="ownerContent">
                        <legend><strong>These fields are only for Store Owner</strong></legend>

                        <label class="subContent" for="bname">Business Name:</label>
                        <input class="input-design" type="text" id='bname' name='bname'
                            placeholder="Enter your business name" >

                        <label class="subContent" for="sname">Store Name:</label>
                        <input class="input-design" type="text" id='sname' name='sname'
                            placeholder="Enter your store name" >

                        <label class="subContent" for="options">Store Category</label>
                        <select name="storecate" id="options">
                            <option value="0" selected>Select your store category</option>
                            <option value="1">Department store</option>
                            <option value="2">Grocery store</option>
                            <option value="3">Restaurant</option>
                            <option value="4">Clothing store</option>
                            <option value="5">Accessory store</option>
                            <option value="6">Pharmacies</option>
                            <option value="7">Technology store</option>
                            <option value="8">Pet store</option>
                            <option value="9">Specialty store</option>
                            <option value="10">Thrift store</option>
                            <option value="11">Service</option>
                            <option value="12">Kiosks</option>
                        </select>
                    </fieldset>
                <!-- </form> -->
            </div>
            <!-- button -->
            <div class="button-control">
                <input type="submit" value="Register" name="submit">
                <input type="reset" value="Clear">
            </div>
        </form>

    </main>
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
</body>

</html>