<?php  
include("../Includes/connect.php");
if (isset($_COOKIE['session_id'])) {
    // Get the user's username from the session.
    $username = $_SESSION['username'];

    // Continue with the rest of your code.
} else {
    // The user is not logged in, so redirect them to the login page.
    header('Location: login.php');
    exit;
}
if(isset($_POST['insert-breed'])){
    $br_title = $_POST['breed-title'];
    // code to avoid repetition of breeds
    $select_query ="select * from `breeds` where breed_title= '$br_title'";
    $result_query =mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_query);
    if($number >0){
        echo"<script>alert('This Breed is already present in the database')</script>";
    }else{
    // code to insert breed input to the database
    $insert_query ="insert into `breeds` (breed_title) values ('$br_title')";//mysql insert query
    $result= mysqli_query($con,$insert_query);//execution
    if($result){
        echo "<script>alert('Breed has been added successfully')</script>";
    }
}}

?>
<h2 class="text-center page-header">Insert new Breeds</h2>
<!-- breeds input form -->
<div class="container-fluid add-breeds">
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text" id="basic-addon1">Breeds</span>
  <input type="text" class="form-control" placeholder=" insert Breed"name="breed-title" aria-label="Breeds">
</div>
<div class="input-group w-10 mb-2 m-auto">
    <input type="submit" value="Insert Breed" class="btn-insert" name="insert-breed">
</div>
</form>
</div>
