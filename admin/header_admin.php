<?php 
session_start();
if(!$_SESSION['fullname'])
{
	header('Location:index.php');
}
include '../conn.php';
$fname=$_SESSION['fullname'];
$q="SELECT fullname FROM admin WHERE fullname='$fname'";
$check=mysqli_query($conn,$q);
$row=mysqli_fetch_assoc($check);
@$name=$row['fullname'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>admin</title>

        <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/6365/6365967.png" type="image/x-icon"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="admin_reg.php" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            body{
                /*background: #e6e9ed;*/
            }
            .hvr:hover{
                background-color:black;
                color: white;
            }
            a.hvr:hover{
            	background-color: black;
            	border-radius: 3px;
            }
        </style>
    </head>
    <body>
        <div class="d-flex " id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom">
                    <a href="product.php">
                        <img src="https://cdn-icons-png.flaticon.com/512/6365/6365967.png" style="width:90px; height:90px; margin-left: 50px;">
                    </a>
                </div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action p-2 fw-bold" href="dashboard.php">
                        <font style="margin-left:65px;">
                            Dashboard
                        </font>
                    </a>
                    <a class="list-group-item list-group-item-action p-2 fw-bold" href="admin_data.php" style="background-color:;">
                        <font style="margin-left:65px;">
                            Admin Data
                        </font>
                    </a>
                    <a class="list-group-item list-group-item-action p-2 fw-bold" href="seo_data.php" style="background-color:;">
                        <font style="margin-left:65px;">
                            SEO Data
                        </font>
                    </a>
                    <a class="list-group-item list-group-item-action p-2 fw-bold" href="training_data.php" style="background-color:;">
                        <font style="margin-left:65px;">
                            Training / Placement
                        </font>
                    </a>
                    <a class="list-group-item list-group-item-action p-2 fw-bold" href="development_data.php" style="background-color:;">
                        <font style="margin-left:65px;">
                            Development
                        </font>
                    </a>
                    <a class="list-group-item list-group-item-action p-2 fw-bold" href="contact_data.php" style="background-color:;">
                        <font style="margin-left:65px;">
                            Contact Data
                        </font>
                    </a>
                     <a class="list-group-item list-group-item-action p-2 fw-bold" href="subscribedata.php" style="background-color:;">
                        <font style="margin-left:65px;">
                            Subscribe Data
                        </font>
                    </a>
                    <!--<a class="list-group-item list-group-item-action p-2 fw-bold" href="show_sub_category.php" style="background-color:;">
                        <font style="margin-left:65px;">
                            Show Sub Category
                        </font>
                    </a>
                    <a class="list-group-item list-group-item-action p-2 fw-bold" href="add_product.php" style="background-color:;">
                        <font style="margin-left:65px;">
                           Add product
                        </font>
                    </a>
                    <a class="list-group-item list-group-item-action p-2 fw-bold" href="show_product.php">
                        <font style="margin-left:65px;">
                            Show Product
                        </font>
                    </a> -->
                </div>
            </div>

            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light  border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-secondary hvr" id="sidebarToggle">
                            <i class="bi bi-grid-fill" style="color:white;"></i></button>
                            
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item ">
                                    <h4 class="btn">Hello <?php echo $row['fullname'];?></h4>
                                </li>
                                <li class="nav-item">
                                    <a href="logout.php" class="nav-link btn btn-danger hvr" style="color:white;">Logout</a>
                                </li>
                                <!-- <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

	