<?php 
include("../Includes/connect.php");
// Check if the user is logged in.
if (!is_logged_in()) {
  // The user is not logged in, so redirect them to the login page.
  header('Location: index.php');
  exit;
}

// Check if the form has been submitted
if(isset($_POST['insert_post'])){
    $title=$_POST['title'];
    $topic=$_POST['topic'];
    $body=$_POST['body']; 
    // accessing Images
    $image1=$_FILES['image']['name'];
  
    // accessing tmp name
    $tmp_image1=$_FILES['image']['tmp_name'];
  
    // Condition to check for empty fields
    if($title=='' or $topic==''or $body=='' or $image1=='' ){

        echo "<script>alert('Please Fill all the available fields')</script>";
        exit();
     }
        move_uploaded_file($tmp_image1,"./blog-images/$image1");
     //code to check for repetition of data in the db
     $select_query ="select * from `blog_posts` where title= '$title' and body='$body'";
     $result_query =mysqli_query($con,$select_query);
     $number=mysqli_num_rows($result_query);
     if($number >0){
        echo"<script>alert('This article is already present in the database')</script>";
    }else{
        // insert query
        $insert_post_query="insert into `blog_posts` (title,topic,body,image,created_at) values('$title','$topic',
        '$body','$image1',NOW())";
        $result_query=mysqli_query($con,$insert_post_query);
        if($result_query){
            echo "<script>alert('post Succesfully added!')</script>";
        }

     }
    }
 

?>
<h2 class="text-center page-header">Add new Blog article</h2>
<div class="container-fluid">
<form action="" method="POST" enctype="multipart/form-data">
  <div class="row">
    <div class="col-6">
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title of the blog article">
      </div>
    </div>
    <div class="col-6">
      <div class="mb-3">
        <label for="topic" class="form-label">Topic</label>
        <select name="topic" id="" class="form-select">
                <option value="">Select a topic</option>
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
  <div class="mb-3">
    <label for="body" class="form-label">Body</label>
    <textarea class="form-control" id="body" name="body" rows="10"></textarea>
<script>
  CKEDITOR.replace('body');
</script>
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file" class="form-control" id="image" name="image">
  </div>
  <!-- Insert post button -->
  <div class="form-outline mb-4 text-center">
            <input type="submit" value="Insert post" class="btn-insert" name="insert_post">
        </div>
</form>
</div>
