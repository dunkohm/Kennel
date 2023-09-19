<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>The Kennel -Admin</title>
  </head>
  <body class="bg-light">
    <div class="container-fluid">
        <div class="row ">
            <!-- admin header -->
                <div class="admin-header text-center d-flex">
			      <img src="../Images/logo.png" alt="The Kennel">
                  <h3 class="salutation">Welcome back Admin!</h3>
                 </div>
        </div>
        <!-- Menu buttons -->
        <div class="row">
            <div class="menu-links text-center mt-2">
            <a href="index.php?insert-breed" class="">Add Breed</a>
            <a href="#" class="">Insert Puppies</a>
            <a href="#" class="">View Puppies</a>
            <a href="#" class="">Insert Blog</a>
            <a href="#" class="">View Blog</a>
            <a href="#" class="">Add Users</a>
            <a href="#" class="">View Users</a>
            <a href="#" class="">Log Out</a>
            </div>
        </div>
        <div class="row">
            <!-- User instruction Goes here -->
            <h2 class="text-center my-5">User instructions Go here!</h2>
            <?php 
   //  getter function insert breeds
    if(isset($_GET['insert-breed'])){
      include('add-breed.php');
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