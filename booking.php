<?php include('header.php');
require_once('db/dbconfig.php');
$booking_statement = $pdo_conn->prepare("SELECT * FROM booking ORDER BY id");
$booking_statement->execute();
$booking_result = $booking_statement->fetchAll();
?>

<div class="container py-5">
    <div class="py-1 text-center">
        <img class="d-block mx-auto mb-5" src="images/Logo3.png" alt="" width="40%">
        <h2>Booking Form</h2>
        <hr class="mb-4">
    </div>
    <div class="row">
        <div class="col-md-8">
            <form action="bookingsubmit.php" method="post">
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="mb-3">
                    <label for="email">Email </label>
                    <input type="email" class="form-control" id="email" placeholder="John@yahoo.com" name="email">
                </div>

                <div class="py-3">
                    <label for="product" class="form-label">Product</label>
                    <select class="custom-select d-block w-100" id="product" name="product" required>
                        <option selected="true" disabled="disabled">Choose...</option>
                        <option>T-001</option>
                        <option>T-002</option>
                        <option>TC-001</option>
                        <option>TC-002</option>
                        <option>M-001</option>
                        <option>M-002</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" name="quantity">
                </div>
                <input type="submit" value="Book" id="contactsubmit" class="btn btn-lg btn-block">
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