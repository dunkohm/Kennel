<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>The Kennel -Login</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <style>
    body{
        margin:0;
        padding:0;
        box-sizing: border-box;
        background-color:#8B4513;
        overflow: hidden;
    }
    .logo img{
    height: 200px;
    width: 200px;
}
  </style>
  <body>
  <div class="container-fluid m-0 p-0">
    <div class="text-center logo" >
    <img src="../Images/logo.png" class="p-2"alt="The Kennel">
    <h2 class="page-header">Admin Login</h2>
    </div>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-10 col-xl-4 mt-2 p-2">
                <form action="" method="post" >
                    <!-- username field -->
                <div class="form-outline mb-3">
                    <label for="username" class="form-label text-light">Username</label>
                    <input type="text" id="username" class="form-control" placeholder="Enter your username" required="required" name="user_username" />
                </div>
                <!-- Password field -->
                <div class="form-outline mb-3">
                    <label for="Password" class="form-label text-light">Password</label>
                    <input type="password" id="Password" class="form-control" placeholder="Enter your new Password" required="required" name="user_userpass" />
                </div>
                <!-- Login button -->
                <div class="mt-4 pt-2 text-center">
                    <input type="button" value="Login" class="btn-login px-4 py-2" name="user_login"></div>
                </form>
            </div>
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