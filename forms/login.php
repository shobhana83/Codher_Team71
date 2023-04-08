<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db_connect.php';
    $uname1 = $_POST["uname1"];
    $upswd1 = $_POST["upswd1"]; 
    
     
    $sql = "Select * from register where uname1='$uname1' AND upswd1='$upswd1'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['uname1'] = $uname1;
        header("location:task.html");

    } 
    else{
        $showError = "Invalid Credentials";
    }
}
if($login){
    echo ' <div>
        <strong>Success!</strong> You are logged in
    </div> ';
    }
    if($showError){
    echo ' <div>
        <strong>Error!</strong> '. $showError.'
    </div> ';
    }
?>
