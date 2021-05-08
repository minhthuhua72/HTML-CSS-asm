function location1() {
    window.location.href = "logged-in.html";
}
// check password for log in
function onFormSubmit() {
    var password = document.getElementById("pww").value;
    var email = document.getElementById("mail");
    var emailLetter = /^([\w]|\.{3,})+([\.]?\w+)*@\w+([\.]?\w+)*(\.\w{2,5})+$/;

    if (email.value.match(emailLetter) && password == "password") {
        location1();
    }
    
    else {
        alert("Log in fail!!!")
    }
}
