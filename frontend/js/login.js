let backendurl = "http://localhost/IDAW-projet/backend/";
let loginFormData = {};
let nextId = null;
let login = "bilalelmahdaoui";
let user = {};

function readLoginForm() {
  loginFormData.login = $("#login").val();
  loginFormData.password = $("#password").val();
  loginFormData.remember_me = $("#remember_me").prop("checked");
}

function onLoginSubmit() {
  event.preventDefault();
  readLoginForm();
  if (validCredentials()) {
    login();
  } else {
    displayLoginError();
  }
}

function validCredentials() {
  $.ajax({
    url: backendurl + "getUser.php",
    type: "post",
    dataType: "JSON",
    data:
      "login=" + loginFormData.login + "&password=" + loginFormData.password,
    success: function (results) {
      if (results.login == loginFormData.login) {
        user = { ...results };
      } else {
        user = {};
      }
    },
  });
}

function displayLoginError() {}

function login() {
  location.href = backendurl + "aliments.php";
}
