<?php include('header.php');
require_once('db/dbconfig.php');
$review_statement = $pdo_conn->prepare("SELECT * FROM review ORDER BY id");
$review_statement->execute();
$review_result = $review_statement->fetchAll();
?>

<section id="reviewmain">
    <div class="container py-5">
        <div class="py-1 text-center">
            <img class="d-block mx-auto mb-5" src="images/Logo3.png" alt="" width="40%">
            <h2>Reviews</h2>
            <hr class="mb-4">
        </div>
        <div class="row">
            <?php
            if (!empty($review_result)) {
                foreach ($review_result as $row) {
                    ?>
                    <div class="card my-3">
                        <div class="card-header">
                            <?php echo $row['location']; ?>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>
                                    <?php echo $row['comment']; ?>
                                </p>
                                <footer class="blockquote-footer"><cite title="Source Title">
                                        <?php echo $row['name']; ?>
                                    </cite></footer>
                            </blockquote>
                        </div>
                    </div>
                <?php
                }
            }
            ?>

        </div>
        <hr class="mb-4">
        <h2 class="text-center py-1">Leave us a comment</h2>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="reviewsubmit.php" method="post">
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
                    </div>

                    <div class="mb-3">
                        <label for="location">Location</label>
                        <select class="custom-select d-block w-100" id="location" name="location" required>
                            <option selected="true" disabled="disabled">Choose...</option>
                            <option>Mount Cook National Park</option>
                            <option>The Alps</option>
                            <option>Bagan</option>
                            <option>The Toubkal Circuit</option>
                            <option>Simien Mountains Traverse</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="comment">Comment</label>
                        <textarea class="form-control " rows="5" aria-label="With textarea" placeholder=""
                            name="comment" required></textarea>
                    </div>
                    <input type="submit" value="Submit" id="contactsubmit" class="btn btn-lg btn-block">
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>


<?php include('footer.php'); ?>