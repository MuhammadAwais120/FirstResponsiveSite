<?php
include "header.php";
include "../db.php";
$sql = " SELECT * FROM `user_login` "; 
$result = mysqli_query($con,$sql);
$a = mysqli_num_rows($result);


?>



  <body>
    <div class="container mx-auto">
      <div class="row">
        <div class="col-4">
          <h2>Welcome Admin</h2>
        </div>
      </div>
    </div>
    <div class="container mx-auto">
        <div class="row">
          <div class="col-6">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Password</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if ( $a > 0 ) {
                $b = 1;
                while($data = mysqli_fetch_assoc($result)) {
              
              ?>
              <tr>
                <th scope="row"><?php echo $b++ ?></th>
                <td><?php echo $data['fname']?></td>
                <td><?php echo $data['email']?></td>
                <td><?php echo $data['phone']?></td>
                <td><?php echo $data['password']?></td>
              </tr>
              <?php 
                }
              }
              ?>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
