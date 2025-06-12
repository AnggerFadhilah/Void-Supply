var x = document.getElementById("login");
var y = document.getElementById("signup");
var z = document.getElementById("btn");
var f = document.getElementById("forgot-password");
var container = document.querySelector(".container"); // Get the container

function showLogin() {
  x.style.left = "50px";
  y.style.left = "450px";
  f.style.left = "450px"; // Hide forgot password form
  z.style.left = "0";
  container.style.height = "550px"; // Reset container height for login/signup
}

function showSignup() {
  x.style.left = "-400px";
  y.style.left = "50px";
  f.style.left = "450px"; // Hide forgot password form
  z.style.left = "110px";
  container.style.height = "550px"; // Reset container height for login/signup
}

function showForgotPassword() {
  x.style.left = "-400px"; // Hide login form
  y.style.left = "-400px"; // Hide signup form
  f.style.left = "50px"; // Show forgot password form
  container.style.height = "400px"; // Adjust container height for forgot password
}
