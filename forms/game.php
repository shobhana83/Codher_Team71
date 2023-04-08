<?php
 $server = "localhost";
$username = "root";
$password = "";
$database = "tamilhacks";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}
//include 'db_connect.php';*/
if(isset($_POST['totalscore'])){
    $totalscore = $_POST['totalscore'];
 } 
 //else{
 //   $totalscore= "";
 //}
//$INSERT = "INSERT Into score (totalscore)values(totalscore)";
$INSERT=mysql_query("INSERT INTO score ('totalscore')) VALUES (".$_POST['totalscore'].")");
//Prepare statement
//checking username
if($totalscore >=0 ){
    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("i", $totalscore);
    $stmt->execute();
    echo "Created";
} else {
    echo "Someone already register using this email";
}
$stmt->close();
$conn->close();
//include_once 'db_connect.php';
//if(isset(@$_GET['total_score']))
//{    
 //    $totalscore = $_GET['total_score'];
  //   $sql = "INSERT INTO score (total_score)
  //   VALUES ('$total_score')";
  //   if (mysqli_query($conn, $sql)) {
  //      echo "New record has been added successfully !";
   //  } else {
    //    echo "Error: " . $sql . ":-" . mysqli_error($conn);
    // }
    // mysqli_close($conn);
//}

//include('db_connect.php');

//$totalscore =  $_GET['total_score'];
//$db = mysqli_connect("...MY DATA...");

//$query = "INSERT INTO score (score) VALUES ('$totalscore')";
//mysqli_query($db, $query);
?>

