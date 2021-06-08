<?php
$connection = mysqli_connect('localhost', 'root','', 'ecommerce');?>
<?php 
function add($username, $password , $Address , $employee_id, $name1,$comments )
{
    global $connection;

    
    
    $querry = "Insert  INTO  newdata ( username , password , Address , employee_id , name1 , comments) ";
    $querry .= " Values( '$username', '$password' , '$Address' , '$employee_id' ,  '$name1' , '$comments' ) ";
    $result = mysqli_query($connection, $querry) ;

   

    if(!$result)
    {
        die('query Failed' . mysqli_error($connection)) ;
    }
    else
    {/*
        session_start() ;
    $_SESSION["a"] = "welcome ".$username ;
    $_SESSION["b"] = $username ;
    header("Location: http://localhost/miniproject/welcome.php");
    die();*/
        ( "welcome ".$name1."</br>") ;

    }
    # view($username);

}

function login($username, $password)
{
    global $connection;
    

    $querry = "SELECT * FROM  signup WHERE email = '$username' AND password = '$password' ";
    $result = mysqli_query($connection, $querry) ;
    $count = mysqli_num_rows($result);
/*
    if($count == 1) 
    {   
        session_start() ;
        $_SESSION["a"] = "welcome ".$username ;
        $_SESSION["b"] = $username ;
        
        header("Location: http://localhost/miniproject/welcome.php");
    }
    else 
    {
        $error = "Your Login Name or Password is invalid";
        print_r($error); 
        echo "</br>";
        print_r(md5($password));
    }
    */
    if(!$result)
    {
        die('query Failed' . mysqli_error($connection)) ;
    }
    else{
        die('hogya');
    }
    
}


function update($username , $password ,$newpass)
{
    global $connection;
    
    $querry = "UPDATE newdata SET password = '$newpass' ";
    $querry .="WHERE username = '$username' AND password = '$password' ";

    $result = mysqli_query($connection, $querry) ;
    

    if(!$result)
    {
        die('query Failed' . mysqli_error($connection)) ;
    }
    else
    {
        die('your password is updated');
    }
}

function view($username)
{
    global $connection;

    $querry = "SELECT username , address , employee_id , name1 FROM  newdata WHERE username = '$username' ";
    $result = mysqli_query($connection, $querry) ;
    #$querry1 = "SELECT comments FROM  newdata  ";
   # $result1 = mysqli_query($connection, $querry1) ;

    if(!$result )
    {
        die('query Failed' . mysqli_error($connection)) ;
    }
    else
    {
        while($row = mysqli_fetch_assoc($result))
        {
            print_r($row);
        }
    }
   /* while($row1 = mysqli_fetch_assoc($result1))
    {
        ?>
        <div id="comment-<?php print_r($row1);?>" class="comment-row">
	
	
        <?php
   
    }
    */     
}
?>


