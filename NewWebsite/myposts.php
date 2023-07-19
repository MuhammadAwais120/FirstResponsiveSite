<?php 
include "db.php";
include "header.php";
$publisher = $_SESSION['user_id'];
$sql1 = " SELECT * FROM `posts` WHERE user_id = $publisher ";
$result1 = mysqli_query($con,$sql1);
$a = mysqli_num_rows($result1);
// var_dump($publisher);
// die();
?>
<main>
    <nav class="custom_nav">
        <div class="container">
            <ul>
                <li><a href="posts.php">All posts</a></li>
                <li><a href="newposts.php">Add new post</a></li>
                <li class="active"><a href="myposts.php">My posts</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="container">
    <div class="row justify-content-end">
       <div class="col-2">
            <img src="images/user.png" alt="" style="height:10vh;">
            <div class="row text-center mx-auto my-1">
            <?php
            $sql3 = " SELECT * FROM `user_login` WHERE id = $publisher ";
            $result3 = mysqli_query($con,$sql3);
            $fetch3 = mysqli_fetch_assoc($result3);
            echo strtoupper($fetch3['fname']);
             ?>
            </div>
        </div>
    </div>
    </div> 

    <div class="container">
    <?php
        
        if ($a > 1) {
        while ($fetch = mysqli_fetch_assoc($result1)) {
    ?>
        <div class="row mx-0 my-5 shadow">
            <div class="col-4 p-0"><img src="<?php if($fetch['linked_image'] != ''){
                echo 'uploaded_images/'. $fetch['linked_image'] ;
            }else{
                echo 'images/no_image.png';
            } ?>" alt="" style="width:50%; height:auto"></div>
            <div class="col-4">
                <div class="row h-100 align-content-center justify-content-left">
                    <div class="col-8"><?php echo $fetch['post_name']; ?></div>
                    <div class="col-8 py-3"><?php
                    $id = $fetch['category_id'];
                    $sql2 = " SELECT * FROM `post_categories` WHERE id = $id";
                    $result2 = mysqli_query($con,$sql2);
                    $fetch2 = mysqli_fetch_assoc($result2);
                
                echo $fetch2['category_name']; ?>
                    </div>
                    <div class="col-8"><?php
                echo $fetch['post_description']; ?></div>
                </div>
            </div>
            <div class="col-2">
                <?php
                $id = $fetch['user_id'];
                $sql5 = " SELECT * FROM `user_login` WHERE id = $id ";
                $result5 = mysqli_query($con,$sql5);
                $fetch5 = mysqli_fetch_assoc($result5);
                ?>

                <div class="row h-100 align-content-center">
                <?php
                echo $fetch5['fname']; ?>
                </div>    
            </div>
            <div class="col-2">
            <div class="row h-100 align-content-center">
                <?php echo " Date Created " . $fetch['post_date_created']; ?></div>    
                </div>    
        </div>
        <?php
        }
    }

        ?>
    </div>
</main>



<?php
include "footer.php";
?>