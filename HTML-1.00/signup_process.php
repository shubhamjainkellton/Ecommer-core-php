<?php
if(isset($_POST["submit"])){

    include "db.php";

    $email = $_POST["email"];
    $password = $_POST["password"];
    $conform_password = $_POST["conform_password"];
    
    //sql string injection
    $email = mysqli_real_escape_string($connection,$email );
    $password = mysqli_real_escape_string($connection,$password );
    $conform_password = mysqli_real_escape_string($connection,$conform_password );

    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    /*Encryption and hashing
    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hashF_and_salt = $hashFormat.$salt;
    $password = crypt($password,$hashF_and_salt);
    $conform_password = crypt($conform_password,$hashF_and_salt);
    */
    


    if (empty($email)) {
        die ("Email is Required"."<br>");
    }

    if (empty($password)) {
        die ("Password is Required"."<br>");
    }
     
    if (empty($conform_password)) {
        die ("Password is Required"."<br>");
    }

    //Insert into DB
    $query = "INSERT INTO signup(email,password,conform_password)";
    $query .= "VALUES('$email','$hash','$conform_password')";

    $result = mysqli_query($connection,$query);      
    
    if($result){

        //Session 
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["email"] = $email;
        $_SESSION["sno"] = $sno;
        
    
        //Webpage Redirect
        header("location: index.php");
        }
        else {
        echo "Email already exists";
        }
    
    } else {
        echo "error";
    }
    
?>