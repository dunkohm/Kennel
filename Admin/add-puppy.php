
<?php
include("../Includes/connect.php");
// Check if the user is logged in.
if (!is_logged_in()) {
    // The user is not logged in, so redirect them to the login page.
    header('Location: index.php');
    exit;
  }
  
if(isset($_POST['insert_puppy'])){
    $puppy_title=$_POST['puppy_title'];
    $puppy_description=$_POST['puppy_description'];
    $puppy_breed=$_POST['puppy_breed'];
    $puppy_location=$_POST['puppy_location'];
    $Owner_name=$_POST['puppy_owner'];
    $Ownwer_contact=$_POST['puppy_owner_contact'];
    $breed_title=$_POST['puppy_breed'];
    $puppy_price=$_POST['puppy_price'];
    
    // accessing Images
    $puppy_image1=$_FILES['puppy_image1']['name'];
    $puppy_image2=$_FILES['puppy_image2']['name'];
    $puppy_image3=$_FILES['puppy_image3']['name'];
    // accessing tmp name
    $tmp_image1=$_FILES['puppy_image1']['tmp_name'];
    $tmp_image2=$_FILES['puppy_image2']['tmp_name'];
    $tmp_image3=$_FILES['puppy_image3']['tmp_name'];
    // Condition to check for empty fields
    if($puppy_title=='' or $puppy_description==''or $puppy_breed=='' or $puppy_image1=='' or $puppy_image2=='' or $puppy_image3=='' or $puppy_price==''){

        echo "<script>alert('Please Fill all the available fields')</script>";
        exit();
     }
        move_uploaded_file($tmp_image1,"./puppy-images/$puppy_image1");
        move_uploaded_file($tmp_image2,"./puppy-images/$puppy_image2");
        move_uploaded_file($tmp_image3,"./puppy-images/$puppy_image3");

        // insert query
        $insert_puppy_query="insert into `puppies` (puppy_title,puppy_desc,puppy_location,Owner_name,Owner_contact,breed_title,P_image_one,P_image_two,P_image_three,puppy_price,date) values('$puppy_title','$puppy_description',
        '$puppy_location','$Owner_name','$Ownwer_contact','$breed_title','$puppy_image1','$puppy_image2','$puppy_image3','$puppy_price',NOW())";
        $result_query=mysqli_query($con,$insert_puppy_query);
        if($result_query){
            echo "<script>alert('puppy Succesfully added!')</script>";
        }

     }
 

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
            <input type="text" name="puppy_description" id="puppy_description" class="form-control"
             placeholder="Enter Gender,Age, Color,Location,Characters" autocomplete="off" required="required">
        </div>
         <!-- puppy Location -->
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="puppy_location"class="form-label ">Puppy location</label>
            <input type="text" name="puppy_location" id="puppy_location" class="form-control"
             placeholder="Enter puppy location" autocomplete="off" required="required">
        </div>
         <!-- puppy Owner name -->
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="puppy_owner"class="form-label ">Puppy Owner name</label>
            <input type="text" name="puppy_owner" id="puppy_owner" class="form-control"
             placeholder="Enter puppy owner's name" autocomplete="off" required="required">
        </div>
        <!-- puppy Owner contact -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="puppy_owner_contact"class="form-label ">Puppy Owner name</label>
            <input type="text" name="puppy_owner_contact" id="puppy_owner_contact" class="form-control"
             placeholder="Enter puppy owner's Contact" autocomplete="off" required="required">
        </div>
        <!-- Breeds -->
        <div class="form-outline mb-4 w-50 m-auto">
            <select name="puppy_breed" id="" class="form-select">
                <option value="">Select a Breed</option>
                <?php 
                //queries
                $select_query="select * from `breeds`";
                $result_query=mysqli_query($con,$select_query);
                // while loop
                while($row=mysqli_fetch_assoc($result_query)){
                    $breed_title=$row['breed_title'];
                    $breed_id=$row['breed_id'];
                    echo "<option value='$breed_title'>$breed_title</option>";
                }
                
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