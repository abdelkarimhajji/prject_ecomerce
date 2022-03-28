<?php

session_start();

session_unset();

session_destroy();

header("location: index.php");
// foreach ($_SESSION['card'] as $key => $value){
//     if( $value == $id){
//       echo "kkkkkkkkk";
//     }
//     else{
//       echo"h";
//     }
//   }