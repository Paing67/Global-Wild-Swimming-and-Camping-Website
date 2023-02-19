<?php
include('header.php');
require_once('db/dbconfig.php');
?>

<div class="container py-5">
    <div class="py-1 text-center">
        <a href="index.php"><img class="d-block mx-auto mb-5" src="images/Logo3.png" alt="" width="40%"></a>
        <h2>Information</h2>
        <hr class="mb-0">
    </div>
    <br />

    <div class="row">
        <div class="col-md-6 col-6">
            <img class="rounded" src="images/local1.jpg" alt="" width="100%" height="auto">
        </div>
        <div class="col-md-6 col-6">
            <div class="row">
                <div class="col-md-12">
                    <img class="rounded" src="images/local2.jpg" alt="" width="100%" height="auto">
                </div>
                <div class="col-md-12 py-4">
                    <img class="rounded" src="images/local4.jpg" alt="" width="100%" height="auto">
                </div>
            </div>
        </div>
    </div>

    <hr class="mb-5 mt-5">

    <div class="features">
        <div class="row">
            <div class="col-md-7">
                <h2 class="featurette-heading">Explore the great outdoors <span class="text-muted">with our hiking
                        experiences.</span></h2>
                <p class="lead">Find your next adventure on the trails with our guided hiking trips.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="images/features2.jpg"
                    alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Dive into nature's beauty <span class="text-muted"> with our wild
                        swimming experiences.</span></h2>
                <p class="lead">Swim in secluded natural pools and immerse yourself in nature's beauty.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="images/features3.jpg"
                    alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row">
            <div class="col-md-7">
                <h2 class="featurette-heading">Ride through nature's wonder<span class="text-muted"> with our biking
                        experiences.</span></h2>
                <p class="lead">Discover scenic routes and challenging trails on our guided biking trips.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="images/features4.jpg"
                    alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">
    </div>

    <div class="row mb-2" id="pitches">
        <h2 class="mb-3 py-3 text-center">Local Attractions</h2>
        <div class="row">
            <div class="col-md-6 py-3">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="images/attraction1.jpg">
                    <div class="card-body">
                        <h2>Mount Cook National Park</h2>
                        <p class="text-muted text-sm">New Zealand</p>
                        <p class="card-text text-muted"> Camping in Mount Cook National Park is a breathtaking
                            experience
                            that
                            offers stunning views of New Zealand's highest peak and its surrounding glaciers. The park
                            features several campgrounds with well-maintained facilities, including powered sites for
                            campervans and caravans. Visitors can enjoy a range of activities, including hiking,
                            mountaineering, fishing, and stargazing. With clear night skies and minimal light pollution,
                            the park is an ideal spot for astronomy enthusiasts. Whether you're looking for a relaxing
                            weekend getaway or an adventurous outdoor excursion, Mount Cook National Park has something
                            for everyone.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 py-3">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="images/attraction2.jpg">
                    <div class="card-body">
                        <h2>The Alps</h2>
                        <p class="text-muted text-sm">France</p>
                        <p class="card-text">Camping in the Alps is an unforgettable experience that offers majestic
                            mountain views and a variety of outdoor activities. With a range of campgrounds to choose
                            from, visitors can enjoy everything from basic tents to luxurious glamping options. Whether
                            you're looking to hike, bike, or simply relax and take in the natural beauty, the Alps offer
                            something for everyone. During the winter months, the area is a popular destination for
                            skiing and snowboarding, while in the summer months, visitors can enjoy swimming, rock
                            climbing, and exploring quaint mountain towns. With fresh air and stunning views, camping in
                            the Alps is a perfect way to disconnect from the stress</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="mb-5 mt-5">

    <div class="row py-2">
        <h2 class="py-3 text-center">Popular Campsite</h2>

        <div class="col-md-6">
            <img class="rounded" src="images/bagan.jpg" alt="" width="100%" height="auto">
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7441.0035729031915!2d94.85448717523599!3d21.172216498334596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30b5e50393d8ca61%3A0x371a4717c3e89981!2sOld%20Bagan!5e0!3m2!1sen!2smm!4v1674927775532!5m2!1sen!2smm"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-12">
                    <h2 class="featurette-heading">Experience the ancient beauty of Bagan <span class="text-muted">with
                            our exclusive camp sites </span></h2>
                    <p class="lead m-auto">Find your next adventure on the trails with our guided hiking trips.</p>
                </div>
            </div>
        </div>
    </div>

    <hr class="mb-5 mt-5">

    <div class="row py-2" id="pitches">
        <h2 class="py-3 text-center">Pitch Types</h2>

        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top rounded" src="images/tent1.jpg" alt="Card image cap" max-width="100%"
                    height="auto">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-9 px-4 py-3">
                        <h2 class="px-2">Tent Pitch</h2>
                        <p class="px-2">Our tent pitch is designed to provide you with a comfortable and secure space to
                            set up your tent, ensuring you can enjoy your camping experience.</p>
                    </div>
                    <div class="col-md-3 px-4 py-3">
                        <a href="pitches.php#tentpitch"><button type="button" class="btn btn-sm"
                                id="pitchesviewbtn">View</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top rounded" src="images/van1.jpg" alt="Card image cap" max-width="100%"
                    height="auto">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-9 px-4 py-3">
                        <h2 class="px-2">Touring Caravan</h2>
                        <p class="px-2">Our touring caravan is designed to provide you with all the comfort and
                            convenience of home, no matter where your adventures take you and provide greate experience.
                        </p>
                    </div>
                    <div class="col-md-3 px-4 py-3">
                        <a href="pitches.php#tourcaravan">
                            <button type="button" class="btn btn-sm" id="pitchesviewbtn">View</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top rounded" src="images/motorhome1.jpg" alt="Card image cap" max-width="100%"
                    height="auto">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-9 px-4 py-3">
                        <h2 class="px-2">Motorhome Pitch</h2>
                        <p class="px-2">Our motorhome pitch is designed to provide you with all the space and amenities
                            you need to enjoy your trip which is the perfect choice for anyone.</p>
                    </div>
                    <div class="col-md-3 px-4 py-3">
                        <a href="pitches.php#motorhome">
                            <button type="button" class="btn btn-sm" id="pitchesviewbtn">View</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<?php include('footer.php'); ?>