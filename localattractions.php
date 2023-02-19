<?php include('header.php');
require_once('db/dbconfig.php');
?>

<div class="container py-5">
    <div class="py-1 text-center">
        <a href="index.php"><img class="d-block mx-auto mb-5" src="images/Logo3.png" alt="" width="40%"></a>
        <h2>Local Attractions</h2>
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

    <div class="row py-5" id="pitches">
        <hr class="mb-4 mt-1">
        <h2 class="py-3 text-center">Tourist Attractions</h2>

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
                        <h2 class="featurette-heading">Experience the ancient beauty of Bagan <span
                                class="text-muted">with
                                our exclusive camp sites </span></h2>
                        <p class="lead m-auto">Find your next adventure on the trails with our guided hiking trips.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row py-5" id="pitches">
            <hr class="mb-4 mt-1">
            <h2 class="py-3 text-center">Walks</h2>
            <div class="row">
                <div class="col-md-6 py-3">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="images/walk1.jpg">
                        <div class="card-body">
                            <h2>The Toubkal Circuit</h2>
                            <p class="text-muted text-sm">Morocco</p>
                            <p class="card-text text-muted"> Walking the Toubkal Circuit in Morocco is a spectacular
                                trek that offers breathtaking views of North Africa's highest peak, Jbel Toubkal. The
                                circuit is a circular route that takes hikers through the rugged and beautiful High
                                Atlas Mountains, passing through traditional Berber villages and stunning alpine
                                scenery. Along the way, you'll experience the unique culture and hospitality of the
                                Berber people, who have lived in the area for centuries. The circuit typically takes six
                                to eight days to complete, with opportunities to climb several peaks and enjoy sweeping
                                panoramic views of the surrounding landscape. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="images/attraction2.jpg">
                        <div class="card-body">
                            <h2>Simien Mountains Traverse</h2>
                            <p class="text-muted text-sm">Ethiopia</p>
                            <p class="card-text">Walking the Simien Mountains Traverse in Ethiopia is a truly unique
                                experience that offers breathtaking views of jagged mountain peaks and deep valleys, as
                                well as the chance to spot rare wildlife such as the Ethiopian wolf and the gelada
                                baboon. The Simien Mountains are a UNESCO World Heritage site and one of Africa's most
                                stunning trekking destinations, with a range of trails to suit all abilities. The
                                traverse is typically a four to six-day trek that takes hikers along the dramatic
                                escarpment of the Simien Mountains, through alpine meadows, and past hidden waterfalls.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<?php include('footer.php'); ?>