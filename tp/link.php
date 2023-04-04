<?php

$name = $_POST['name'];
$email = $_POST['email'];
$passward = $_POST['passward'];
$number=$_POST['number'];





if (!empty($name) || !empty($email) || !empty($passward) || !empty($number) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "logintabel";
 



$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error()); 
}
else{
  $SELECT = "SELECT email From users Where email = ? Limit 1";
  $INSERT = "INSERT Into users (name,email,passward,number ) values(?,?,?,?)";


     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssi", $name,$email,$passward,$number );
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this usename";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>