<?php
require_once('header.php');
?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">iMangerMieux</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="acceuil.php">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="journal.php"> Journal</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="aliments.php">Aliments
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile">Profile</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1 class="mt-5">Aliments disponibles</h1>
      <p class="lead">Ici, vous trouvez tous les aliments disponibles dans iMangerMieux</p>
      <p class="lead">Vous pouvez ajouter autres aliments personnalisés en utilisant le formulaire ci-dessous!</p>
    </div>
  </div>

  <div id="crudAlimentsForm" onsubmit="onFormSubmit();" class="form-container">
    <form class="aliments-form">
      <div class="form-group">
        <label for="nom_aliment">Nom de l'aliment</label>
        <input type="text" class="form-control" id="nom_aliment" placeholder="Nom de l'aliment...">
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="calories">Calories (Kcal/100mg)</label>
          <input type="number" class="form-control" id="calories">
        </div>
        <div class="form-group col-md-6">
          <label for="eau">Eau (g/100mg)</label>
          <input type="number" class="form-control" id="eau">
        </div>
        <div class="form-group col-md-6">
          <label for="proteines">Protéines (g/100mg)</label>
          <input type="number" class="form-control" id="proteines">
        </div>
        <div class="form-group col-md-6">
          <label for="glucides">Glucides (g/100mg)</label>
          <input type="number" class="form-control" id="glucides">
        </div>
      </div>
      <button type="submit" class="btn btn-dark float-right rounded">Ajouter</button>
    </form>
  </div>

  <div class="container-table100">
    <table class="table" id="table_aliments">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Aliment</th>
          <th scope="col">Calories <div class="tab-subtitle">(kCal/100mg)</div>
          </th>
          <th scope="col">Eau <div class="tab-subtitle">(kCal/100mg)</div>
          </th>
          <th scope="col">Protéines <div class="tab-subtitle">(kCal/100mg)</div>
          </th>
          <th scope="col">Glucides <div class="tab-subtitle">(kCal/100mg)</div>
          </th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>

</div>


<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/script.js"></script>


</body>

</html>