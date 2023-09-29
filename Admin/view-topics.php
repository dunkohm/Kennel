<?php 
include("../Includes/connect.php");
// Check if the user is logged in.
if (!is_logged_in()) {
  // The user is not logged in, so redirect them to the login page.
  header('Location: index.php');
  exit;
}

?>
<div class="text-center">
  <h2 class="page-header">Topics listed</h2>
</div>
<div class="container-fluid">
    <div class="row justify-content-center mt-3">
    <table class="table table-dark table-striped table-bodered table-hover table-sm w-50">
        <thead class="text-light ">
            <tr>
                <th>#</th>
                <th>Topic Name</th>
                <th colspan="2">Operations</th>
            </tr>
        </thead>
        <tbody>
    <?php
            
              //  select query
            $select_query="select * from `topics` ";
            $result_query=mysqli_query($con,$select_query);
             // success check
           if(mysqli_num_rows($result_query) > 0){
              //   show data
              foreach($result_query as $row){
                ?>
                <tr>
                <td><?=$row['topic_id'];?></td>
                <td><?=$row['topic_title']; ?></td>
                <td>
                <a href="#" class="text-warning mx-2"><i class="bi bi-pencil-square"></i></a>
									<a href="#" class="text-warning"><i class="bi bi-trash3-fill"></i></a>
                </td>
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
    
