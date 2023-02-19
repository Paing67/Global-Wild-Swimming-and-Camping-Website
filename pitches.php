<?php include('header.php');
require_once('db/dbconfig.php');
$msg = "";
if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
}

$pitches_statement = $pdo_conn->prepare("SELECT * FROM product WHERE category_id = '1' ORDER BY id ");
$pitches_statement->execute();
$pitches_result = $pitches_statement->fetchAll();

$tcpitch_statement = $pdo_conn->prepare("SELECT * FROM product WHERE category_id = '3' ORDER BY id ");
$tcpitch_statement->execute();
$tcpitch_result = $tcpitch_statement->fetchAll();

$mpitch_statement = $pdo_conn->prepare("SELECT * FROM product WHERE category_id = '2' ORDER BY id ");
$mpitch_statement->execute();
$mpitch_result = $mpitch_statement->fetchAll();

?>

<div class="container py-5">
    <div class="py-1 text-center">
        <img class="d-block mx-auto mb-5" src="images/Logo3.png" alt="" width="40%">
        <h2>Pitch Types and Availability</h2>
        <hr class="mb-4">
    </div>
    <br />
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <form class="card card-sm " role="search" action="search_page.php" method="POST">
                <div class="card-body row no-gutters align-items-center">
                    <div class="col">
                        <input class="form-control form-control-lg form-control-borderless" name="keyword"
                            type="search" " placeholder=" Search....">
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button class="btn btn-lg btn-success" id="pitchsearch" type="submit"><i
                                class="bi bi-search fs-5"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <?php
        if ($msg == "error") {
            ?>
            <div class="row">
                <div class="col-md-4 mx-auto mt-2">
                    <div class="alert alert-danger" role="alert">
                        <strong class="px-4">Please Login your account.</strong>
                        <a href="login.php" class="btn text-decoration-none btn-sm" id="contactsubmit">Login Here!</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <!--end of col-->
        <div class="row py-5" id="pitches">
            <a id="tentpitch">
                <h2 class="py-3 text-center">Tent Pitch</h2>
            </a>
            <div class="row">
                <?php
                if (!empty($pitches_result)) {
                    foreach ($pitches_result as $row) {
                        ?>
                        <div class="col-md-6">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="images/<?php echo $row['image']; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h2>
                                        <?php echo $row['name']; ?>
                                    </h2>
                                    <p>
                                        <?php echo $row['price']; ?>
                                    </p>
                                    <p>
                                        <?php echo $row['description']; ?>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="order.php?id=<?php echo $row['id']; ?>" class="btn text-decoration-none "
                                                id="contactsubmit">Rent Now
                                            </a>
                                        </div>
                                        <small class="text-muted">
                                            <?php echo $row['stock']; ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>

            <hr class="mb-4 mt-4">
            <a id="tourcaravan">
                <h2 class="py-3 text-center">Touring Caravan Pitch</h2>
            </a>
            <div class="row">
                <?php
                if (!empty($tcpitch_result)) {
                    foreach ($tcpitch_result as $row) {
                        ?>
                        <div class="col-md-6">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="images/<?php echo $row['image']; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h2>
                                        <?php echo $row['name']; ?>
                                    </h2>
                                    <p>
                                        <?php echo $row['price']; ?>
                                    </p>
                                    <p>
                                        <?php echo $row['description']; ?>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="order.php?id=<?php echo $row['id']; ?>" class="btn text-decoration-none"
                                                id="contactsubmit">Rent Now
                                            </a>
                                        </div>
                                        <small class="text-muted">
                                            <?php echo $row['stock']; ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <hr class="mb-4 mt-4">
            <a id="motorhome">
                <h2 class="py-3 text-center">Motorhome Pitch</h2>
            </a>
            <div class="row">
                <?php
                if (!empty($mpitch_statement)) {
                    foreach ($mpitch_result as $row) {
                        ?>
                        <div class="col-md-6">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="images/<?php echo $row['image']; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h2>
                                        <?php echo $row['name']; ?>
                                    </h2>
                                    <p>
                                        <?php echo $row['price']; ?>
                                    </p>
                                    <p>
                                        <?php echo $row['description']; ?>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="order.php?id=<?php echo $row['id']; ?>" class="btn text-decoration-none"
                                                id="contactsubmit">Rent Now
                                            </a>
                                        </div>
                                        <small class="text-muted">
                                            <?php echo $row['stock']; ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>


        </div>
    </div>
</div>
</div>

<?php include('footer.php'); ?>