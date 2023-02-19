<?php include('header.php');
require_once('db/dbconfig.php');
?>

<!-- Carousel -->

<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/slider1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Welcome to GWSC</h1>
                <p>Escape the crowds and find peace in nature with wild swimming and camping</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/slider2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Discover the World's Hidden Gems</h1>
                <p>Wild Swimming and Camping Adventures Await</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/slider3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Dive into the Wild</h1>
                <p>Discover the Best Places to Swim and Camp</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- -------------- -->

<div class="container">
    <div class="row pt-3">
        <a class="weatherwidget-io" href="https://forecast7.com/en/55d38n3d44/united-kingdom/"
            data-label_1="UNITED KINGDOM" data-label_2="WEATHER" data-theme="original">UNITED KINGDOM WEATHER</a>
        <script>
            !function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = 'https://weatherwidget.io/js/widget.min.js'; fjs.parentNode.insertBefore(js, fjs); } }(document, 'script', 'weatherwidget-io-js');
        </script>
    </div>
    <div class="row">
        <h2 class="py-3 text-center">Tourist Attractions</h2>
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
    <hr class="mt-5 mb-5">

    <!-- Features -->

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

    <!-- ---------------------- -->
    <div class="container">
        <div class="row py-2" id="pitches">
            <h2 class="py-3 text-center">Pitch Types</h2>

            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top rounded" src="images/tent1.jpg" alt="Card image cap" max-width="100%"
                        height="auto">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-md-9 px-4 py-3">
                            <h2 class="px-2">Tent Pitch</h2>
                            <p class="px-2">Our tent pitch is designed to provide you with a comfortable and secure
                                space to
                                set
                                up your tent, ensuring you can enjoy your camping experience.</p>
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
                                convenience
                                of home, no matter where your adventures take you and provide greate experience.</p>
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
                            <p class="px-2">Our motorhome pitch is designed to provide you with all the space and
                                amenities
                                you
                                need to enjoy your trip which is the perfect choice for anyone.</p>
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
    <hr class="mt-5 mb-5">

    <div class="row py-3 my-3">
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="images/home1.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
            <h2 class="featurette-heading">
                Book Your Favorite Pitches Today
            </h2>
            <p class="lead m-auto">
                Secure your spot and experience comfortable accommodations with just a few clicks.
            </p>
            <a href="booking.php">
                <button type="button" class="btn btn-lg mt-5" id="pitchesviewbtn">Book
                    Now</button>
                </a>
        </div>
    </div>

    <hr class="mt-5 mb-5">

    <div class="div mb-4">
        <div class="div">
            <h2 class="py-3 mb-5 text-center">Extra Services</h2>
            <div class="row">
                <div class="col-lg-4">
                    <img class="rounded-circle mx-auto d-block mb-5" src="images/service1.jpg"
                        alt="Generic placeholder image" width="140" height="140">
                    <h2 class="text-center">
                        Car Parking
                    </h2>
                    <p class="text-center px-3">
                        Easily park your car with our secure and convenient car parking services
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="rounded-circle mx-auto d-block mb-5" src="images/service2.jpg"
                        alt="Generic placeholder image" width="140" height="140">
                    <h2 class="text-center">
                        Shower
                    </h2>
                    <p class="text-center px-3">
                        Stay fresh and clean with our on-site shower facilities
                    </p>
                </div>
                <div class="col-lg-4">
                    <img class="rounded-circle mx-auto d-block mb-5" src="images/service3.jpg"
                        alt="Generic placeholder image" width="140" height="140">
                    <h2 class="text-center">
                        Internet Access
                    </h2>
                    <p class="text-center px-3">
                        Stay connected with our Wi-Fi enabled campsite
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- start sw-rss-feed code -->
    <div class="row">
        <div class="text-center">
            <script type="text/javascript">
                //<!-- 
                rssfeed_url = new Array();
                rssfeed_url[0] = "https://glampinghub.com/blog/rss/";
                rssfeed_frame_width = "100%";
                rssfeed_frame_height = "260";
                rssfeed_scroll = "on";
                rssfeed_scroll_step = "6";
                rssfeed_scroll_bar = "off";
                rssfeed_target = "_blank";
                rssfeed_font_size = "12";
                rssfeed_font_face = "";
                rssfeed_border = "on";
                rssfeed_css_url = "https://feed.surfing-waves.com/css/style3a.css";
                rssfeed_title = "on";
                rssfeed_title_name = "";
                rssfeed_title_bgcolor = "#3366ff";
                rssfeed_title_color = "#fff";
                rssfeed_title_bgimage = "";
                rssfeed_footer = "off";
                rssfeed_footer_name = "rss feed";
                rssfeed_footer_bgcolor = "#fff";
                rssfeed_footer_color = "#333";
                rssfeed_footer_bgimage = "";
                rssfeed_item_title_length = "50";
                rssfeed_item_title_color = "#666";
                rssfeed_item_bgcolor = "#fff";
                rssfeed_item_bgimage = "";
                rssfeed_item_border_bottom = "on";
                rssfeed_item_source_icon = "off";
                rssfeed_item_date = "off";
                rssfeed_item_description = "on";
                rssfeed_item_description_length = "120";
                rssfeed_item_description_color = "#666";
                rssfeed_item_description_link_color = "#333";
                rssfeed_item_description_tag = "off";
                rssfeed_no_items = "0";
                rssfeed_cache = "8b5edb61decc866d4ded9e360a41ab06";
                //-->
            </script>
            <script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script>
            <!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. -->
            <div style="color:#ccc;font-size:10px; text-align:right; width:230px;">powered by <a
                    href="https://surfing-waves.com" rel="noopener" target="_blank" style="color:#ccc;">Surfing
                    Waves</a></div>
            <!-- end sw-rss-feed code -->
        </div>
    </div>
</div>
<?php include('footer.php'); ?>