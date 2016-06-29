<?php include 'includes/config.php'; ?>   <!-- Einbindung der Datenbank Verknüpfung -->
<?php include 'includes/functions.php'; ?>   <!-- Einbidung der Funktionen -->
<!DOCTYPE html>
<html>
  <head>
    <title>Session-basiertes Login-System</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  </head>
 
  <body>
    <div class="col-xs-5"></div>
    <div class="login-container centered col-xs-2">
        <div>
          <h3 width="78" height="22">Modul 133 Login</h3>
          <!-- Login Formular -->
          <form id="form-login" class="p-t-15" role="form" action="" method="post">
            <!-- Login Formular Script -->
      <?php
        if (isset($_POST['LoginBtn'])) //prüft ob Variable existiert nicht NULL ist
        {
          $username = $_POST['username']; //übergibt username
          $password = $_POST['password']; //übergibt passwort
          if (empty($username) || empty($password))
          {
            $show -> showError("Bitte füllen die das ganze Formular aus");   //Fehlermeldung wenn Eingaben nicht vollständig sind
          }
          else
          {
            $SQLCheckUser = $odb -> prepare("SELECT COUNT(*) FROM `account` WHERE `username` = :user AND `password` = :password LIMIT 1"); //sql abfrage
            $SQLCheckUser -> execute(array(':user' => $username, ':password' => $password)); //sql abfrage
            $loginCheck = $SQLCheckUser -> fetchColumn(0);
            if ($loginCheck)
            {
               
              $SQLGetID = $odb -> prepare("SELECT `ID`, FROM `Account` WHERE `username` = :username LIMIT 1");
              $SQLGetID -> execute(array(':username' => $username));
               
               
              $_SESSION['username'] = $username;
               
              $_SESSION['ID'] = $SQLGetID -> fetchColumn(0);
              $show -> showSuccess('Login Ueberpruefung erfolgreich! <br>Sie werden weitergeleitet... <meta http-equiv="refresh" content="2;url=index.php">');   //Meldung dass Login Überprüfung erfolgreich war
            }
            else
            {
              $show -> showError('Dieser Benutzer existiert nicht in der Datenbank');   //Meldung dass der Benutzer nicht existiert
            }
          }
        }
        ?>
            <div class="form-group form-group-default">
              <label>Login</label>
              <div class="controls">
                <input type="text" id="username" name="username" value="" placeholder="Username" class="form-control" maxlength="15" required>   <!-- Benutzername eingabe Feld -->
              </div>
            </div>
            <!-- END Form Control-->
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>Password</label>
              <div class="controls">
                <input type="password" id="password" class="form-control" name="password" value="" placeholder="Password" maxlength="15" required>   <!-- Password eingabe Feld -->
              </div>
            </div>
            <button class="btn btn-primary btn-cons m-t-10" value="Login" name="LoginBtn" type="submit">Sign in</button>   <!-- Einloggen Button -->
          </form>
          <!--END Login Form-->
        </div>
      </div>
    <div class="col-xs-5"></div>
  </body>
</html>