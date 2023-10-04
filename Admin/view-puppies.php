<?php 
include("../Includes/connect.php");
if (!is_logged_in()) {
  // The user is not logged in, so redirect them to the login page.
  header('Location: index.php');
  exit;
}
?>
<div class="text-center">
  <h2 class="page-header">Puppies listed</h2>
</div>
<div class="container-fluid">
    <div class="row justify-content-center mt-3 mx-3">
    <table class="table table-lg table-dark table-striped table-bordered table-hover table-responsive-lg ">
        <thead class="text-light w-100">
            <tr>
                <th>#</th>
                <th>Puppy Name</th>
                <th>Puppy Description</th>
                <th>Location</th>
                <th>Owner</th>
                <th>Contact</th>
                <th>Breed</th>
                <th>Image</th>
                <th>Price</th>
                <th>Date Added</th>
                <th colspan="2">Operations</th>
            </tr>
        </thead>
        <tbody>
    <?php
            
              //  select query
            $select_query="select * from `puppies` ";
            $result_query=mysqli_query($con,$select_query);
             // success check
           while($row=mysqli_fetch_assoc($result_query)){
              //   show data
              $number=0;
                $puppy_id=$row['puppy_id'];
                $puppy_title=$row['puppy_title'];
                $puppy_desc=$row['puppy_desc'];
                $puppy_location=$row['puppy_location'];
                $Owner_name=$row['Owner_name'];
                $Owner_contact=$row['Owner_contact'];
                $breed_title=$row['breed_title'];
                $P_image_one=$row['P_image_one'];
                $puppy_price=$row['puppy_price'];
                $date=$row['date'];
                $number++;
                ?>
               
                
                <tr class='text-center'>
                <td><?php echo $number;?></td>
                <td><?php echo $puppy_title;?></td>
                <td><?php echo $puppy_desc;?></td>
                <td><?php echo $puppy_location;?></td>
                <td><?php echo $Owner_name;?></td>
                <td><?php echo $Owner_contact;?></td>
                <td><?php echo $breed_title;?></td>
                <td><?php echo"<img src='./puppy-images/$P_image_one' class='puppy-imagep'>"?></td>
                <td><?php echo $puppy_price;?></td>
                <td><?php echo $date;?></td>
                <td>
                <a href='dashboard.php?edit-puppy=<?php echo $puppy_id;?>' class='text-warning mx-2 fs-4'><i class='bi bi-pencil-square'></i></a>
				        <a href='#' class='text-warning mx-2 fs-4'><i class='bi bi-trash3-fill'></i></a>               
                </td>
                </tr>
                <?php
                 }  
      ?>
        </tbody>
</table>
    </div>

</div>
    
