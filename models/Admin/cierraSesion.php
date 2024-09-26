<?php
// session_name ("nombre_sesion")
session_start();

session_destroy();
header("location: ../index.php");
