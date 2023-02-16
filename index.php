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
    
    

    <title> Header</title>
</head>


<body>
    <div class="navigationbar">

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">About Us</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="#">Link</a> -->
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Gallery</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>

    </div>
    </nav>

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
                    <th scope="col">Image</th>
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
  <button class="btn btn-primary" type="button">Button</button>
  <button class="btn btn-primary" type="button">Button</button>
</div>
    </button>
</div>



<div class="foo">
    welcom
</div>

</body>
<script src="js/bootstrap.bundle.js"></script>

</html>