<!doctype html>
<html lang="en">

<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
          <div class="login-wrap p-4 p-md-5">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="fa fa-user-o"></span>
            </div>
            <h3 class="text-center mb-4">Register</h3>
            <form onsubmit="onRegisterSubmit();" class="login-form">
              <div class="form-group">
                <input id="login" type="text" class="form-control rounded-left" placeholder="Username" required>
              </div>
              <div class="form-group d-flex">
                <input id="password" type="password" class="form-control rounded-left" placeholder="Password" required>
              </div>
              <div class="form-group">
                <input id="prenom" type="text" class="form-control rounded-left" placeholder="Prénom" required>
              </div>
              <div class="form-group">
                <input id="nom" type="text" class="form-control rounded-left" placeholder="Nom" required>
              </div>
              <div class="form-group">
                <input id="date_naissance" type="date" class="form-control rounded-left" placeholder="Date de naissance" required>
              </div>
              <div class="form-group">
                <select class="form-control pl-3" id="sexe">
                  <option value="" disabled selected>Sexe</option>
                  <option value="Femme">Femme</option>
                  <option value="Homme">Homme</option>
                </select>
              </div>
              <div class="form-group d-md-flex">
                <!-- <div class="w-50">
                   <label class="checkbox-wrap checkbox-primary">Remember Me
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                  </label>
                </div> -->
                <div class="w-100 text-md-right">
                  <a href="login.php">Already have an account?</a>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/register.js"></script>

</body>

</html>