<?php 
include "header.php";
include "db.php";
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']  == true  )  {
    ?>
    <script>
        window.location.href = 'http://localhost/NewWebsite/index.php' ;
    </script>
    <?php
}else{
if (isset( $_POST['Submit'] )) {
    $email = $_POST['email'];
    $password = $_POST['pword'];
    $sql1 = " SELECT * FROM `user_login` WHERE `email` = '$email' AND `password` = '$password' " ;
    $result1 = mysqli_query($con,$sql1);
    $data1 = mysqli_fetch_assoc($result1);
if(mysqli_num_rows($result1) > 0){
    $_SESSION['loggedIn'] = true ;
    $_SESSION['user_id'] = $data1['id'] ;
    ?>
    <script>
        window.location.href = 'http://localhost/NewWebsite/index.php' ;
    </script>
    <?php
}else{
        ?>
        <script>
            window.location.href = 'login.php?error=incorrect_login_data' ;
        </script>
        <?php 
    }



  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<main class="background f-main">
    <div class="container mt-5">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="row" style="background-color: rgba(8, 250, 246, 0.085); display:flex; align-content: space-between ;">
                    <div class="col-6"><img src="images/001.png" alt=""></div>
                    <div class="col-6 container text-light" style="width: auto;">
                    <div class="container mx-auto">
                            <form method="post">
                            <label for="email">Email:</label><br>
                            <input type="email" id="email" name="email"><br>
                            <label for="pword">Password:</label><br>
                            <input type="password" id="pword" name="pword"><br>
                            <input type="submit" name="Submit">
                            </form>
                            <a href="register.php"><button class="btn btn-group text-light mb-3 mt-4">Register?</button></a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>

</body>
</html>

<?php 
}
include "footer.php";
?>