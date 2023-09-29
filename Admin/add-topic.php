<?php  
include("../Includes/connect.php");
// Check if the user is logged in.
if (!is_logged_in()) {
    // The user is not logged in, so redirect them to the login page.
    header('Location: index.php');
    exit;
  }
  
if(isset($_POST['add-topic'])){
    $tp_title = $_POST['topic-title'];
    // code to avoid repetition of breeds
    $select_query ="select * from `topics` where topic_title= '$tp_title'";
    $result_query =mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_query);
    if($number >0){
        echo"<script>alert('This topic is already present in the database')</script>";
    }else{
    // code to insert breed input to the database
    $insert_query ="insert into `topics` (topic_title) values ('$tp_title')";//mysql insert query
    $result= mysqli_query($con,$insert_query);//execution
    if($result){
        echo "<script>alert('Topic added successfully')</script>";
    }
}}

?>
<h2 class="text-center page-header">Add new Blog topics</h2>
<!-- breeds input form -->
<div class="container-fluid add-breeds">
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text" id="basic-addon1">Topic</span>
  <input type="text" class="form-control" placeholder=" Add a new Topic"name="topic-title" aria-label="Topics">
</div>
<div class="input-group w-10 mb-2 m-auto">
    <input type="submit" value="Add Topic" class="btn-insert" name="add-topic">
</div>
</form>
</div>
