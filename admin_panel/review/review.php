<?php
session_start();
    require_once('header.php');
    require_once('../../db/dbconfig.php');

    $review = $pdo_conn->prepare("SELECT * FROM review ORDER BY  review.id ASC ");
    $review->execute();
    $review_result = $review->fetchAll();

?>

<div class="container-fluid py-4 ">
        <div class="contianer bg-white my-4 p-4">
            <div class="row py-4">
                <div class="col-md-2">
                    <h2>Reviews</h2>           
                </div>

            </div>

            <div class="row">
            <table class="table table-striped">
                <tr>
                    <th scope="col" class="py-3">ID</th>
                    <th scope="col" class="py-3">Name</th>                  
                    <th scope="col" class="py-3">Pitches</th>
                    <th scope="col" class="py-3">Comment</th>
                    <th scope="col" class="py-3">Action</th>
                </tr>

                <?php
                if(!empty($review_result)){
                    foreach($review_result as $review_row){
                ?>
                <tr>
                    <td><?php echo $review_row['id']; ?></td>
                    <td><?php echo $review_row['name']; ?></td>           
                    <td><?php echo $review_row['location']; ?></td>
                    <td style="max-width: 300px;"><?php echo $review_row['comment']; ?></td>
                    <td>
                    <a href="edit.php?id=<?php echo $review_row['id'] ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                    <a href="delete.php?id=<?php echo $review_row['id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a></td>
                </tr>
                <?php                  
                        }
                    }
                ?>
            </table>
            </div>
        </div>
    </div>
<?php
    require_once('footer.php');
?>