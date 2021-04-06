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
        <li class="nav-item active">
          <a class="nav-link" href="journal.php"> Journal
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aliments.php">Aliments</a>
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
      <h1 class="mt-5">Mon journal </h1>
      <p class="lead">Ici, vous trouvez le journal de vos consommations</p>
      <p class="lead">Vous pouvez enregistrer une nouvelle consommation en utilisant le formulaire ci-dessous!</p>
    </div>
  </div>

  <div class="form-container">
    <form class="aliments-form" onsubmit="onFormSubmit();">
      <div class="form-group">
        <label for="select_aliment">Nom de l'aliment</label>
        <select class="form-control pl-3" id="select_aliment">
        </select>
      </div>

      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" id="date" value=<?php echo date("Y-m-d"); ?>>
      </div>
      <button type="submit" class="btn btn-dark float-right rounded">Ajouter</button>
    </form>
  </div>

  <div class="container-table100">
    <table class="table" id="table_journal">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Aliment</th>
          <th scope="col">Date</th>
          <th scope="col"></th>
  </div>
  </th>
  <th scope="col"></th>
  </tr>
  </thead>
  <tbody>
  </tbody>
  </table>
</div>
</div>



<div class="limiter">

</div>


<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/journalScript.js"></script>


</body>

</html>