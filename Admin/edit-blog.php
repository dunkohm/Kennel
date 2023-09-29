<?php
if(isset($_GET['edit-blog'])){
    $edit_id=$_GET['edit-blog'];
    $get_blog= "select * from blog_posts where blog_id=$edit_id";
    $result_blog=mysqli_query($con,$get_blog);
    $row=mysqli_fetch_assoc($result_blog);
    $blog_id=$row['blog_id'];
    $title=$row['title'];
    $topic=$row['topic'];
    $body=$row['body'];
    $image=$row['image'];
    $created_at=$row['created_at'];
    
}

?>

<div class="container">
    <h1 class="text-center page-header">Edit Blog article.</h1>

    <form action="" method="post" enctype="multipart/form-data">
         <!-- Blog-title -->
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="puppy_title"class="form-label ">Blog Title</label>
            <input type="text" name="blog_title" id="blog_title" class="form-control"
             placeholder="Enter blog title" autocomplete="off" required="required" value="<?php echo $title;?>">
        </div>
        <div class="mb-3 w-50 m-auto">
        <label for="topic" class="form-label">Topic</label>
        <select name="topic" id="" class="form-select">
                <option value=""><?php echo $topic;?></option>
                <?php 
                //queries
                $select_query="select * from `topics`";
                $result_query=mysqli_query($con,$select_query);
                // while loop
                while($row=mysqli_fetch_assoc($result_query)){
                    $topic_title=$row['topic_title'];
                    $topic_id=$row['topic_id'];
                    echo "<option value='$topic_title'>$topic_title</option>";
                }
                
                ?>
            </select> 
      </div>
    </div>
  </div>
        <div class="mb-3 p-4">
    <label for="body" class="form-label">Body</label>
    <textarea class="form-control" id="body" name="body" rows="10" ></textarea>
<script>
  CKEDITOR.replace('body');
</script>
  </div>
         <!-- image 1 -->
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="blog_image1"class="form-label">blog Image </label>
            <div class="d-flex ">
            <input type="file" name="image" id="image" class="form-control"
             required="required" class="w-90 m-auto">
             <img src="./blog-images/<?php echo $image;?>" class="puppy-imagep1 p-2" alt="" srcset="">
             </div>
        </div>
        
         
         <!-- Insert blog button -->
         <div class="form-outline mb-4 w-50 m-auto text-center">
            <input type="submit" value="Update Blog" class="btn-insert" name="edit_blog">
        </div>
    </form>
</div>
<!-- code for editing -->

<?php  
if(isset($_POST['edit_blog'])){
    $title=$_POST['blog_title'];
    $topic=$_POST['topic'];
    $body=$_POST['body'];
    // accessing Images
    $image1=$_FILES['image']['name'];
   
    // accessing tmp name
    $tmp_image1=$_FILES['image']['tmp_name'];
    
   
    // Condition to check for empty fields
    if($title=='' or $topic==''or $body=='' or $image1==''){

        echo "<script>alert('Please Fill all the available fields')</script>";
        
     }else{
        move_uploaded_file($tmp_image1,"./blog-images/$image1");
        
 // update query
 $update_blog_query="update `blog_posts` set title='$title',topic='$topic',
 body='$body',image='$image1',created_at=NOW() where blog_id='$edit_id'" ;
 $result_update=mysqli_query($con,$update_blog_query);

 if($result_update){
    echo "<script>alert('Blog article has been updated successfully!')</script>";
    echo "<script>window.open('dashboard.php','_self')</script>";
 }
}


}


     
?>