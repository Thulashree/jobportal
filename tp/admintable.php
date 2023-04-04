<?php 
session_start(); 
include "admin_conn.php";

if (isset($_POST['email']) && isset($_POST['passward'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $email = validate($_POST['email']);
    $passward = validate($_POST['passward']);

    if (empty($email)) {
        header("Location: admin.php?error=email is required");
        exit();
    }else if(empty($passward)){
        header("Location: admin.php?error=Passward is required");
        exit();
    }else{
        $sql = "SELECT * FROM two WHERE email='$email' AND passward='$passward'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['passward'] === $passward) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['passward'] = $row['passward'];
    
                header("Location: adminhome.php");
                exit();
            }else{
                header("Location: admin.php?error=Incorrect email or password");
                exit();
            }
        }else{
            header("Location: admin.php?error=Incorrect email or password");
            exit();
        }
    }
    
}else{
    header("Location: admin.php");
    exit();
}
