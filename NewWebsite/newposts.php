<?php 
include "db.php";
include "header.php";


// Check if image file is a actual image or fake image
if(isset($_POST["submit_post"])) {
    if(isset($_FILES["file"])){
        // var_dump($_FILES);
        $new_file = "";
        $target_dir = "uploaded_images/";
        $unique_name = uniqid();
        $old_name = $_FILES["file"]["name"] ;
        $ext = explode("." , $old_name );
        $ext = end($ext);
        $new_file = $unique_name . '.' . $ext ; 
    }
    $post_name = $_POST['post_name'];
    $catagory = $_POST['catagory'];
    $description = $_POST['description'];
    $publisher = $_SESSION['user_id'];
    if($post_name != "" && $_FILES['file']['tmp_name'] != ""){
        $insert_query = " INSERT INTO `posts`(`user_id`, `post_name`, `category_id`, `linked_image` , `post_description`) VALUES ('$publisher','$post_name','$catagory', '$new_file' ,'$description') ";
        $result_query = mysqli_query($con,$insert_query);
        if($result_query){
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir . $new_file)) {
            } else {
            }
        }
    }else{
        if($post_name == "" && $_FILES['file']['tmp_name'] == ""){
            ?>
            <script>
                window.location.href = '?fill-the-fields&select-an-image';
            </script>
            <?php
        }
        elseif($post_name == ""){?>
        <script>
            window.location.href = '?fill-the-fields';
        </script>
        <?php
        }elseif($_FILES['file']['tmp_name'] == ""){
            ?>
            <script>
                window.location.href = '?select-an-image';
            </script>
            <?php
        }
    }
}
?>
<main>
    <nav class="custom_nav">
        <div class="container">
            <ul>
                <li><a href="posts.php">All posts</a></li>
                <li class="active"><a href="newposts.php">Add new post</a></li>
                <li><a href="myposts.php">My posts</a></li>
            </ul>
        </div>
    </nav>
    <div class="container mx-auto">
        <form method="post" class="row justify-content-center border shadow m-5" enctype="multipart/form-data">
            <input type="text" name="post_name" id="post_name" placeholder="Post Name:" class="col-8 p-1 m-1">
            <?php
            $sql1 = " SELECT * FROM `post_categories`";
            $result1 = mysqli_query($con,$sql1);
            $a = mysqli_num_rows($result1);
            ?>
            <select id="catagory" name="catagory" class="col-8 p-1 m-2">
                <option value="0" selected>Select Category Option</option> 
                <?php
                if ($a > 1) {
                  $b = 1;
                  while ($fetch = mysqli_fetch_assoc($result1)) {
                ?>
                <option value="<?php echo $fetch['id'] ?>"><?php echo $fetch['category_name'] ?></option>
                <?php
                  }
                }
                ?>
            </select>
                <input type="file" name="file" id="file" class="col-8 p-1 m-2">
                <textarea name="description" id="description" placeholder="Post Description:" class="col-8 p-1 m-1" value=""></textarea><br>
                <input type="submit" name="submit_post" value="Submit" class="col-5 btn btn-group border text-center">
        </form>
    </div>


</main>



<?php
include "footer.php";
?>