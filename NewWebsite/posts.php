<?php 
include "db.php";
include "header.php";
?>
<main>
    <nav class="custom_nav">
        <div class="container">
            <ul>
                <li class="active"><a href="posts.php">All posts</a></li>
                <li><a href="newposts.php">Add new post</a></li>
                <li><a href="myposts.php">My posts</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-evenly">
        <?php
                        $sql1 = " SELECT * FROM `posts`";
                        $result1 = mysqli_query($con,$sql1);
                        $a = mysqli_num_rows($result1);
                        if ($a > 1) {
                        while ($fetch = mysqli_fetch_assoc($result1)) {
                        ?>
        <div class="card mx-2 my-4 col-3 border-0 shadow">
            <img src="<?php if($fetch['linked_image'] != ''){
                echo 'uploaded_images/'. $fetch['linked_image'] ;
            }else{
                echo 'images/no_image.png';
            } ?>" alt="">
            <div class="card-body">
                <table class="">
                    <tr>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <?php echo $fetch['post_name']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="pt-4">
                        <?php
                        $id = $fetch['category_id'];
                        $sql2 = " SELECT * FROM `post_categories` WHERE id = $id";
                        $result2 = mysqli_query($con,$sql2);
                        $fetch2 = mysqli_fetch_assoc($result2);
                        
                        echo $fetch2['category_name']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="pt-4">
                        <?php
                        echo $fetch['post_description']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="pt-4" style="font-size:8px;">
                        <?php echo " Date Created " . $fetch['post_date_created']; ?>
                        </td>
                    </tr>
                </table>
                
            </div>
        </div>
         <?php
                }
            }

          ?>

        </div>
                        
    </div>
</main>



<?php
include "footer.php";
?>