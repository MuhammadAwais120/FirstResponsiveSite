<?php
include "header.php";
include "db.php";
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']  == true  )  {
  ?>
  <script>
      window.location.href = 'http://localhost/NewWebsite/index.php' ;
  </script>
  <?php
}
if (isset( $_POST['Submit'] )) {
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $pno = $_POST['pno'];
  $pword = $_POST['pword'];

   $sql1 = " SELECT * FROM `user_login` WHERE `email` = '$email' AND `fname` = '$fname' " ;
    $result1 = mysqli_query($con,$sql1);
  if(mysqli_num_rows($result1) > 0){
    ?>
        <script>
            window.location.href = 'register.php?error=incorrect_login_data' ;
        </script>
        <?php 
  }else {
    $sql = "INSERT INTO `user_login`(`fname`, `email`, `phone`, `password`) VALUES ( '$fname' , '$email' , '$pno' , '$pword' )" ;
    $result = mysqli_query($con , $sql);
  
    if($result == true){
      $_SESSION['loggedIn'] = true ;
      $_SESSION['user_id'] = $data1['id'] ;
      ?>
      <script>
        window.location.href = 'http://localhost/NewWebsite/index.php' ;
      </script>
      <?php
    }
  }

}

?>
  <main class="background f-main">
    <div class="container mt-5">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="row" style="background-color: rgba(8, 250, 246, 0.085); display:flex; align-content: space-between ;">
                    <div class="col-6"><img src="images/001.png" alt=""></div>
                    <div class="col-6 container text-light" style="width: auto;">
                      <form method="post">
                        <label for="fname">Full name:</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                        <label for="email">Email:</label><br>
                        <input type="email" id="email" name="email" value=""><br>
                        <label for="pno">Phone Number:</label><br>
                        <input type="number" id="pno" name="pno" value=""><br>
                        <label for="pword">Password:</label><br>
                        <input type="password" id="pword" name="pword" value=""><br>
                        <input type="submit" name="Submit" class="mt-1 btn btn-group text-light btn-info">
                        
                        </form>
                        <a href="login.php"><button class="btn btn-group text-light mb-3 mt-4">LogIn?</button></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
<?php include 'footer.php'; ?>