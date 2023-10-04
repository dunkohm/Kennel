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
  <h2 class="page-header">Blogs listed</h2>
</div>
<div class="container-fluid">
    <div class="row justify-content-center mt-3 mx-3">
    <table class="table table-lg table-dark table-striped table-bordered table-hover table-responsive-lg ">
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
           while($row=mysqli_fetch_assoc($result_query)){
              //   show data
                $number=0;
                $blog_id =$row['blog_id'];
                $title=$row['title'];
                $topic=$row['topic'];
                $body=$row['body'];
                $image=$row['image'];
                $created_at=$row['created_at'];
                $number++;
                ?>
               
                
                <tr class='text-center'>
                <td><?php echo $number;?></td>
                <td><?php echo $title;?></td>
                <td><?php echo $topic;?></td>
                <td><?php echo $body;?></td>
                <td><?php echo"<img src='./blog-images/$image' class='puppy-imagep'>"?></td>
                <td><?php echo $created_at;?></td>
                <td>
                <a href='dashboard.php?edit-blog=<?php echo $blog_id;?>' class='text-warning mx-2 fs-4'><i class='bi bi-pencil-square'></i></a>
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
    
