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
    <form class="aliments-form">
      <div class="form-group">
        <label for="select_aliment">Nom de l'aliment</label>
        <select class="form-control pl-3" id="select_aliment">
          <option>Aliment 1</option>
          <option>Aliment 2</option>
          <option>Aliment 3</option>
          <option>Aliment 4</option>
          <option>Aliment 5</option>
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
    <table class="table">
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
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Aliment 1</td>
          <td>16</td>
          <td>16</td>
          <td>16</td>
          <td>16</td>
          <td>
            <img class="crud-icon" src='/IDAW-projet/images/delete.svg' />
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Aliment 2</td>
          <td>16</td>
          <td>16</td>
          <td>16</td>
          <td>16</td>
          <td>
            <img class="crud-icon" src='/IDAW-projet/images/delete.svg' />
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Aliment 3</td>
          <td>16</td>
          <td>16</td>
          <td>16</td>
          <td>16</td>
          <td>
            <img class="crud-icon" src='/IDAW-projet/images/delete.svg' />
          </td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Aliment 4</td>
          <td>16</td>
          <td>16</td>
          <td>16</td>
          <td>16</td>
          <td>
            <img class="crud-icon" src='/IDAW-projet/images/delete.svg' />
          </td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Aliment 5</td>
          <td>16</td>
          <td>16</td>
          <td>16</td>
          <td>16</td>
          <td>
            <img class="crud-icon" src='/IDAW-projet/images/delete.svg' />
          </td>
        </tr>
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


</body>

</html>