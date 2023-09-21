<?php 
include("../Includes/connect.php");
?>
<div class="text-center">
  <h2 class="page-header">Puppies listed</h2>
</div>
<div class="container-fluid">
    <div class="row justify-content-center mt-3 mx-3">
    <table class="table table-lg table-dark table-striped table-bodered table-hover table-responsive-lg ">
        <thead class="text-light w-100">
            <tr>
                <th>#</th>
                <th>Puppy Name</th>
                <th>Location</th>
                <th>Owner</th>
                <th>Contact</th>
                <th>Breed</th>
                <th>Image</th>
                <th>Price</th>
                <th>Date Added</th>
            </tr>
        </thead>
        <tbody>
    <?php
            
              //  select query
            $select_query="select * from `puppies` ";
            $result_query=mysqli_query($con,$select_query);
             // success check
           if(mysqli_num_rows($result_query) > 0){
              //   show data
              foreach($result_query as $row){
                ?>
                <tr>
                <td><?=$row['puppy_id'];?></td>
                <td><?=$row['puppy_title']; ?></td>
                <td><?=$row['puppy_location']; ?></td>
                <td><?=$row['Owner_name']; ?></td>
                <td><?=$row['Owner_contact']; ?></td>
                <td><?=$row['breed_title']; ?></td>
                <td><img src="../Admin/puppy-images/<?php echo $puppy_image1 ; ?>" style="height: 50px;"></td>
                <td><?=$row['puppy_price']; ?></td>
                <td><?=$row['date']; ?></td>
            </tr>
            <?php
                 }
            }
            else{
              echo "<script>alert('There are no records to view!')</script>";
              exit();
             }    
      ?>
        </tbody>
</table>
    </div>

</div>
    
