<?php
ob_start();
session_start();

    $userLogin = $_POST['login'];
    $userPassword = $_POST['password'];

    if(empty($userLogin) || empty($userPassword)){
        header("Location: index.php?acesso=vazio");
    }else{
        include_once 'users.php';       

        if (in_array($userLogin, $login) AND in_array($userPassword, $password)) { 
        /////////////// TODOS COM A MESMA SENHA
        // if(in_array($userLogin, $login) AND $userPassword == 'ESCOLHA UMA SENHA AQUI') {
        ////////////////////////////////////////    

            $key1 = array_search($userLogin, $login);
            $key2 = array_search($userPassword, $password);                       
            
            $_SESSION['userSession'] = $userLogin;
            $_SESSION['loginSession'] = $userPassword;

            /////////////// TODOS COM A MESMA SENHA
            //header("Location: cursos.php"); //Retirar esta linha se cada user for ter sua propria senha e descomentar o if abaixo
            ////////////////////////////////////////
            
            if($key1 == $key2){
                $_SESSION['userSession'] = $userLogin;
                $_SESSION['loginSession'] = $userPassword;
                header("Location: cursos.php");
            }else{
                header("Location: index.php?acesso=error");
            }            
        }else{
            header("Location: index.php?acesso=error");
        }
    }

?>