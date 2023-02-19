<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GWSC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar sticky-top navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" class="src" width="100%"
                    height="40"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <form class="d-flex" role="search" action="search_page.php" method="POST">
                    <input class="form-control me-2" name="keyword" type="search" placeholder="Search..." aria-label="Search"
                        id="navBarSearchForm">
                    <button class="btn btn-custom" type="submit">Search</button>
                </form>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="information.php">Information</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="pitches.php">Pitches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reviews.php">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="features.php">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="localattractions.php">Local Attractions</a>
                    </li>
                </ul>

                <div class="navbar nav">
             <?php
                 if(!empty($_SESSION['name'])){
                    
                    ?>
                    <li class="nav-item dropdown text-dark">
                        <a href="#" class="nav-link dropdown-toggle text-light" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>  <?php echo  $_SESSION['name'];?>
                        </a>
    
                        <ul class="dropdown-menu">
                            <li>
                                <a href="logout.php" class="dropdown-item text-dark">Logout</a>
                            </li>
                        </ul>
    
                    </li>
                    <?php
                    } else{
                        
                    ?>
                    <a href="register.php" class="btn btn-outline-secondary text-dark">
                        <?php echo  "Sign In";?>
                        </a>
                    <?php
                    }
                    ?>

            </div>                    
            </div>
        </div>
    </nav>