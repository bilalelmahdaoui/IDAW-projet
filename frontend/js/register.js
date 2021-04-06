let backendurl = "http://localhost/IDAW-projet/backend/";
let registerFormData = {};
let nextId = null;
let login = "bilalelmahdaoui";
let user = {};
$(document).ready(importData);

function readRegisterForm() {
  registerFormData.login = $("#login").val();
  registerFormData.password = $("#password").val();
  registerFormData.nom = $("#nom").val();
  registerFormData.prenom = $("#prenom").val();
  registerFormData.sexe = $("#sexe").val();
  console.log(registerFormData);
}

function onRegisterSubmit() {
  event.preventDefault();
  readLoginForm();
  if (addUserToDb()) {
    register();
  } else {
    displayRegistrationError();
  }
}

function addUserToDb() {
  $.ajax({
    url: backendurl + "addUser.php",
    type: "post",
    dataType: "JSON",
    data:
      "login=" +
      registerFormData.login +
      "&password=" +
      registerFormData.password +
      "&nom=" +
      registerFormData.nom +
      "&prenom=" +
      registerFormData.prenom +
      "&sexe=" +
      registerFormData.sexe,
    success: function (results) {
      if (results.login == registerFormData.login) {
        console.log("logged in!");
        user = { ...results };
        console.log({ user: user });
      } else {
        console.log("invalid credentials!");
        user = {};
      }
      /*  if () console.log();
      else console.log("hhhh"); */
    },
  });
}

function displayRegistrationError() {}
