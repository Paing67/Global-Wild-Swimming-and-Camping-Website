<?php
    require_once('../../db/dbconfig.php');
    require_once('header.php');
    $id = $_GET['id'];

 
    $contact = $pdo_conn->prepare("SELECT * FROM contact WHERE id=".$id);
    $contact->execute();
    $contact_result = $contact->fetchAll();

    // var_dump($dataset);
?>

<div class="container my-4 py-4 dashboard-bg">
        <div class="row">
            <div class="col-md-6 bg-white py-4 mx-auto">

            <?php
                foreach($contact_result as $contact_row){
            ?>
                <form action="update.php?id=<?php echo $contact_row['id']; ?>" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" value="<?php echo $contact_row['name']; ?>" class="form-control" id="name" placeholder="Name">
                </div>
 
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" value="<?php echo $contact_row['email']; ?>" class="form-control" id="email" placeholder="email">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" value="<?php echo $contact_row['address']; ?>" name="address" id="address" placeholder="guest">
                </div>
                
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <input type="text" class="form-control" value="<?php echo $contact_row['message']; ?>" name="message" id="message" placeholder="guest">
                </div>

                <button type="submit" class="btn btn-success">Save</button>
                <a href="contact.php" class="btn btn-danger">Cancel</a>
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