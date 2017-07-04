<?php
ob_start();
session_start();

if(!isset($_SESSION['userSession']) AND !isset($_SESSION['loginSession'])){
    echo 'Você não tem permissão para acessar está página | <a href="./">Logar</a>';
    die;
}
?>