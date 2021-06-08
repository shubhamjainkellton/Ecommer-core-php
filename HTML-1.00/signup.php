<?php

//To fetch the data from Attributes.
if($_SERVER["REQUEST_METHOD"] == "POST"){

  include "db.php";

  $email = $_POST["email"];
  $password = $_POST["password"];
  $conform_password = $_POST["conform_password"];

  if ($password != $conform_password) {
    echo "Type Password and Conform Password Incorrectly";
    die();
 }


  //for form validation.
  include "signup_process.php";

  /*To check wether Emailalready exixts.
  $existsql = 'SELECT * FROM users WHERE email = "$email"';
  $result = mysqli_query($connect, $existsql);
  $numExistsRow = mysqli_num_rows($result);

  if($numExistsRow > 0){
    $exists = true;
    echo "Email already Exists";
  }else{
    $exists = false;
  }
  */
}
?>

<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form method='post' style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="psw-repeat"><b>Conform Password</b></label>
    <input type="password" placeholder="Conform Password" name="conform_password" required>

    <div class="clearfix">
      
      <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
      <!--<button type="button" class="cancelbtn">Cancel</button>-->
    </div>
  </div>
</form>

</body>
</html>
