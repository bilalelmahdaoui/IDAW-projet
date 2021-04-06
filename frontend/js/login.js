let backendurl = "http://localhost/IDAW-projet/backend/";
let loginFormData = {};
let nextId = null;
let login = "bilalelmahdaoui";
let user = {};
$(document).ready(importData);

function importData() {
  console.log("ready");
  rowData = {};
  $.ajax({
    url: backendurl + "getJournal.php",
    type: "post",
    dataType: "JSON",
    data: "login=" + login,
    success: function (results) {
      results.forEach((row) => {
        rowData.id_aliment = row.id_aliment;
        rowData.select_aliment = row.nom_aliment;
        rowData.date = row.date;
        insertData(rowData);
        rowData = {};
      });
    },
  });
  $.ajax({
    url: backendurl + "getAlimentsForSelect.php",
    type: "post",
    dataType: "JSON",
    success: function (results) {
      results.forEach((row) => {
        insertSelectData(row.id_aliment, row.nom_aliment);
      });
    },
  });
  /* if (nextData != null) {
    console.log(JSON.stringify(nextData));
    //console.log(nextData.nextId);
  }
  $.get(backendurl + "getJournal.php", function (dbAliments) {
    results = JSON.parse(dbAliments);
    results.forEach((row) => {
      rowData.id_aliment = row.id_aliment;
      rowData.select_aliment = row.select_aliment;
      rowData.date = row.date;
      insertData(rowData);
      rowData = {};
    });
  }); */
  /* getNextAlimentId();
  console.log(nextId); */
}

/* function getNextAlimentId() {
  nextData = {};
  $.ajax({
    url: backendurl + "getNextAlimentID.php",
    type: "get",
    dataType: "JSON",
    success: function (response) {
      nextData.nextId = response.max_id_aliment;
    },
  });
  if (nextData != null) {
    console.log(JSON.stringify(nextData));
    //console.log(nextData.nextId);
  }
}
 */
function readLoginForm() {
  loginFormData.login = $("#login").val();
  loginFormData.password = $("#password").val();
  loginFormData.remember_me = $("#remember_me").prop("checked");
  console.log(loginFormData);
}

function insertSelectData(id_aliment, nom_aliment) {
  $("#select_aliment").append(new Option(nom_aliment, id_aliment));
}

function insertData(data) {
  let table = document
    .getElementById("table_journal")
    .getElementsByTagName("tbody")[0];
  let newRow = table.insertRow(table.length);
  let cells = {};

  cells["id_aliment"] = newRow.insertCell(0);
  cells["select_aliment"] = newRow.insertCell(1);
  cells["date"] = newRow.insertCell(2);
  cells["crud"] = newRow.insertCell(3);

  cells["id_aliment"].innerHTML = data.id_aliment;
  cells["select_aliment"].innerHTML = data.select_aliment;
  cells["date"].innerHTML = data.date;
  cells[
    "crud"
  ].innerHTML = `<img onClick="onDeleteRow(this)" class="crud-icon" src='/IDAW-projet/images/delete.svg' />`;
}

function resetForm() {
  //document.getElementById("select_aliment").value = "";
  document.getElementById("date").value = "";
}

function onDeleteRow(td) {
  if (confirm("Êtes-vous sûr de vouloir supprimer cet enregistrement ?")) {
    let table = document.getElementById("table_journal");
    rowIndex = td.parentElement.parentElement.rowIndex;
    id_aliment = table.rows[rowIndex].cells[0].innerHTML;

    console.log("onDeleteRow | id_aliment = " + id_aliment);
    deleteAlimentAjax(id_aliment);
    document.getElementById("table_journal").deleteRow(rowIndex);
    resetForm();
  }
}

function deleteAlimentAjax(id_aliment) {
  $.ajax({
    url: backendurl + "deleteConsommation.php",
    type: "POST",
    data: "id_aliment=" + id_aliment + "&login=" + login,
    dataType: "application/json",
  });
}

function addAlimentAjax() {
  $.ajax({
    url: backendurl + "addConsommation.php",
    type: "POST",
    data:
      "id_aliment=" +
      loginFormData.id_aliment +
      "&date=" +
      loginFormData.date +
      "&login=" +
      login, // to be changed
    dataType: "application/json",
  });
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
        console.log("logged in!");
      } else {
        console.log("not logged in!");
      }
      /*  if () console.log();
      else console.log("hhhh"); */
    },
  });
}

function displayLoginError() {}
