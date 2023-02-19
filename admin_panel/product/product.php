<?php
session_start();
    require_once('header.php');
    require_once('../../db/dbconfig.php');

    $product = $pdo_conn->prepare("SELECT * FROM product ORDER BY  product.id ASC ");
    $product->execute();
    $product_result = $product->fetchAll();

?>
<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="../../style.css">
    <div class="container-fluid dashboard-bg">
        <div class="contianer">
            <div class="row py-4">
                <div class="col-md-2">
                    <h2>Products</h2>
                    
                </div>

                <div class="col-md-7">
                    <a href="create_form.php" class="btn btn-success"><i class="bi bi-plus-lg"></i> Add New</a>
                </div>


            </div>

            <div class="row py-4">
            <table class="table table-striped">
                <tr>
                    <th scope="col" class="py-3">Image</th>
                    <th scope="col" class="py-3">ID</th>
                    <th scope="col" class="py-3">Name</th>                  
                    <th scope="col" class="py-3">Category</th>
                    <th scope="col" class="py-3">Price</th>
                    <th scope="col" class="py-3">Stock</th>
                    <th scope="col" class="py-3">Action</th>
                </tr>

                <?php
                if(!empty($product_result)){
                    foreach($product_result as $product_row){
                ?>
                <tr>
                    <td><img src="../../images/<?php echo $product_row['image']; ?>" class="img-fluid" width="100px" height="100px"></td>
                    <td><?php echo $product_row['id']; ?></td>
                    <td><?php echo $product_row['name']; ?></td>           
                    <td><?php echo $product_row['category_id']; ?></td>
                    <td><?php echo $product_row['price']; ?></td>
                    <td><?php echo $product_row['stock']; ?></td>
                    <td>
                    <a href="edit.php?id=<?php echo $product_row['id'] ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                    <a href="delete.php?id=<?php echo $product_row['id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a></td>
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