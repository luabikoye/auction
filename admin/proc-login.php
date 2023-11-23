<?php
    session_start();
    include ('connection/connect.php');

    
    
    
    $username = $_POST['username'];
    // $_SESSION["username"] = "username";
    $password = $_POST['password'];

    if($username == '' && $password == '') 
    {   
        $error = "Username and Password is required";
        include ('index.php');
        exit;
    }


    if(!$username || !$password )
    {
        $error = 'Please enter a valid Username or Password';
        include('index.php');
        exit;
    }


    
    $query = "select * from login where username = '$username' && password = '$password'";
    $result = mysqli_query($db, $query);
    $num_rows = mysqli_num_rows($result);

    if($num_rows > 0)
    { 
        $_SESSION['valid_user'] = $username;
        // sleep(2);
        header ("location: index2.php");
        exit;
    }
    else{
        $error = 'Incorrect Username or password';
        include('index.php');
        exit;
    }
    

?>