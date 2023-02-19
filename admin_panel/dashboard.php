<?php
session_start();
    require_once('header.php');
    require_once('../db/dbconfig.php');

    $user = $pdo_conn->prepare("SELECT * FROM user ORDER BY  user.id ASC ");
    $user->execute();
    $user_result = $user->fetchAll();
?>
    <div class="container-fluid dashboard-bg ">
    <div class="container">
    <div class="row flex-column flex-lg-row py-4">
            <h2 class="h6 text text-white-50">QUICK STATS</h2>
            <div class="col-md-3">
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                    <h3 class="card-tittle h5"><i class="fa-solid fa-user"></i> Number of Views</h3>
                <span class="text-secondary fs-4">
                    <?php require_once('counter.php'); ?>
                </span>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
            <div class="row bg-white p-3">
                <div class="col-md-7">
                <h2>Users</h2>
                </div>
            </div>

        <table class="table table-bordered ">      
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Country</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
            </tr>

            <?php
                if(!empty($user_result)){
                    foreach($user_result as $user_row){
            ?>
            <tr>
            <td><?php echo $user_row['id']; ?></td>
            <td><?php echo $user_row['name']; ?></td>
            <td><?php echo $user_row['email']; ?></td>
            <td><?php echo $user_row['pass']; ?></td>
            <td><?php echo $user_row['country']; ?></td>
            <td><?php echo $user_row['role']; ?></td>
            <td><a href="edit.php?id=<?php echo $user_row['id'] ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
            <a href="delete.php?id=<?php echo $user_row['id'] ?>" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a>
            </td>    
            </tr>  
            <?php                  
                    }
                }
            ?>
        </table>   
    </div>
    </div>
    
<?php
    require_once('footer.php');
?>