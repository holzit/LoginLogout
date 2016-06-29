<?php include 'includes/config.php'; ?>   <!-- Einbindung der Datenbank Verknüpfung -->
<?php include 'includes/functions.php'; ?>   <!-- Einbidung der Funktionen -->
<?php if (!$user -> loggedIn())   // Wenn Benutzer NICHT eingeloggt ist, 
{
    header('location: login.php');   // dann weiterleiten an die Login.php Page
    die();
}
else
{
    header('location: dashboard.php');   // Sonst weiterleiten an die Dashboard.php Page  
}
?>
