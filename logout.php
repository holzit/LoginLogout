<?php
session_start();   // Session starten
if(session_destroy()) // Zerstört alle Sessions
{
    
    
header("Location: login.php"); // Weiterleitung an die Homepage
}
?>