<?php
@session_start();
//ini_set('session.use_strict_mode', 1);
/**/if( !isset($_SESSION['username']) || !isset($_SESSION['userid']) ){//|| !isset($_SESSION['role']) ){
    header("Location:login.php");//!isset($_SESSION) |||| $_SESSION['errid'] == 01 || !isset($_SESSION['status'])
}


//header("Location: login.php");