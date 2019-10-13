<?php
session_start();
session_destroy();
header('Location: index.php');

//if (isset($_SESSION['ugabuzz_user'])){
////require_once('includes/functions.php');
////$funs = new Functions;
//
//session_destroy();
//header('Location: index.php');
//}else{
//header('Location: index.php');
//}
//exit;
?>