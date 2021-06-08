<?php
//session.
session_start();

//if loggedin session is not set or logged is not true.
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!=true){
  header("location: login.php");
  exit;

}
?>

<?php include "functions1.php" ;



if(isset($_POST['resgister']))
{
    $username = $_POST['username'];
    $name1 = $_POST['name1'];
    $employee_id = $_POST['employee_id'];
    $Address = $_POST['Address'];
    $password = $_POST['password'];
    $comments = $_POST['comments'];
    $password =  md5($password);
    
    add($username,$password,$Address, $employee_id, $name1 , $comments);
}

if(isset($_POST['login']))
{
    
    $username = $_POST['username'];
    $password = $_POST['password'];


    $username = mysqli_real_escape_string( $connection ,$username);
    $password = mysqli_real_escape_string( $connection ,$password);
    if( !empty($username) && !empty($password) )
        login($username ,$password);
    else
    {
        header("location :http://localhost/miniproject/login.php");
    } 
}


if(isset($_POST['update']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $newpass = $_POST['newpass'];


    $username = mysqli_real_escape_string( $connection ,$username);
    $password = mysqli_real_escape_string( $connection ,$password);
    $newpass = mysqli_real_escape_string( $connection ,$newpass);
    echo "enter the details";

    update($username , $password , $newpass );
   
}