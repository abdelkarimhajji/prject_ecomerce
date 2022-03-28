<?php
session_start();
$conn = mysqli_connect('localhost','root','','ecommerce') or die(mysqli_error($conn));
// add new client

if(isset($_POST['save'])){
    $first      = $_POST['firest'];
    $last       = $_POST['last'];
    $email      = $_POST['email'];
    $adresse    = $_POST['adresse'];
    $telephone  = $_POST['telephone'];
    $password   = $_POST['password'];
    $stmt = $conn->prepare("select email  FROM client where email='".$email."'");
    $stmt->execute();
    $result = $stmt->get_result();
    $row_in4    = $result->fetch_assoc();
    $array4     = $row_in4['email'];
    if($array4 == $email){
        $_SESSION['validate'] = true;
        header("location: sin-up.php");
    }
    else{
    $req = "INSERT INTO client (nom,prenom,adresse,telephone,email,pass) values ('$first','$last','$adresse','$telephone','$email','$password')";
    $res = mysqli_query($conn, $req);
    $_SESSION['button'] = true;
    $_SESSION['user']   = $first;
    $_SESSION['admin']  = true;
    
    header("location: index.php");
    }
    
}
if(isset($_POST['save-in'])){
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    // user
    $stmt = $conn->prepare("select nom  FROM client where email='".$email."'");
    $stmt->execute();
    $result = $stmt->get_result();
    $row_in3    = $result->fetch_assoc();
    $array3 = $row_in3['nom'];
    $_SESSION['user'] = $array3;
    // email
    $stmt = $conn->prepare("select email  FROM client where email='".$email."'");
    $stmt->execute();
    $result = $stmt->get_result();
    $row_in    = $result->fetch_assoc();
    $array = $row_in['email'];
    // password
    $stmt = $conn->prepare("select pass  FROM client where pass='".$password."'");
    $stmt->execute();
    $result = $stmt->get_result();
    $row_in2    = $result->fetch_assoc();
    $array2 = $row_in2['pass'];
    if( $password==$array2 && $email==$array){
        $_SESSION['button'] = true;
        // $_SESSION['user'] = "karim";
        header("location: index.php");
    }
    else{
        $_SESSION['button'] = false;
        $_SESSION['validate_in'] = true;
        header("location: sgin-in.php");
    }
}


?>

