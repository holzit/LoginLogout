<?php
$show = new show(); 
$user = new user($odb);   
// Klassen
class show   // Klasse show
{
    function showError($error)
    {
        echo '<div class="alert alert-danger"><a class="close" data-dismiss="alert" href="#">&times;</a><h4 class="alert-heading">Error!</h4>'.$error.'</div>';
    }
    function showSuccess($success)
    {
        echo '<div class="alert alert-success"><a class="close" data-dismiss="alert" href="#">&times;</a><h4 class="alert-heading">Success!</h4>'.$success.'</div>';
    }
}
 
class user   // Klasse benutzer
{
    var $odb;
    function __CONSTRUCT($odb)
    {
        $this -> odb = $odb;   //Einbindung der Datenbank
    }
    function loggedIn()
    {
        if (isset($_SESSION['username'], $_SESSION['ID']))   //Prüft ob Benuter bereits eingeloggt ist
        {
            return true;   //Wenn ja dann = Wahr
        }
        else
        {
            return false;   //Wenn nein dann = Falsch
        }
    }
}
   
?>