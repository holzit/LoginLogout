<?php session_start(); ?>   <!-- Session wird gestartet -->
<?php
// Datenbank Konfiguration
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'modul133');
define('DB_HOST', 'localhost');
// PDO Verbindung
$odb = new PDO('mysql: host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);