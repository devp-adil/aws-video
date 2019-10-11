<?php
include 'colib/sys_lib.php';
include 'colib/db_lib.php';

// print "<pre>";
// print_r($_REQUEST);
// exit;


if (!isset($_POST['email']) && !isset($_POST['password'])) {
    sys_lib::redirect('index.php?msg=somethig is wrong!');
}
 else {
 
    $user_id = isset($_POST['email']) ? $_POST['email'] : '';

    $password = $_POST['password'];
    
    $query = "SELECT password,user_id,email from aws_user where email = '$user_id'";
    $result = db_lib::db_execute_select($query);
    if ($result) {
        $hash= $result[0]['password'];
        if (password_verify("$password",$hash)) 
        {
        $user_id = $result[0]['user_id'];

          session_start();
          $_SESSION['username'] = $user_id;           
           sys_lib::redirect('index.php');
            die();
        } else {
            sys_lib::redirect('index.php?msg=not match');  //not match
            die();
        }
        //will read password and match with password after that initate session
    } else {
        sys_lib::redirect('index.php?msg= password and username are incorrect'); // if pass and username not found
        die();
    }
}
?>
