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
          <th scope="col">Edit</th>
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
            <img class="crud-icon" src='/IDAW-projet/images/edit.svg' />
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
            <img class="crud-icon" src='/IDAW-projet/images/edit.svg' />
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
            <img class="crud-icon" src='/IDAW-projet/images/edit.svg' />
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
            <img class="crud-icon" src='/IDAW-projet/images/edit.svg' />
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
            <img class="crud-icon" src='/IDAW-projet/images/edit.svg' />
            <img class="crud-icon" src='/IDAW-projet/images/delete.svg' />
          </td>
        </tr>
      </tbody>
    </table>
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
    <button type="submit" class="btn rounded form-button float-right">Ajouter</button>
  </form>
</div>

<div class="limiter">
  <div class="container-table100">
    <div class="wrap-table100">
      <div class="table100 ver1">
        <div class="table100-firstcol">
          <table>
            <thead class="table-head">
              <tr class="row100 head">
                <th class="cell100 column1">Nom de l'aliment</th>
              </tr>
            </thead>
            <tbody>
              <tr class="row100 body">
                <td class="cell100 column1">Aliment 1</td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1">Aliment 2</td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1">Aliment 3</td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1">Aliment 4</td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1">Aliment 5</td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1">Aliment 6</td>
              </tr>

              <tr class="row100 body">
                <td class="cell100 column1">Aliment 7</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="wrap-table100-nextcols js-pscroll">
          <div class="table100-nextcols">
            <table>
              <thead class="table-head">
                <tr class="row100 head">
                  <th class="cell100 column2">Calories <span class="fs-10">(kCal/100mg)</span></th>
                  <th class="cell100 column3">Eau <span class="fs-10">(g/100mg)</span></th>
                  <th class="cell100 column4">Protéines <span class="fs-10">(g/100mg)</span></th>
                  <th class="cell100 column5">Glucides <span class="fs-10">(g/100mg)</span></th>
                  <th class="cell100 column6">Edit</th>
                </tr>
              </thead>
              <tbody>
                <tr class="row100 body">
                  <td class="cell100 column2">16</td>
                  <td class="cell100 column3">16</td>
                  <td class="cell100 column4">16</td>
                  <td class="cell100 column5">16</td>
                  <td class="cell100 column5">
                    <img class="crud-icon" src='/IDAW-projet/images/edit.svg' />
                    <img class="crud-icon" src='/IDAW-projet/images/delete.svg' />
                  </td>
                </tr>

                <tr class="row100 body">
                  <td class="cell100 column2">16</td>
                  <td class="cell100 column3">16</td>
                  <td class="cell100 column4">16</td>
                  <td class="cell100 column5">16</td>
                  <td class="cell100 column5">
                    <img class="crud-icon" src='/IDAW-projet/images/edit.svg' />
                    <img class="crud-icon" src='/IDAW-projet/images/delete.svg' />
                  </td>
                </tr>

                <tr class="row100 body">
                  <td class="cell100 column2">16</td>
                  <td class="cell100 column3">16</td>
                  <td class="cell100 column4">16</td>
                  <td class="cell100 column5">16</td>
                  <td class="cell100 column5">
                    <img class="crud-icon" src='/IDAW-projet/images/edit.svg' />
                    <img class="crud-icon" src='/IDAW-projet/images/delete.svg' />
                  </td>
                </tr>

                <tr class="row100 body">
                  <td class="cell100 column2">16</td>
                  <td class="cell100 column3">16</td>
                  <td class="cell100 column4">16</td>
                  <td class="cell100 column5">16</td>
                  <td class="cell100 column5">
                    <img class="crud-icon" src='/IDAW-projet/images/edit.svg' />
                    <img class="crud-icon" src='/IDAW-projet/images/delete.svg' />
                  </td>
                </tr>

                <tr class="row100 body">
                  <td class="cell100 column2">16</td>
                  <td class="cell100 column3">16</td>
                  <td class="cell100 column4">16</td>
                  <td class="cell100 column5">16</td>
                  <td class="cell100 column5">
                    <img class="crud-icon" src='/IDAW-projet/images/edit.svg' />
                    <img class="crud-icon" src='/IDAW-projet/images/delete.svg' />
                  </td>
                </tr>

                <tr class="row100 body">
                  <td class="cell100 column2">16</td>
                  <td class="cell100 column3">16</td>
                  <td class="cell100 column4">16</td>
                  <td class="cell100 column5">16</td>
                  <td class="cell100 column5">
                    <img class="crud-icon" src='/IDAW-projet/images/edit.svg' />
                    <img class="crud-icon" src='/IDAW-projet/images/delete.svg' />
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>


</body>

</html>