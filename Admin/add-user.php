<?php  
include("../Includes/connect.php");
// Check if the user is logged in.
if (!is_logged_in()) {
    // The user is not logged in, so redirect them to the login page.
    header('Location: index.php');
    exit;
  }
  
if(isset($_POST['add-user'])){
    $name=$_POST['user-name'];
    $email=$_POST['user-email'];
    $password=$_POST['user-password'];
    $hashpass=password_hash($password,PASSWORD_DEFAULT);//Password hash method
    $user_confPassword=$_POST['user-Confpassword'];
    // code to avoid repetition of users
    $select_query ="select * from `users` where username= '$name' or email='$email'";
    $result_query =mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_query);
    if($number >0){
        echo"<script>alert('This User is already present in the database')</script>";
        // code to check if passwords match
    }elseif($password!=$user_confPassword) {
        echo "<script>alert('Passwords do not match!')</script>";
    }else{
    // code to add users input to the database
    $insert_query ="insert into `users` (username,email,password) values ('$name','$email','$hashpass')";//mysql insert query
    $result= mysqli_query($con,$insert_query);//execution
    if($result){
        echo "<script>alert('User added successfully')</script>";
    }
    // code to check if passwords match
}
}

?>
<h2 class="text-center page-header">Add new User</h2>
<!-- breeds input form -->
<div class="container-fluid add-breeds">
<form action="" method="post" class="mb-2">
 <!-- Username -->
 <div class="form-outline mb-4 w-50 m-auto">
            <label for="user_name"class="form-label ">Username</label>
            <input type="text" name="user-name" id="user_name" class="form-control"
             placeholder="Enter Username" autocomplete="off" required="required">
        </div>
        <!-- email -->
 <div class="form-outline mb-4 w-50 m-auto">
            <label for="email"class="form-label ">Email</label>
            <input type="email" name="user-email" id="email" class="form-control"
             placeholder="Enter User email" autocomplete="off" required="required">
        </div>
        <!-- password -->
 <div class="form-outline mb-4 w-50 m-auto">
            <label for="password"class="form-label ">Password</label>
            <input type="password" name="user-password" id="password" class="form-control"
             placeholder="Enter User password" autocomplete="off" required="required">
        </div>
               <!-- confirm password -->
 <div class="form-outline mb-4 w-50 m-auto">
            <label for="confirm_password"class="form-label ">Confirm Password</label>
            <input type="password" name="user-Confpassword" id="confirm_password" class="form-control"
             placeholder="Confirm password" autocomplete="off" required="required">
        </div>
<div class="input-group mb-3 justify-content-center">
    <input type="submit" value="Add user" class="btn-insert" name="add-user">
</div>
</form>
</div>
