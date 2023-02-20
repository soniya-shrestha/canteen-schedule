<?php
include('connect.php');
$sql = "SELECT id, dishname, price FROM tbl_schedule";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <title> Header</title>
</head>


<body>
    <div class="navigationbar">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="./about.php">About us</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./gallery.php">Gallery</a>
        </li>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </div>

    <div class="sab">
        <div class="wel">Welcome to<br></div>
        <div class="aadim">
            Aadim National College Canteen
        </div>
    </div>

    <div class="canteen">
        Today Special
    </div>
<div class="content">
<div class="imgcontent">
            
            </div>
    <table class="table">
      
    <thead>
        <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Dish Name </th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                    
              
                </tr>
            </thead>
            <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['dishname'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><button><a href="update.php" class="Order">Order</a></button></td>

                    
                
                </td>
                    
                </tr>
            <?php
                }
            }
            ?>
               
            </tbody>
        
               
    </table>
</div>

<div class="order">
    <button>
    <div class="d-grid gap-2 d-md-block">
  <a href="./Login.php"><button class="btn btn-primary" type="button" >Admin</button></a>
  <a href="./order.php"><button class="btn btn-primary" type="button">order</button></a>
</div>
    </button>
</div>



<div class="foo">

    <div class="disc">
         we care for you.
               healthy food <br> healthy mood
         </div>
         <div class="contact">
          hwlooo
          
         </div>
          <div class="map">
          skdjla
       </div>
    
</div>

</body>
<script src="js/bootstrap.bundle.js"></script>

</html>