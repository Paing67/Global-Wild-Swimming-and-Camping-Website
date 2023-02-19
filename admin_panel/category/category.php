<?php 
    session_start();
    require_once('header.php');
    require_once('../../db/dbconfig.php');

    $category = $pdo_conn->prepare("SELECT * FROM category ORDER BY  category.id ASC ");
    $category->execute();
    $category_result = $category->fetchAll();
?>

<div class="container-fluid dashboard-bg py-4 ">
        <div class="contianer bg-white my-4 p-4">
            <div class="row py-4">
                <div class="col-md-2">
                    <h2>Category</h2>      
                </div>

<div class="col-md-7">
                    <a href="create_form.php" class="btn btn-success"><i class="bi bi-plus-lg"></i> Add New</a>
                </div>
            </div>

            <div class="row ">
            <table class="table table-striped my-5">
                <tr>
                    <th scope="col" class="py-3">ID</th>
                    <th scope="col" class="py-3">Category</th>       
                    <th scope="col" class="py-3">Action</th>             
                </tr>

                <?php
                if(!empty($category_result)){
                    foreach($category_result as $category_row){
                ?>
                <tr>
                    <td><?php echo $category_row['id']; ?></td>
                    <td><?php echo $category_row['c_name']; ?></td>           
                    <td>
                    <a href="edit.php?id=<?php echo $category_row['id'] ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                    <a href="delete.php?id=<?php echo $category_row['id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a></td>
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