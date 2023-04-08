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
        $INSERT = "INSERT Into users (uname1 ,upswd1)values(?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $uname1,$email,$upswd1,$upswd2);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
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