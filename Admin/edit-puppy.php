<?php
if(isset($_GET['edit-puppy'])){
    $edit_id=$_GET['edit-puppy'];
    $get_pupppy= "select * from puppies where puppy_id=$edit_id";
    $result_puppy=mysqli_query($con,$get_pupppy);
    $row=mysqli_fetch_assoc($result_puppy);

    $puppy_id=$row['puppy_id'];
    $puppy_title=$row['puppy_title'];
    $puppy_desc=$row['puppy_desc'];
    $puppy_location=$row['puppy_location'];
    $Owner_name=$row['Owner_name'];
    $Owner_contact=$row['Owner_contact'];
    $breed_title=$row['breed_title'];
    $P_image_one=$row['P_image_one'];
    $P_image_two=$row['P_image_two'];
    $P_image_three=$row['P_image_three'];
    $puppy_price=$row['puppy_price'];
    $date=$row['date'];
}



?>

<div class="container">
    <h1 class="text-center page-header">Edit puppy</h1>

    <form action="" method="post" enctype="multipart/form-data">
         <!-- puppy-title -->
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="puppy_title"class="form-label ">Puppy Title</label>
            <input type="text" name="puppy_title" id="puppy_title" class="form-control"
             placeholder="Enter Puppy Name" autocomplete="off" required="required" value="<?php echo $puppy_title;?>">
        </div>
         <!-- puppy description -->
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="puppy_description"class="form-label ">Puppy Description</label>
            <input type="text" name="puppy_description" id="puppy_description" class="form-control"
             placeholder="Enter Puppy Description" autocomplete="off" required="required"value="<?php echo $puppy_desc;?>">
        </div>
        <!-- puppy Location -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="puppy_location"class="form-label ">Puppy location</label>
            <input type="text" name="puppy_location" id="puppy_location" class="form-control"
             placeholder="Enter puppy location" autocomplete="off" required="required" value="<?php echo $puppy_location;?>">
        </div>
         <!-- puppy Owner name -->
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="puppy_owner"class="form-label ">Puppy Owner name</label>
            <input type="text" name="puppy_owner" id="puppy_owner" class="form-control"
             placeholder="Enter puppy owner's name" autocomplete="off" required="required" value="<?php echo $Owner_name;?>">
        </div>
        <!-- puppy Owner contact -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="puppy_owner_contact"class="form-label ">Puppy Owner Contact</label>
            <input type="text" name="puppy_owner_contact" id="puppy_owner_contact" class="form-control"
             placeholder="Enter puppy owner's Contact" autocomplete="off" required="required" value="<?php echo $Owner_contact;?>">
        </div>
          <!-- Breeds -->
          <div class="form-outline mb-4 w-50 m-auto">
            <select name="puppy_breed" id="" class="form-select">
                <option value=""><?php echo $breed_title;?></option>
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
            <div class="d-flex ">
            <input type="file" name="puppy_image1" id="puppy_image1" class="form-control"
             required="required" class="w-90 m-auto">
             <img src="./puppy-images/<?php echo $P_image_one;?>" class="puppy-imagep1 p-2" alt="" srcset="">
             </div>
        </div>
       <!-- image 2 -->
       <div class="form-outline mb-4 w-50 m-auto">
            <label for="puppy_image2"class="form-label">Puppy Image 2</label>
            <div class="d-flex ">
            <input type="file" name="puppy_image2" id="puppy_image2" class="form-control"
             required="required" class="w-90 m-auto">
             <img src="./puppy-images/<?php echo $P_image_two;?>" class="puppy-imagep1 p-2" alt="" srcset="">
             </div>
        </div>
       <!-- image 3 -->
       <div class="form-outline mb-4 w-50 m-auto">
            <label for="puppy_image3"class="form-label">Puppy Image 3</label>
            <div class="d-flex ">
            <input type="file" name="puppy_image3" id="puppy_image3" class="form-control"
             required="required" class="w-90 m-auto">
             <img src="./puppy-images/<?php echo $P_image_three;?>" class="puppy-imagep1 p-2" alt="" srcset="">
             </div>
        </div>
        <!-- puppy Price -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="puppy_price"class="form-label ">Puppy Price</label>
            <input type="text" name="puppy_price" id="puppy_price" class="form-control"
             placeholder="Enter puppy Price" autocomplete="off" required="required" value="<?php echo $puppy_price;?>">
        </div>
         <!-- Insert puppy button -->
         <div class="form-outline mb-4 w-50 m-auto text-center">
            <input type="submit" value="Update puppy" class="btn-insert" name="edit_puppy">
        </div>
    </form>
</div>
<!-- code for editing -->

<?php  
if(isset($_POST['edit_puppy'])){
    $puppy_title=$_POST['puppy_title'];
    $puppy_desc=$_POST['puppy_description'];
    $puppy_location=$_POST['puppy_location'];
    $Owner_name=$_POST['puppy_owner'];
    $Owner_contact=$_POST['puppy_owner_contact'];
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
    if($puppy_title=='' or $puppy_desc==''or $puppy_location=='' or $Owner_name==''or $Owner_contact==''or $breed_title==''or $puppy_image1=='' or $puppy_image2=='' or $puppy_image3=='' or $puppy_price==''){

        echo "<script>alert('Please Fill all the available fields')</script>";
        
     }else{
        move_uploaded_file($tmp_image1,"./puppy-images/$puppy_image1");
        move_uploaded_file($tmp_image2,"./puppy-images/$puppy_image2");
        move_uploaded_file($tmp_image3,"./puppy-images/$puppy_image3");
 // update query
 $update_puppy_query="update `puppies` set puppy_title='$puppy_title',puppy_desc='$puppy_desc',
 puppy_location='$puppy_location',Owner_name='$Owner_name',Owner_contact='$Owner_contact',
 breed_title='$breed_title',P_image_one='$puppy_image1',P_image_two='$puppy_image2',
 P_image_three='$puppy_image3',puppy_price='$puppy_price',date=NOW() where puppy_id='$edit_id'" ;
 $result_update=mysqli_query($con,$update_puppy_query);

 if($result_update){
    echo "<script>alert('Puppy has been updated successfully!')</script>";
    echo "<script>window.open('dashboard.php','_self')</script>";
 }
}


}


     
?>