<?php include('header.php');
require_once('db/dbconfig.php');
$contact_statement = $pdo_conn->prepare("SELECT * FROM contact ORDER BY id LIMIT 5");
$contact_statement->execute();
$contact_result = $contact_statement->fetchAll();
?>

<div class="container py-5">
    <div class="py-1 text-center">
        <img class="d-block mx-auto mb-5" src="images/Logo3.png" alt="" width="40%">
        <h2>Contact Us</h2>
        <hr class="mb-4">
    </div>
    <div class="row">
        <div class="col-md-8">
            <form action="contactsubmit.php" method="post">
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="mb-3">
                    <label for="email">Email </label>
                    <input type="email" class="form-control" id="email" placeholder="John@yahoo.com" name="email">
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="12 Main St" name="address">
                </div>

                <div class="mb-3">
                    <label for="message">Messages</label>
                    <textarea class="form-control " rows="10" aria-label="With textarea"
                        placeholder="Leave us a message" name="message"></textarea>
                </div>
                <input type="submit" value="Send" id="contactsubmit" class="btn btn-lg btn-block">
                <div class="row mt-3">
                    <a class="text-decoration-none" id="policy" href="policy.php">Privacy Policy</a>
                </div>
            </form>
        </div>
        <div class="col-md-4 px-5 mt-3" id="contactside">
            <h4 class="py-5">Contact Info</h4>
            <p><i class="bi bi-geo-alt-fill"></i> No. 3/A Bogyoke Rd, Yangon, Myanmar (Burma)</p>
            <p><i class="bi bi-telephone-fill"></i> +95 996900125</p>
            <p><i class="bi bi-telephone-fill"></i> +95 996900126</p>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>