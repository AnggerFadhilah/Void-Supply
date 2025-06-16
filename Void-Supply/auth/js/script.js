var x = document.getElementById("login");
var y = document.getElementById("signup");
var z = document.getElementById("btn");
var f = document.getElementById("forgot-password");
var container = document.querySelector(".container");

// Ambil tombol login & signup
var loginBtn = document.querySelectorAll(".toggle-btn")[0];
var signupBtn = document.querySelectorAll(".toggle-btn")[1];

function setActiveButton(activeBtn, inactiveBtn) {
  activeBtn.classList.add("active");
  activeBtn.classList.remove("inactive");
  inactiveBtn.classList.remove("active");
  inactiveBtn.classList.add("inactive");
}

function showLogin() {
  x.style.left = "50px";
  y.style.left = "450px";
  f.style.left = "450px";
  z.style.left = "0";
  container.style.height = "550px";

  setActiveButton(loginBtn, signupBtn);
}

function showSignup() {
  x.style.left = "-400px";
  y.style.left = "50px";
  f.style.left = "450px";
  z.style.left = "110px";
  container.style.height = "550px";

  setActiveButton(signupBtn, loginBtn);
}

function showForgotPassword() {
  x.style.left = "-400px";
  y.style.left = "-400px";
  f.style.left = "50px";
  container.style.height = "400px";

  // Nonaktifkan semua tombol toggle saat forgot password muncul
  loginBtn.classList.remove("active");
  loginBtn.classList.add("inactive");
  signupBtn.classList.remove("active");
  signupBtn.classList.add("inactive");
}
