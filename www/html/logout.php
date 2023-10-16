<?php
ob_start();
include_once "dbconfig.php";
session_start();
echo "LOGOUT";

session_unset();
session_destroy();

header("Location: index.php");
?>
