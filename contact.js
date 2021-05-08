var notif = document.getElementById("notif");
var email = document.getElementById("mail");
var phoneNumber = document.getElementById("phonenum");
var fullname = document.getElementById("name");
var countWord = document.getElementById("count");
var nortimess = document.getElementById("nortimess");
var messenger = document.getElementById("mess");
var conpurpose = document.getElementById("purpose");
var preferemail = document.getElementById("smail");
var preferphone = document.getElementById("num");

function checkBlank() {
    if (
        !email.value ||
        !phoneNumber.value ||
        !fullname.value ||
        !messenger.value
    ) {
        notif.style.display = "block";
        notif.innerHTML = "Please fill in the all the blanks!";
        return false;
    } else if (conpurpose.selectedIndex == 0) {
        notif.style.display = "block";
        notif.innerHTML = "Please select your contact purpose!";
        return false;
    } else if (!preferemail.checked && !preferphone.checked) {
        notif.style.display = "block";
        notif.innerHTML = "Please select your preferred contact method!";
        return false;
    } else {
        notif.style.display = "none";
        return true;
    }
}

function checkMinMax(idText, minlength) {
    var inputText = document.getElementById(idText);
    var fiele = inputText.value;
    if (fiele.length < minlength) {
        notif.style.display = "block";
        notif.innerHTML = "Your name must have at least 3 characters!";
        return false;
    } else {
        notif.style.display = "none";
        return true;
    }
}

function checkPhoneNum() {
    var num = document.getElementById('phonenum')
    var pnum = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{3,5}$/
    if (num.value.match(pnum)) {
        notif.style.display = "none"
        return true
    } else {
        notif.style.display = "block"
        notif.innerHTML = "Please enter a valid phone number!"
        return false
    }
}

function checkEmail() {
    var emailLetter = /^([\w]|\.{3,})+([\.]?\w+)*@\w+([\.]?\w+)*(\.\w{2,5})+$/;
    if (email.value.match(emailLetter)) {
        notif.style.display = "none"
        return true
    } else {
        notif.style.display = "block"
        notif.innerHTML = " Please enter a valid email!"
        return false
    }
}

function checkboxes() {
    var checked = 0;
    //Reference the Table.
    var tblFruits = document.getElementById("contactday");
    //Reference all the CheckBoxes in Table.
    var chks = tblFruits.getElementsByTagName("input");
    //Loop and count the number of checked CheckBoxes.
    for (var i = 0; i < chks.length; i++) {
        if (chks[i].checked) {
            checked++;
        }
    }
    if (checked > 0) {
        notif.style.display = "none";
        return true;
    } else {
        notif.style.display = "block";
        notif.innerHTML = "Please select the day which you prefer!";
        return false;
    }
}

messenger.addEventListener("keyup", function () {
    var letter = messenger.value.split('');
    countWord.innerText = letter.length;
    if (letter.length < 500 && letter.length >= 50) {
        nortimess.innerHTML = "You can type " + (500 - letter.length) + " more letters";
    } else if (letter.length < 50 && letter.length >= 0) {
        nortimess.innerHTML = (50 - letter.length) + " more letters are required";
    } else if (letter.length > 500)
        nortimess.innerHTML = "Deleting " + letter.length + " letters is required";
});

function checkVali() {
    let valid = checkBlank() && checkMinMax("name", 3) && checkPhoneNum() && checkEmail() && checkboxes();
    if (valid) {
        alert("Your details have been sent.");
    } else {
        alert("Please check your details again!");
    }
};