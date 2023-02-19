
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/style.css">
    
</head>

<body>

    <!-- place navbar here -->
   <div class="container-fluid ">
      <div class="row">
    <nav class="col-2 bg-dark">
          <h1 class="h-4 py-3 text-center fw-bold">
            <span class="d-none d-lg-inline text-light"><img src="../../images/logo4.png" alt="" class="src" width="100%"
          height="auto">Dashboard</span>
          </h1>

          <hr class="divider text-white my-0">

          <li class="nav-item">
            <a href="../dashboard.php" class="nav-link text-light"><i class="bi bi-table fs-5 pe-2"></i>
              User</a>
          </li>

          <li class="nav-item">
            <a href="../booking/booking.php" class="nav-link text-light"><i class="bi bi-card-list fs-5 pe-2"></i>
              Booking</a>
          </li>

          <li class="nav-item">
            <a href="review.php" class="nav-link text-light"><i class="bi bi-card-list fs-5 pe-2"></i>
              Review</a>
          </li>

          <li class="nav-item">
            <a href="../product/product.php" class="nav-link text-light"><i class="bi bi-bag-fill fs-5 pe-2"></i>
              Products</a>
          </li>

          <li class="nav-item">
            <a href="../contact/contact.php" class="nav-link text-light"><i class="bi bi-bag-fill fs-5 pe-2"></i>
              Contact</a>
          </li>

          <li class="nav-item">
          <a href="../category/category.php" class="nav-link text-light"><i class="bi bi-bag-fill fs-5 pe-2"></i>
            Category</a>
        </li>
    </nav>

        <main class="col-10">
        <nav class="navbar navbar-expand-lg navbar-white bg-white">
            <div class="flex-fill"></div>

            <div class="navbar nav bg-white">

            
        <?php
                if(!empty($_SESSION['email'])){
                    
                ?>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-circle-user fs-4"></i> <?php echo  $_SESSION['name'];?>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="#" class="dropdown-item text-dark">User Profile</a>
                        </li>
    
                        <li>
                            <a href="../../logout.php" class="dropdown-item text-dark">Logout</a>
                        </li>
                    </ul>

                </li>
                <?php
                } else{
                    
                ?>
                <a href="../../login.php" class="btn" id="contactsubmit">
                    <?php echo  "Sign In";?>
                    </a>
                <?php
                }
                ?>

            </div>
          </nav>
        
    
 