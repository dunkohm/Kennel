<?php 
include("../Includes/connect.php");
?>
<div class="text-center">
  <h2 class="page-header">Blogs listed</h2>
</div>
<div class="container-fluid">
    <div class="row justify-content-center mt-3 mx-3">
    <table class="table table-lg table-dark table-striped table-bodered table-hover table-responsive-lg ">
        <thead class="text-light w-100">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Topic</th>
                <th>Body</th>
                <th>Image</th>
                <th>Created at</th>
                <th colspan="2">Operations</th>
              
            </tr>
        </thead>
        <tbody>
    <?php
            
              //  select query
            $select_query="select * from `blog_posts` ";
            $result_query=mysqli_query($con,$select_query);
             // success check
           if(mysqli_num_rows($result_query) > 0){
              //   show data
              foreach($result_query as $row){
                ?>
                <tr>
                <td><?=$row['blog_id'];?></td>
                <td><?=$row['title']; ?></td>
                <td><?=$row['topic']; ?></td>
                <td><?=$row['body']; ?></td>
                <td><img src="../Admin/puppy-images/<?php echo $puppy_image1 ; ?>" style="height: 50px;"></td>
                <td><?=$row['created_at']; ?></td>
                <td>
                <a href="#" class="text-warning mx-2 fs-4"><i class="bi bi-pencil-square"></i></a>
				<a href="#" class="text-warning mx-2 fs-4"><i class="bi bi-trash3-fill"></i></a>
                <a href="#" class="text-warning mx-2 fs-4"><i class="bi bi-file-earmark-arrow-up-fill"></i></a>
                <a href="#" class="text-warning fs-4"><i class="bi bi-file-earmark-arrow-down-fill"></i></a>
               
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
    
