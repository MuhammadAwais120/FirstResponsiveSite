<?php
include "db.php";
include "header.php";

$sql1 = " SELECT * FROM `post_categories`";
$result1 = mysqli_query($con,$sql1);
$a = mysqli_num_rows($result1);

?>

<body>
  <main>
  <div class="container">
      
      <div class="container">
            <form method="post" id="category" class="border shadow row justify-content-center category_submit_form_admin hide">
                <input type="text" name="data" id="data" placeholder="Enter Catagory:" value="" class="col-9" >
                <input type="submit" name="submit" value="Register Categry" class="col-2 btn btn-group border">
            </form>

            <form method="post" id="category1" class="border shadow row justify-content-center category_submit_form_admin unhide" style="display: none;">
                <input type="text" name="data" id="data" placeholder="Enter Catagory:"  class="col-9 category_name" >
                <input type="hidden" name="id" class="hidden_id">
                <input type="submit" name="submit" value="Update Categry" class="col-2 btn btn-group border">
            </form>

      </div>
      <div class="container">
      <div class="response"></div>
      <div class="response1"></div>
        <div class="row mx-auto">
          <div class="col-8">
            <table class="table">
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
                      <td><button id="<?php echo ($edit_id = $fetch['id']); ?>"
                      class="btn btn-group btn-info edit">Edit</button></td>
                      <td><button id="<?php echo $fetch['id']; ?>" class="btn btn-group btn-danger delete" >Delete</button></td>
                    </tr>
                  <?php
                  }
                }
                ?>
              </tr>
            </table>
          </div>
        </div>
      </div>

    </div>
  </main>
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  
                // Enter New Category With Ajax  

  <script>
    $('#category').submit(function (e) { 
      e.preventDefault();
      var form = $(this).serialize();
        $.ajax({
          type: "post",
          url: "../functions.php",
          data: form ,
          success : function(response){
            if(response == 'error'){
              jQuery('.response').text('error');
            }else{
              jQuery('.response').text('success');
              jQuery('table.table').html('');
              $.ajax({
                type: "post",
                url: "categories_functions.php",
                data: form ,
                success : function(response){
                  if(response != ''){
                    jQuery('table.table').html(response);
                  }
                },
              });
            }
          },
        });
        
        jQuery(this).trigger("reset");
    });


            // Delete With Ajax


      $(document).on('click', '.delete' ,function(e){
        e.preventDefault();
        var del_id= $(this).attr('id');
        $.ajax({
          type: "GET",
          url:'delete_category.php',
          data:{ id: del_id },
          success: function(response){
              if(response == 'error'){
                $('.response').text('error');
              }else{
                $('.response').text('success');
                $('table.table').html('');
                $.ajax({
                  url: "categories_functions.php",
                  success : function(response){
                  if(response != ''){
                  $('table.table').html(response);
                  }
                  },
                });
              }
          },

        });
      });
        

            // Edit Button Click

    $(document).on('click','.edit', function () {
      $(".hide").hide();
        $(".unhide").show();
      var edit_id= $(this).attr('id');
      jQuery('#category1 .hidden_id').val(edit_id);
      var name= $(this).parent().parent().find(".fetch").text();
      $("#category1 .category_name").val(name);
    });   

            // Edit With Ajax


   $(document).on('submit', '#category1' ,function(e){
      e.preventDefault();
      var form = $(this).serialize();
        $.ajax({
          type: "post",
          url: "update_category.php",
          data:  form ,
          success : function(response){
            if(response == 'error'){
              jQuery('.response').text('error');
            }else{
              jQuery('.response').text('success');
              jQuery('table.table').html('');
              $.ajax({
                type: "post",
                data: form ,
                url: "categories_functions.php",
                success : function(response){
                  if(response != ''){
                    jQuery('table.table').html(response);
                  }
                },
              });
            }
          },
        });
        jQuery(this).trigger("reset");
        jQuery(this).hide();
        jQuery('#category').show();
    });

</script>
</body>

</html>