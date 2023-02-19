<?php 
    session_start();
    require_once('header.php');
    require_once('../../db/dbconfig.php');

    $product_order = $pdo_conn->prepare("SELECT * FROM booking ORDER BY  booking.id ASC ");
    $product_order->execute();
    $product_order_result = $product_order->fetchAll();
?>

<div class="container-fluid dashboard-bg py-4 ">
        <div class="contianer bg-white my-4 p-4">
            <div class="row py-4">
                <div class="col-md-2">
                    <h2>Booking</h2>      
                </div>


            </div>

            <div class="row">
            <table class="table table-striped">
                <tr>
                    <th scope="col" class="py-3">ID</th>
                    <th scope="col" class="py-3">Name</th>                  
                    <th scope="col" class="py-3">Email</th>
                    <th scope="col" class="py-3">Product</th>
                    <th scope="col" class="py-3">Qunatity</th>
                    <th scope="col" class="py-3">Action</th>
                </tr>

                <?php
                if(!empty($product_order_result)){
                    foreach($product_order_result as $product_order_row){
                ?>
                <tr>
                    <td><?php echo $product_order_row['id']; ?></td>
                    <td><?php echo $product_order_row['name']; ?></td>           
                    <td><?php echo $product_order_row['email']; ?></td>           
                    <td><?php echo $product_order_row['product']; ?></td>           
                    <td><?php echo $product_order_row['quantity']; ?></td>
                    <td>
                    <a href="edit.php?id=<?php echo $product_order_row['id'] ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                    <a href="delete.php?id=<?php echo $product_order_row['id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a></td>
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