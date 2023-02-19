<?php
    require_once('header.php');
    require_once('../../db/dbconfig.php');
    $category = $pdo_conn->prepare("SELECT * FROM category ORDER BY  category.id ASC ");
    $category->execute();
    $category_result = $category->fetchAll();
?>
<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="../../css/style.css">
<div class="container-fluid dashboard-bg">
    <div class="contianer py-4">
        <div class="row">
            <div class="col-md-12">
                <h3 class="fw-bold text-center">Create New Category</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="create.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Category</label>
                    <input type="text" name="category" class="form-control" id="name" placeholder="Name">
                </div>

                <button type="submit" class="btn btn-success">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="../../js/bootstrap.bundle.min.js"></script>
<?php
    require_once('../footer.php')
?>