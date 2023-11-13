<?php
// Initialiser la session
session_start();
// Détruire la session.
session_unset();
session_destroy();
header("location: index.php");

?>