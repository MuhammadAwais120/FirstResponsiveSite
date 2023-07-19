<?php
include "db.php";

    $data = $_POST['data'];
    $category_id = $_POST['id'];
    
    $sql = "UPDATE `post_categories` SET `category_name` = '$data' WHERE id = $category_id ";
    $result = mysqli_query($con , $sql) ;
    if ($result == 'true') {
      echo 'success' ;
  }else{
      echo 'error' ;
  }
    ?>
     


// if (isset($_POST['submit'])) {
//     $data = $_POST['data'];
//     $category_id = $_GET['id'];
//     $select_sql = "SELECT * FROM `post_categories` WHERE id=$category_id";
//     $select_results = mysqli_query($con,$select_sql);
//     $select_data =  mysqli_fetch_assoc($select_results);

// if (isset($_GET['id'])) {
//     $sql = "UPDATE `post_categories` SET `category_name` = '$data' WHERE `id` = '$category_id' ";
//     $result = mysqli_query($con , $sql) ;
//     header("location:catagories.php?status=category_updated_successfully");
// }
// }
?>




  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
</html>