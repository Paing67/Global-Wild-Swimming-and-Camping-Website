<?php
    require_once('../../db/dbconfig.php');
    require_once('header.php');
    $id = $_GET['id'];

 
    $category = $pdo_conn->prepare("SELECT * FROM category WHERE id=".$id);
    $category->execute();
    $category_result = $category->fetchAll();

    // var_dump($dataset);
?>

<div class="container my-4 py-4 dashboard-bg">
        <div class="row">
            <div class="col-md-6 bg-white py-4 mx-auto">

            <?php
                foreach($category_result as $category_row){
            ?>
                <form action="update.php?id=<?php echo $category_row['id']; ?>" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Category</label>
                    <input type="text" name="name" value="<?php echo $category_row['c_name']; ?>" class="form-control" id="name" placeholder="Name">
                </div>

                <button type="submit" class="btn btn-success">Save</button>
                <a href="category.php" class="btn btn-danger">Cancel</a>
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
<?php
    require_once('footer.php');
?>