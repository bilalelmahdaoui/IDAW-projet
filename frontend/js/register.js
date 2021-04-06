let backendurl = "http://localhost/IDAW-projet/backend/";
let registerFormData = {};
let nextId = null;
let newLogin = "";
let user = {};

function readRegisterForm() {
  registerFormData.newLogin = $("#newLogin").val();
  registerFormData.newPassword = $("#newPassword").val();
  registerFormData.nom = $("#nom").val();
  registerFormData.prenom = $("#prenom").val();
  registerFormData.sexe = $("#sexe").val();
  registerFormData.date_naissance = $("#date_naissance").val();
  console.log(registerFormData);
}

function onRegisterSubmit() {
  event.preventDefault();
  readRegisterForm();
  addUserToDb();
}

function addUserToDb() {
  $.ajax({
    url: backendurl + "addUser.php",
    type: "post",
    dataType: "JSON",
    data:
      "login=" +
      registerFormData.newLogin +
      "&password=" +
      registerFormData.newPassword +
      "&nom=" +
      registerFormData.nom +
      "&prenom=" +
      registerFormData.prenom +
      "&date_naissance=" +
      registerFormData.date_naissance +
      "&sexe=" +
      registerFormData.sexe,
    success: function (error) {
      if (!error) register();
      else displayRegistrationError();
    },
  });
}

function register() {
  console.log("registration");
  s;
}

function displayRegistrationError() {
  console.log("error");
}
