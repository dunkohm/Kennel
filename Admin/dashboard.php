<?php
session_start();
include('../Includes/connect.php');
include('main functions/functions.php');
// Check for the cookie on every page load. If the cookie exists, the user is logged in.
// Check if the user is logged in.
if (!is_logged_in()) {
  // The user is not logged in, so redirect them to the login page.
  header('Location: index.php');
  exit;
}

// The user is logged in, so continue with the rest of your code.
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <title>The Kennel -Admin</title>
    <style>
      .btn-logout{
    text-decoration: none;
    font-size: 22px;
    font-family: 'Playfair Display', serif;
    color:#8B4513;
}
.stats{
    background-color: #FFA500;
    font-family: 'Playfair Display', serif;
    font-size: 24x;
    margin: 0;

}
.stats p{
    color: #8B4513;
    
}
.puppy-imagep{
  width:70px;
  object-fit:contain;
}
.puppy-imagep1{
  width:70px;
  object-fit:contain;
}
.nav{
  margin:0;
}
.navbar{
  margin:0;
}
    </style>
  </head>
  <body class="bg-light">
    <div class="container-fluid">
        <div class="row ">
            <!-- admin header -->
                <div class="admin-header text-center d-flex">
			      <img src="../Images/logo.png" alt="The Kennel">
            <?php
            if(!isset($_SESSION['username'])){
              echo"<h3 class='salutation'>Fuck you<span class='text-warning' >Stranger!</span>!</h3>";
            }else{
              echo"<h3 class='salutation'>Welcome back <span class='text-warning' >".$_SESSION['username']."</span>!</h3>";
            }
            ?>
                 </div>
                 <div class="nav navbar p-2 stats ">
                  <p class="mt-2">Breeds Available: 25</p>
                  <p class="mt-2">Total Listed : 803</p>
                  <p class="mt-2">Total Blogs Published: 45</p>
                  <p class="mt-2">Total Users : 2</p>
                  <p class="mt-2">Topics: 12</p>
                 <a href="dashboard.php?logout" class="btn-logout">Log Out</a>
                 </div>
                 
        </div>
        <!-- Menu buttons -->
        <div class="row mt-2">
            
            <div class="nav navbar menu-links p-2">
  <a href="dashboard.php?insert-breed" class="">Add Breed</a>
  <a href="dashboard.php?view-breed" class="">View Breed</a>
  <a href="dashboard.php?add-topic" class="">Add Topic</a>
  <a href="dashboard.php?view-topics" class="">View Topic</a>
  <a href="dashboard.php?insert-puppy" class="">Insert Puppies</a>
  <a href="dashboard.php?view-puppies" class="">View Puppies</a>
  <a href="dashboard.php?add-post" class="">Insert Blog</a>
  <a href="dashboard.php?view-blog" class="">View Blog</a>
  <a href="dashboard.php?add-user" class="">Add Users</a>
  <a href="#" class="">View Users</a>
  
                
        </div>
        </div>
        <div class="row mt-5">
            <?php 
   //  getter function insert breeds
    if(isset($_GET['insert-breed'])){
      include('add-breed.php');
  }
//   getter function insert puppy
    if(isset($_GET['insert-puppy'])){
        include('add-puppy.php');
   }
   //   getter function insert post
   if(isset($_GET['add-post'])){
    include('add-post.php');
}
 //   getter function insert topic
 if(isset($_GET['add-topic'])){
  include('add-topic.php');
}
 //   getter function view topics
 if(isset($_GET['view-topics'])){
  include('view-topics.php');
}
 //   getter function view puppies
 if(isset($_GET['view-puppies'])){
  include('view-puppies.php');
}
 //   getter function view blog
 if(isset($_GET['view-blog'])){
  include('view-blog.php');
}
// getter function view blog
if(isset($_GET['add-user'])){
  include('add-user.php');
}
if(isset($_GET['edit-puppy'])){
  include('edit-puppy.php');
}
if(isset($_GET['edit-blog'])){
  include('edit-blog.php');
}
if(isset($_GET['logout'])){
  echo"<script>alert('Are you sure you want to log out?')</script>";
  session_cache_expire();
  session_destroy();
  header('Location: index.php');
}
    ?>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>