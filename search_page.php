<?php include('db/dbconfig.php'); ?>
<?php
include('header.php');
$keyword = $_POST['keyword'];
// var_dump($keyword);
// die();
$pdo_statement = $pdo_conn->prepare("SELECT * FROM product WHERE name='" . $keyword . "' ORDER BY id");
// var_dump($pdo_statement);
// die();
$pdo_statement->execute();
$result = $pdo_statement->fetchALL();
?>
<div class="container py-5">
    <div class="py-1 text-center">
        <img class="d-block mx-auto mb-5" src="images/Logo3.png" alt="" width="40%">
        <h2>Results</h2>
        <hr class="mb-4">
    </div>
    <div class="row">
        <div class="col-md-6">
            <?php if ($result) {
                foreach ($result as $row) {
                    ?>
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
                    <?php
                }
            } else {
                echo "not found";
            } ?>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>