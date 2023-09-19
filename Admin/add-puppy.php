
<?php


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>

<body class="bg-light">
    <!-- adminpage header -->
 <div class="container text-center ">
    <h2 class="page-header mb-4">Add new puppy</h2>
    <!-- form -->
    <!-- you have to add the enctype attribute to insert files that are not in text format eg. Images,videos -->
    <form action="" method="post" enctype="multipart/form-data">
        <!-- puppy-title -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="puppy_title"class="form-label ">Puppy Title</label>
            <input type="text" name="puppy_title" id="puppy_title" class="form-control"
             placeholder="Enter Puppy Name" autocomplete="off" required="required">
        </div>
        <!-- puppy description -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="puppy_description"class="form-label ">Puppy Description</label>
            <input type="text" name="Puppy_description" id="Puppy_description" class="form-control"
             placeholder="Enter Puppy Description" autocomplete="off" required="required">
        </div>
        <!-- Puppy keyword -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="Puppy_keywords"class="form-label ">Puppy keyword</label>
            <input type="text" name="Puppy_keywords" id="Puppy_keywords" class="form-control"
             placeholder="Enter Puppy keywords" autocomplete="off" required="required">
        </div>
         <!-- puppy Location -->
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="puppy_location"class="form-label ">Puppy location</label>
            <input type="text" name="puppy_location" id="puppy_location" class="form-control"
             placeholder="Enter puppy location" autocomplete="off" required="required">
        </div>
        <!-- Brands -->
        <div class="form-outline mb-4 w-50 m-auto">
            <select name="Puppy_breed" id="" class="form-select">
                <option value="">Select a Breed</option>
                
                <?php 
                // queries
                // $select_query="select * from `brands`";
                // $result_query=mysqli_query($con,$select_query);
                // // while loop
                // while($row=mysqli_fetch_assoc($result_query)){
                //     $brand_title=$row['brand_title'];
                //     $brand_id=$row['brand_id'];

                //     echo "<option value='$brand_id'>$brand_title</option>";
                // } -->
                
                ?>
            </select> 
        </div>
        <!-- image 1 -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="puppy_image1"class="form-label">Puppy Image 1</label>
            <input type="file" name="puppy_image1" id="puppy_image1" class="form-control"
             required="required">
        </div>
        <!-- image 2 -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="puppy_image2"class="form-label ">Puppy Image 2</label>
            <input type="file" name="puppy_image2" id="puppy_image2" class="form-control"
             required="required">
        </div>
        <!-- image 3 -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="puppy_image3"class="form-label ">Puppy Image 3</label>
            <input type="file" name="puppy_image3" id="puppy_image3" class="form-control"
             required="required">
        </div>
         <!-- puppy Price -->
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="puppy_price"class="form-label ">Puppy Price</label>
            <input type="text" name="puppy_price" id="puppy_price" class="form-control"
             placeholder="Enter puppy Price" autocomplete="off" required="required">
        </div>
         <!-- Insert puppy button -->
         <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" value="Insert puppy" class="btn-insert" name="insert_puppy">
        </div>
    </form>
 </div>

    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>