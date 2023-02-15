<?php

session_start();

include("connect.php");
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password =$_POST['password'];

    $sql = "SELECT id, email, password FROM tbl_user WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    if ($result->num_rows == 0) {
        $_SESSION['email'] = $row['email'];
        // echo"<script>window.location='index.php'</script>";
        header('Location:index.php');
    } else {
        header('Location:login.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/schedule.css">
     
    <title>schedule</title>
</head>
<body>
    <div class="container-fluid picture">
        <div class="row">
            <div class="col">
                <img src="../img/salmon.png">

            </div>
            <div class="col">
                <img src="../img/breakfast.png">

            </div>
        
           
            
        </div>
        <div class="row">
        <div class="col">
                <img src="../img/pngwing.com.png">
            </div>

            <div class="col">
                <img src="../img/chicken grill.png">
            </div>
        </div>
        
    </div>



    <div class="container logInFields">
    <div class="row">
        <div class="col-12 mt-5">
            <form method="post" action="">
                <label>Email</label>
                <input type="email" name="email" required/>
                </br>
                <label>Password</label>
                <input type="password" name="password" required/>
                </br>
                <input type="submit" name="submit" value="Login"/>
            </form>
        </div>
    </div>
</div>



</body>
</html>