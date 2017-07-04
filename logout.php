<?php
ob_start();
session_start();

unset($_SESSION['userSession']);
unset($_SESSION['loginSession']);

header("Location: index.php?acesso=logout");

?>