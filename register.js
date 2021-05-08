var email = document.getElementById("mail");
var phoneNumber = document.getElementById("phonenum");
var password = document.getElementById("pw");
var repassword = document.getElementById("rpw");
var fname = document.getElementById("fname");
var lname = document.getElementById("lname");
var address = document.getElementById("address");
var cities = document.getElementById("cities");
var zip = document.getElementById("zip");
var thongBao = document.getElementById("thongBao");
var countries = document.getElementById("countries");
var owner = document.getElementById("sowner");
var shopper = document.getElementById("shopper");
var bName = document.getElementById("bname");
var sName = document.getElementById("sname");
var category = document.getElementById("sc");
function checkBlank() {
  console.log(email.value, !email.value);
  if (
    !email.value ||
    !phoneNumber.value ||
    !password.value ||
    !repassword.value ||
    !fname.value ||
    !lname.value ||
    !address.value ||
    !cities.value ||
    !zip.value
  ) {

    thongBao.style.display = "block";
    thongBao.innerHTML = "Please fill in the blanks!!!" + "<br/>";
    return false;
  } else if (countries.selectedIndex == 0) {
    thongBao.style.display = "block";

    thongBao.innerHTML = "Please select your country!!!" + "<br/>";
    return false;
  } else if (!owner.checked && !shopper.checked) {
    thongBao.style.display = "block";

    thongBao.innerHTML = "Please select Account type!!!" + "<br/>";
    return false;
  } else {
    
    thongBao.style.display = "none";
    return true;
  }
}

function checkMinMax(idText, minlength) {
  var inputText = document.getElementById(idText);
  var fiele = inputText.value;
  if (fiele.length < minlength) {
    thongBao.style.display = "block";
    thongBao.innerHTML = "Please enter at least 3 characters ";
    return false;
  } else {
    thongBao.style.display = "none";
    return true;
  }
}

function checkMinMaxZip(idZip, minlength, maxlength) {
  var inputZip = document.getElementById(idZip);
  var fieleZip = inputZip.value;
  if (fieleZip.length < minlength || fieleZip.length > maxlength) {
    zip.style.border = "solid 2px red";

    thongBao.style.display = "block";
    thongBao.innerHTML = "Please Zip Code contain 4 to 6 digits. ";
    return false;
  } else {
    thongBao.style.display = "none";
    return true;
  }
}
function checkPassword(){
  var password =document.getElementById('pw')
  var passwordLetter = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^\w]).{8,20}$/;
  if (password.value.match(passwordLetter)){
      thongBao.style.display="none"
      return true
  }else{
      thongBao.style.display= "block"
      thongBao.innerHTML=" Please enter a valid password!!!"
      return false
  }   
}
function checkRePassword(){
    if(password.value == repassword.value){
        thongBao.style.display = "none";
        return true;
        
    }else{
        thongBao.style.display = "block";
        thongBao.innerHTML = "Please correct your repassword ";
        return false
    }
}
function checkEmail(){
  var email = document.getElementById('mail')
  var emailLetter = /^([\w]|\.{3,})+([\.]?\w+)*@\w+([\.]?\w+)*(\.\w{2,5})+$/;
  if (email.value.match(emailLetter)){
      thongBao.style.display="none"
      return true
  }else{
      thongBao.style.display= "block"
      thongBao.innerHTML=" Please enter a valid email!!!"
      return false
}
}


function checkVali() {
    return checkBlank() &&
    checkEmail() &&
    checkPassword() &&
    checkRePassword() &&
    checkMinMax("fname", 3) &&
    checkMinMax("lname", 3) &&
    checkMinMax("address", 3) &&
    checkMinMax("cities", 3) &&
    checkMinMaxZip("zip", 4, 6)    
  }