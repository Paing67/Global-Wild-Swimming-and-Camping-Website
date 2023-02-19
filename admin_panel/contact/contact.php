<?php
session_start();
require_once('header.php');
require_once('../../db/dbconfig.php');

$contact = $pdo_conn->prepare("SELECT * FROM contact ORDER BY  contact.id ");
$contact->execute();
$contact_result = $contact->fetchAll();
?>

<div class="container-fluid dashboard-bg py-4 ">
    <div class="contianer bg-white my-4 p-4">
        <div class="row py-4">
            <div class="col-md-2">
                <h2>Contact</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <table class="table table-striped">
            <tr>
                <th scope="col" class="py-3">ID</th>
                <th scope="col" class="py-3">Name</th>
                <th scope="col" class="py-3">Email</th>
                <th scope="col" class="py-3">Address</th>
                <th scope="col" class="py-3">Message</th>
                <th scope="col" class="py-3">Action</th>
            </tr>

            <?php
            if (!empty($contact_result)) {
                foreach ($contact_result as $contact_row) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $contact_row['id']; ?>
                        </td>
                        <td>
                            <?php echo $contact_row['name']; ?>
                        </td>
                        <td>
                            <?php echo $contact_row['email']; ?>
                        </td>
                        <td>
                            <?php echo $contact_row['address']; ?>
                        </td>
                        <td>
                            <?php echo $contact_row['message']; ?>
                        </td>
                        <td>
                            <a href="edit.php?id=<?php echo $contact_row['id'] ?>" class="btn btn-primary"><i
                                    class="bi bi-pencil-square"></i> Edit</a>
                            <a href="delete.php?id=<?php echo $contact_row['id'] ?>" class="btn btn-danger"><i
                                    class="bi bi-trash"></i> Delete</a>
                        </td>
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