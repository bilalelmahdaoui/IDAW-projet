let backendurl = "http://localhost/IDAW-projet/backend/";
let selectedRow = null;
let formData = {};
$(document).ready(importData);

function importData() {
  console.log("hello");
  rowData = {};
  $.get(backendurl + "getAliments.php", function (dbAliments) {
    results = JSON.parse(dbAliments);
    results.forEach((row) => {
      rowData.id_aliment = row.id_aliment;
      rowData.nom_aliment = row.nom_aliment;
      rowData.calories = row.calories;
      rowData.eau = row.eau;
      rowData.proteines = row.proteines;
      rowData.glucides = row.glucides;
      insertData(rowData);
      rowData = {};
    });
  });
}

function readForm() {
  formData.nom_aliment = $("#nom_aliment").val();
  formData.calories = $("#calories").val();
  formData.eau = $("#eau").val();
  formData.proteines = $("#proteines").val();
  formData.glucides = $("#glucides").val();
  console.log(formData);
}

function insertData(data) {
  let table = document
    .getElementById("table_aliments")
    .getElementsByTagName("tbody")[0];
  let newRow = table.insertRow(table.length);
  let cells = {};

  cells["id_aliment"] = newRow.insertCell(0);
  cells["nom_aliment"] = newRow.insertCell(1);
  cells["calories"] = newRow.insertCell(2);
  cells["eau"] = newRow.insertCell(3);
  cells["proteines"] = newRow.insertCell(4);
  cells["glucides"] = newRow.insertCell(5);
  cells["crud"] = newRow.insertCell(6);

  cells["id_aliment"].innerHTML = data.id_aliment;
  cells["nom_aliment"].innerHTML = data.nom_aliment;
  cells["calories"].innerHTML = data.calories;
  cells["eau"].innerHTML = data.eau;
  cells["proteines"].innerHTML = data.proteines;
  cells["glucides"].innerHTML = data.glucides;
  cells[
    "crud"
  ].innerHTML = `<img onClick="onEditRow(this)" class="crud-icon" src='/IDAW-projet/images/edit.svg' />
  <img onClick="onDeleteRow(this)" class="crud-icon" src='/IDAW-projet/images/delete.svg' />`;
}

function resetForm() {
  document.getElementById("nom_aliment").value = "";
  document.getElementById("calories").value = "";
  document.getElementById("eau").checked = "";
  document.getElementById("proteines").value = "";
  document.getElementById("glucides").value = "";
  selectedRow = null;
}

function onEditRow(td) {
  selectedRow = td.parentElement.parentElement;
  document.getElementById("nom_aliment").value = selectedRow.cells[1].innerHTML;
  document.getElementById("calories").value = selectedRow.cells[2].innerHTML;
  document.getElementById("eau").value = selectedRow.cells[3].innerHTML;
  document.getElementById("proteines").value = selectedRow.cells[4].innerHTML;
  document.getElementById("glucides").value = selectedRow.cells[5].innerHTML;
}

function updateRow() {
  let table = document.getElementById("table_aliments");
  rowIndex = selectedRow.rowIndex;
  id_aliment = table.rows[rowIndex].cells[0].innerHTML;

  console.log("updateRow | id_aliment = " + id_aliment);
  console.log(formData);
  updateAlimentAjax(id_aliment);

  selectedRow.cells[1].innerHTML = formData.nom_aliment;
  selectedRow.cells[2].innerHTML = formData.calories;
  selectedRow.cells[3].innerHTML = formData.eau;
  selectedRow.cells[4].innerHTML = formData.proteines;
  selectedRow.cells[5].innerHTML = formData.glucides;
}

function updateAlimentAjax(id_aliment) {
  $.ajax({
    url: backendurl + "updateAliment.php",
    type: "POST",
    data:
      "id_aliment=" +
      id_aliment +
      "&nom_aliment=" +
      formData.nom_aliment +
      "&calories=" +
      formData.calories +
      "&eau=" +
      formData.eau +
      "&proteines=" +
      formData.proteines +
      "&glucides=" +
      formData.glucides,
    dataType: "application/json",
  });
}

function onDeleteRow(td) {
  if (confirm("Êtes-vous sûr de vouloir supprimer cet aliment ?")) {
    let table = document.getElementById("table_aliments");
    rowIndex = td.parentElement.parentElement.rowIndex;
    id_aliment = table.rows[rowIndex].cells[0].innerHTML;

    console.log("onDeleteRow | id_aliment = " + id_aliment);
    deleteAlimentAjax(id_aliment);
    document.getElementById("table_aliments").deleteRow(rowIndex);
    resetForm();
  }
}

function deleteAlimentAjax(id_aliment) {
  $.ajax({
    url: backendurl + "deleteAliment.php",
    type: "POST",
    data: "id_aliment=" + id_aliment,
    dataType: "application/json",
  });
}

function addAlimentAjax() {
  $.ajax({
    url: backendurl + "addAliment.php",
    type: "POST",
    data:
      "nom_aliment=" +
      formData.nom_aliment +
      "&calories=" +
      formData.calories +
      "&eau=" +
      formData.eau +
      "&proteines=" +
      formData.proteines +
      "&glucides=" +
      formData.glucides,
    dataType: "application/json",
  });
}

function onFormSubmit() {
  event.preventDefault();
  readForm();
  if (selectedRow == null) {
    console.log("added!");
    insertData(formData);
    addAlimentAjax();
  } else {
    console.log("edited!");
    updateRow();
  }
  resetForm();
}
