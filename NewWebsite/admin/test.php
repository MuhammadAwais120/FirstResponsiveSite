<?php
include "db.php";
include "header.php";

$sql1 = " SELECT * FROM `post_categories`";
$result1 = mysqli_query($con,$sql1);
$a = mysqli_num_rows($result1);
?>
<main>
<!-- 
<p id="text">If you click on me, I will <b>disappear.</b></p>
<p>Click me away!</p>
<p>Click me too!</p>
<button id="bt1">show text</button>
<button id="bt2">show html</button> -->
<!-- <form type="post" id="form">
    
<input type="text" placeholder="enter value:" id="value1" name="value1">
<input type="text" placeholder="enter value:" id="value2" name="value2">
<input type="text" placeholder="enter value:" id="value3" name="value3">
<input type="text" placeholder="enter value:" id="value4" name="value4">
<input type="text" placeholder="enter value:" id="value5" name="value5">
<input type="submit" class="submit">
</form> -->

    <div class="container">
    <form method="post" id="category" class="border shadow row justify-content-center" id="category_submit_form_admin">
        <input type="text" name="data" id="data" placeholder="Enter Catagory:" class="col-9" >
        <input type="submit" name="submit" value="Register Categry" class="col-2 btn btn-group border">
    </form>
    </div>

    <table class="table">
              <tr>
                <th>No.</th>
                <th>Category Name.</th>
                <?php
                if ($a > 1) {
                  $b = 1;
                  while ($fetch = mysqli_fetch_assoc($result1)) {
                    ?>
                    <tr>
                      <td><?php echo $b++ ?></td>
                      <td><?php echo $fetch['category_name'] ?></td>
                      <td><a href="update_category.php?id=<?php echo $fetch['id'];?>"
                      class="btn btn-group btn-info">Edit</a></td>
                      <td><a href="delete_category.php?id=<?php echo $fetch['id']; ?>" class="btn btn-group btn-danger">Delete</a></td>
                    </tr>
                  <?php
                  }
                }
                ?>
              </tr>
    </table>


<script>
    // $(document).ready(function () {
    //     $("p").click(function () { 
    //         $(this).hide();
            
    //     });
    // });
    // $(document).ready(function () {
    //     $("p").mouseleave(function () { 
    //         $(this).hide();
            
    //     });
    // });
    // $(document).ready(function () {
    //     $(".p1").click(function () { 
    //         alert("welcome! You now enter p1!");
    //     });
    //     $(".p1").click(function () { 
    //         alert("Goodbye! You now left p1!");
    //     });
    // });
    // $(document).ready(function () {
    //     $("button").click(function () { 
    //         $("p").toggle();
            
    //     });
    // });
    // $(document).ready(function () {
    //     $("#bt1").click(function () { 
    //         alert("Text: " + $("#text").text());
            
    //     });
    //     $("#bt2").click(function () { 
    //         alert("Html: " + $("#text").html());
            
    //     });
    // });
    // $(document).ready(function () {
    //     $("#category").submit(function(e) {
    //         e.preventDefault();
    //         var Form = $(this).serialize();
    //         $.ajax({
    //             type : 'POST',
    //             url : 'functions.php' ,
    //             data : Form ,
    //             success : function(response){
    //                 console.log('success');
    //             },
    //         });
    //     });
    // });

    // $(document).ready(function () {
    //     $().submit(function (e) { 
    //         e.preventDefault();
    //         $.ajax({
    //             type: "method",
    //             url: "url",
    //             data: "data",
    //             dataType: "dataType",
    //             success: function (response) {
                    
    //             }
    //         });  
    //     });
    // });
    $(document).ready(function () {
        $("#category").submit(function (e) { 
            e.preventDefault();
            var form = $(this).serialize();
            $.ajax({
                type: "post",
                url: "../functions.php",
                data: form ,
                success: function (response) {
                    if (response == 'error') {
                        $('.response').text('error');
                 }else{
                    $('.response').text('success');
                    $('.response').html('');
                    $.ajax({
                        type: "post",
                        url: "categories_functions.php",
                        data: "data",
                        success: function (response) {
                            $('table.table').html(response);

                        }
                    });
                 }
                    
                },
            });          
        });
    });
</script>
</main>
