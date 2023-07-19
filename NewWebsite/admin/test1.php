<?php 
include "db.php";
include "header.php";


// Check if image file is a actual image or fake image

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
        <form method="post" class="row justify-content-center border shadow m-5" enctype="multipart/form-data" id="newPostForm">
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
                <textarea name="description" id="description" placeholder="Post Description:" class="col-8 p-1 m-1" value=""></textarea><br>
                <input type="submit" name="submit_post" value="Submit" class="col-5 btn btn-group border text-center">
        </form>
    </div>


</main>


<script>
    jQuery('#newPostForm').submit(function(e){
        e.preventDefault();
        let formdata = jQuery(this).serialize();
        jQuery.ajax({
            type: "POST",
            url: "test1-test.php",
            data: formdata,
            processData: false,
            success: function (response) {
                
            }
        });
    });

</script>
<?php
include "../footer.php";
?>