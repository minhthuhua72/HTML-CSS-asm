function modalWindowThu() {
  var modal = document.getElementById("thuModal");
  modal.style.display = "block";
  window.onclick = function (event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }

  var span = document.getElementsByClassName("close")[0];
  span.onclick = function () {
      modal.style.display = "none";
  }
}


function modalWindowHoang() {
  let modal = document.getElementById("hoangModal");
  modal.style.display = "block";
  window.onclick = function (event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }

  let span = document.getElementsByClassName("close")[1];
  span.onclick = function () {
      modal.style.display = "none";
  }
}

function modalWindowDung(){
  let modal = document.getElementById("dungModal");
  modal.style.display = "block";
  window.onclick = function (event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }

  let span = document.getElementsByClassName("close")[2];
  span.onclick = function () {
      modal.style.display = "none";
  }
}

function modalWindowNgan(){
  let modal = document.getElementById("nganModal");
  modal.style.display = "block";
  window.onclick = function (event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }

  let span = document.getElementsByClassName("close")[3];
  span.onclick = function () {
      modal.style.display = "none";
  }
}