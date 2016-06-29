<?php include 'includes/config.php'; ?>   <!-- Einbindung der Datenbank Verknüpfung -->
<?php include 'includes/functions.php'; ?>   <!-- Einbidung der Funktionen -->
<?php
// Überprüfung ob Benutzer bereits eingeloggt ist
if (!$user -> loggedIn())
{
    header('location: login.php');
    die();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Modul 133</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
   </script>
  <body>
        <div id="mainpage" class="col-xs-12">
          <div class="alert alert-success text-center" style="margin-bottom:5px;margin-top:25px">
            <button type="button" class="close" data-dismiss="alert">×</button><b>
            Dies ist nur eine Testseite. Bitte Loggen sie sich hier aus <a href="logout.php">Logout</a> </b>   <!-- Logout Script zur Beendung der Session
          </div>
        </div>
  </body>
</html>