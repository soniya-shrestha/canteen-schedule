<?php
include('../../connect.php');
if(isset($_POST['submit'])) {
    $dishname = $_POST['dishname'];
    $price = $_POST['price'];


    $insertQuery = "INSERT INTO tbl_schedule (dishname, price) 
    VALUES ('$dishname', '$price')";
    $result = $conn->query($insertQuery);

    if($conn->insert_id){
        echo "Page created successfully";
    }else{
        echo $conn->error;
    }

    header('Location:?page=pages&action=list'); // Redirect to page list
  
}


?>
<link rel="stylesheet" href="style.css">
<div class="create">
    
<form action="" method="post">
<div class="form-group">
    <label for="">Dishname</label>
    <input class="form-control" type="text" name="dishname" required>
</div>
<div class="form-group">
    <label for="">Price</label>
    <input class="form-control" type="text" name="price" required>
</div>
<!-- <div class="form-group">
    <label for="">Image</label>
    <input class="form-control" type="file" name="image" required>
</div> -->
     <input type="submit" name="submit">
</form>

</div>