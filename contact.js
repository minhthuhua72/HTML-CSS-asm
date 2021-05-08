var email = document.getElementById("mail");
var phoneNumber = document.getElementById("phonenum");
var fullname = document.getElementById("name");
var thongBao = document.getElementById("thongBao");
var countWord = document.getElementById("count");
var nortimess = document.getElementById("nortimess");
var conday = document.getElementById("contact-day");
var messenger = document.getElementById("mess");
var conpurpose = document.getElementById("purpose");
var preferemail = document.getElementById("smail");
var preferphone = document.getElementById("num");
function checkBlank() {
    console.log(email.value, !email.value);
    if (
        !email.value ||
        !phoneNumber.value ||
        !fullname.value ||
        !messenger.value
    ) {

        thongBao.style.display = "block";
        thongBao.innerHTML = "Please fill in the blanks!!!" + "<br/>";
        return false;
    } else if (conpurpose.selectedIndex == 0) {
        thongBao.style.display = "block";

        thongBao.innerHTML = "Please select your contact purpose!!!" + "<br/>";
        return false;

    } else if (!preferemail.checked && !preferphone.checked) {
        thongBao.style.display = "block";

        thongBao.innerHTML = "Please select Preferred contact method!!!" + "<br/>";
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

function checkPhoneNum(){
    var num = document.getElementById('phonenum')
    var pnum = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{3,5}$/
    if (num.value.match(pnum)){
      thongBao.style.display="none"
      return true
    }else{
      thongBao.style.display= "block"
      thongBao.innerHTML="Please enter a valid phone number!!!"
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
function checkboxes() {
    var checked = 0;

    //Reference the Table.
    var tblFruits = document.getElementById("contactday");

    //Reference all the CheckBoxes in Table.
    var chks = tblFruits.getElementsByTagName("INPUT");

    //Loop and count the number of checked CheckBoxes.
    for (var i = 0; i < chks.length; i++) {
        if (chks[i].checked) {
            checked++;
        }
    }

    if (checked > 0) {
        thongBao.style.display = "none";
        return true;
    } else {
        thongBao.style.display = "block";
        thongBao.innerHTML = "Please select the day which you refer!!!";        
        return false;
    }
}
messenger.addEventListener("keyup",function(){
    var letter = messenger.value.split('');
    countWord.innerText = letter.length;
    if (letter.length < 500 && letter.length >= 50){
        nortimess.innerHTML ="You can type " + (500-letter.length) + " more letters";
    }
    else if (letter.length < 50 && letter.length >= 0){
        nortimess.innerHTML = (50 - letter.length) + " more letters are needed";
    }
    else if (letter.length > 500)
        nortimess.innerHTML = "Deleting "  + letter.length + " letters is needed";
}); 

function checkVali() {
    return checkBlank() && checkMinMax("name", 3) && checkPhoneNum() && checkEmail() && checkboxes() 
};