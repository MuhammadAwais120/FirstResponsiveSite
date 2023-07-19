<?php
include 'db.php';

$sql1 = " SELECT * FROM `post_categories`";
$result1 = mysqli_query($con,$sql1);
$a = mysqli_num_rows($result1);
?>
<tbody>
    <tr>
        <th>No.</th>
        <th>Category Name.</th>
        <?php
        if ($a > 0) {
            $b = 1;
            while ($fetch = mysqli_fetch_assoc($result1)) {
            ?>
            <tr>
                <td><?php echo $b++ ?></td>
                <td class="fetch"><?php echo $fetch['category_name'] ?></td>
                <td><button id="<?php echo $fetch['id']; ?>"
                      class="btn btn-group btn-info edit">Edit</button></td>
                <td><button id="<?php echo $fetch['id']; ?>" class="btn btn-group btn-danger delete" >Delete</button></td>
            </tr>
            <?php
            }
        }
        ?>
    </tr>
</tbody>