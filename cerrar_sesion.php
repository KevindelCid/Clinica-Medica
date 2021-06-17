<?php

session_start();
session_destroy();

header("Location: http://localhost/CLINICA-MEDICA/login.php");
exit;


?>