<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Home Project - Junior WB Applicant  James R. Mateo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
       
    </style>
</head>

<body class="bg-dark">

    <nav class="navbar p-3 navbar-expand-lg bg-white sticky-top">
        <div class="container-fluid">
            <img src="images/10002.png" alt="logo web" class="logo">

                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Desktop Nav -->
                <div class="d-none d-lg-block">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item"><a class="nav-link active">HOME</a></li>
                        <li class="nav-item"><a class="nav-link">LISTING</a></li>
                        <li class="nav-item"><a class="nav-link">LET'S MOVE</a></li>
                        <li class="nav-item"><a class="nav-link">ABOUT US</a></li>
                    </ul>
                </div>

                <!-- Mobile Nav -->
                <div class="offcanvas offcanvas-end text-center d-lg-none" tabindex="-1" id="offcanvasNavbar">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link active">HOME </a></li>
                        <li class="nav-item"><a class="nav-link">LISTING</a></li>
                        <li class="nav-item"><a class="nav-link">LET'S MOVE</a></li>
                        <li class="nav-item"><a class="nav-link">ABOUT US</a></li>
                    </ul>
                </div>

        </div>
    </nav>

    <div class="container-fluid bg-white ">

        <!--ROW CONTENT 1-->
        <div class="row content1-bg">
            <div class="col-md-6 d-flex justify-content-center align-items-center image-container">
                <img src="images/Agent.jpeg" alt="Marci Metzger" class="agent-img" data-bs-toggle="modal" data-bs-target="#agentModal">
                <div class="hover-text">Get to know Marci Metzger</div>
            </div>
        
            <div class="modal fade" id="agentModal" tabindex="-1" aria-labelledby="agentModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content modal-custom">
                        <div class="modal-header border-0">
                            <h5 class="modal-title" id="agentModalLabel">Marci Metzger</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                
                        <div class="modal-body">
                            <img src="images/Agent.jpeg" class="img-fluid mb-3 shadow" alt="Marci Metzger">
                            <h6>Managing Broker / Owner</h6>
                            <p>Marci was a REALTOR, then licensed Broker, in Washington State. Having helped buyers and sellers in many markets since 1995, she is a wealth of knowledge.</p>
                            <h6>In Her Words</h6>
                            <p>"I love that small-town feeling that our community offers. Spectacular golf courses, parks, pool, and easy access to Las Vegas make Pahrump a great place to call home. Working or retired, fast-paced or looking to relax... there's a place for you here! I enjoy living in the Mountain Falls community and will strive to find you a home that will suit you just as this community does me."</p>
                            <h6>Specialties</h6>
                            <div class="specialties">
                                <span class="specialty-badge">Buyer's Agent</span>
                                <span class="specialty-badge">Listing Agent</span>
                                <span class="specialty-badge">Relocation</span>
                                <span class="specialty-badge">Staging</span>
                                <span class="specialty-badge">30 Years of Experience</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            
            <div class="col-md-6 text-center text-md-center p-4 text-white">
                <h1>Marci Metzger</h1>
                <p>THE RIDGE REALTY GROUP </p>
                <a href="tel:(206) 919-6886" class="call-btn">CALL NOW</a>
            </div>

        </div>


        <!--ROW CONTENT 2-->
        <div class="row pt-5 pb-5 bg-black">
            <div class="col-md-8">

                <h5 class="text-center text-white mb-3 Playfair">For Sale!</h5>

                <div class="image-gallery">
                    <div class="main-image-container">
                        <img id="main-image" src="images/sale1.jpg" alt="Property">
                        <a id="main-button" href="https://sale1.com" target="_blank" class="view-button">View Details</a>          
                        <span class="arrow left">&#10094;</span>
                        <span class="arrow right">&#10095;</span>
                    </div>

                    <div class="thumbnails">
                        <img src="images/sale1.jpg" class="thumbnail" data-url="https://www.zillow.com/homedetails/4300-S-Gressa-St-Pahrump-NV-89061/89190603_zpid/" alt="Sale 1">
                        <img src="images/sale2.jpg" class="thumbnail" data-url="https://www.zillow.com/homedetails/3361-Silver-Sage-Dr-Pahrump-NV-89060/67884744_zpid/" alt="Sale 2">
                        <img src="images/sale3.jpg" class="thumbnail" data-url="https://www.zillow.com/homedetails/61-Rudy-Rd-Pahrump-NV-89048/387714535_zpid/" alt="Sale 3">
                        <img src="images/sale4.jpg" class="thumbnail" data-url="https://www.zillow.com/homedetails/551-Montecito-Dr-Pahrump-NV-89048/67884854_zpid/" alt="Sale 4">
                        <img src="images/sale5.jpg" class="thumbnail" data-url="https://www.zillow.com/homedetails/4775-E-Beacon-Ridge-Dr-Pahrump-NV-89061/251824296_zpid/" alt="Sale 5">
                        <img src="images/sale6.jpg" class="thumbnail" data-url="https://www.zillow.com/homedetails/4510-S-Birch-Ct-Pahrump-NV-89061/454999668_zpid/" alt="Sale 6">
                        <img src="images/sale7.jpg" class="thumbnail" data-url="https://www.zillow.com/homedetails/3361-Silver-Sage-Dr-Pahrump-NV-89060/67884744_zpid/" alt="Sale 7">
                        <img src="images/sale8.jpg" class="thumbnail" data-url="https://www.zillow.com/homedetails/4893-E-Cedar-Creek-Way-Pahrump-NV-89061/451124880_zpid/" alt="Sale 8">
                        <img src="images/sale9.jpg" class="thumbnail" data-url="https://www.zillow.com/homedetails/5700-E-Carter-Ln-Pahrump-NV-89061/220832685_zpid/" alt="Sale 9">
                    </div>

                </div>
            </div>

            <div class="col-md-4 colform">

                    <form class="bg-white">
                        <div class="p-3">
                            <h5 class="text-center Playfair mb-4 fw-bold">Contact Marci Metzger Group</h5>
                            
                            <div class="mb-2">
                                <label for="name" class="form-label">Name: </label>
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                            </div>
                        
                            <div class="mb-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                            
                            <div class="mb-2">
                                <label for="message" class="form-label">Message:<span class="ash"> (Optional)</span></label>
                                <textarea class="form-control" id="message" rows="3" placeholder="Your Message"></textarea>
                            </div>
                        
                            <button type="submit" class="btn btn-ash w-100" disabled>CONTACT THE TEAM</button>
                        </div>
                    </form>

            </div>

        </div>

        <!--ROW CONTENT 3-->
        <div class="row text-center pt-5 pb-5">
            <h3 class="Playfair">OUR SERVICES</h3>
            <!-- Service 1 -->
            <div class="col-12 col-md-4 Service1">
                <img src="images/Service1.jpeg" class="img-fluid mb-3" alt="Service 1">
                <h5 class="p-3">Real Estate Done Right</h5>
                <p>Nervous about your property adventure? Don’t be. Whether you're getting ready to buy or sell your residence, looking at investment properties, or just curious about the markets, our team ensures you get the best experience possible! </p>
            </div>

            <!-- Service 2 -->
            <div class="col-12 col-md-4 Service2">
                <img src="images/Service2.jpeg" class="img-fluid mb-3" alt="Service 2">
                <h5 class="p-3">Commercial & Residential</h5>
                <p>Large or small, condo or mansion, we can find it and get at the price that's right. Fixer-uppers? Luxury? We can help with all of it! We live, work, and play in this community. Happy to help you find where to put you hard-earned dollars. </p>
            </div>

            <!-- Service 3 -->
            <div class="col-12 col-md-4 Service3">
                <img src="images/Service3.jpeg" class="img-fluid mb-3" alt="Service 3">
                <h5 class="p-3">Rely on Expertise</h5>
                <p>if you have questions about affordability, credit, and loan options, trust us to connect you with the right people to get the answers you need in a timely fashion. We make sure you feel confident and educated every step of the way.</p>
            </div>
        </div>


        <!--ROW CONTENT 4-->
        <div class="row">
            <div class="col-12 p-3 bg-dark">

                <div class="footer">
                <div class="social-icons-copy">
                    <a href="https://www.facebook.com/MarciHomes/" target="_blank" class="icon facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/marciandlauren_nvrealtors/" target="_blank" class="icon instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/marci-metzger-30642496/" target="_blank" class="icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.yelp.com/biz/marci-metzger-the-ridge-realty-pahrump" target="_blank" class="icon yelp"><i class="fab fa-yelp"></i></a>
                    <a href="https://wa.me/14259412560" target="_blank" class="icon whatsapp"><i class="fab fa-whatsapp"></i></a>
                </div>
                </div>

            </div>
        </div>


        <!--ROW CONTENT 5-->
        <div class="row">
            <div class="col-12 p-5 GalleryCol">
                <h3 class="Playfair text-center mb-5">Photo Gallery</h3>
                <div class="gallery">
                    <div class="gallery__prev"></div>
                    <div class="gallery__next"></div>
                    <div class="gallery__stream">
                    <div class="gallery__item bg-1"></div>
                    <div class="gallery__item bg-2"></div>
                    <div class="gallery__item bg-3"></div>
                    <div class="gallery__item bg-4"></div>
                    <div class="gallery__item bg-5"></div>
                    <div class="gallery__item bg-6"></div>
                    <div class="gallery__item bg-7"></div>
                    </div>
                </div>
            </div>
        </div>

        
        <!--ROW CONTENT 6-->
        <div class="row">
            <div class="col-12 p-5 bg-custom text-start text-dark">

                <h3 class="Playfair mb-5 text-center text-white">Find Your Dream Home</h3>
                
                <div class="bg-white ListingForm">
                    <h3 class="Playfair mb-3 text-start ash">Search Listing</h3>

                    <form class="row g-3"> <!-- row at gutter spacing -->

                        <!-- First Row: Location, Type, Sort By -->
                        <div class="col-md-4">
                        <label for="location" class="form-label">Location:</label>
                        <select class="form-select" id="location">
                            <option selected>Select Location</option>
                            <option value="pahrump">Pahrump</option>
                            <option value="las-vegas">Las Vegas</option>
                            <option value="reno">Reno</option>
                        </select>
                        </div>

                        <div class="col-md-4">
                        <label for="type" class="form-label">Type:</label>
                        <select class="form-select" id="type">
                            <option selected>Select Type</option>
                            <option value="residential">Residential</option>
                            <option value="commercial">Commercial</option>
                            <option value="land">Land</option>
                        </select>
                        </div>

                        <div class="col-md-4">
                        <label for="sort" class="form-label">Sort By:</label>
                        <select class="form-select" id="sort">
                            <option selected>Select Sorting</option>
                            <option value="price-low">Price: Low to High</option>
                            <option value="price-high">Price: High to Low</option>
                            <option value="newest">Newest Listings</option>
                        </select>
                        </div>

                        <div class="col-md-2">
                        <label for="bedrooms" class="form-label">Bedrooms:</label>
                        <select class="form-select" id="bedrooms">
                            <option selected>Any</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5+</option>
                        </select>
                        </div>

                        <div class="col-md-2">
                        <label for="baths" class="form-label">Baths:</label>
                        <select class="form-select" id="baths">
                            <option selected>Any</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3+</option>
                        </select>
                        </div>

                        <div class="col-md-2">
                        <label for="min-price" class="form-label">Min Price:</label>
                        <input type="number" class="form-control" id="min-price" placeholder="Any">
                        </div>

                        <div class="col-md-2">
                        <label for="max-price" class="form-label">Max Price:</label>
                        <input type="number" class="form-control" id="max-price" placeholder="Any">
                        </div>

                        <div class="col-md-4 d-flex align-items-end">
                            <button type="submit" class="btn btn-ash w-100" disabled>SEARCH NOW</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>


        <!--ROW CONTENT 7-->
        <div class="col-12 bg-white ImageLogo d-flex justify-content-center align-items-center p-5">
            <img src="images/logo1.png" alt="Logo 1" class="logo-img">
            <img src="images/logo2.png" alt="Logo 2" class="logo-img">
            <img src="images/logo3.png" alt="Logo 3" class="logo-img">
            <img src="images/logo4.png" alt="Logo 4" class="logo-img">
        </div>


        <!--ROW CONTENT 8-->
        <div class="row bg-black">
            <div class="col-12 m-0 p-0">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">

                    <div class="carousel-item active">
                    <img src="images/GS1.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5>Top Residential Sales Last 5 Years</h5>
                        <p>We helped nearly 90 clients in 2021, and closed 28.5 million in sales! Our team works hard everyday to grow and learn, so that we may continue to excel in our market. Our clients deserve our best, & we want to make sure our best is better every year.</p>
                    </div>
                    </div>

                    <div class="carousel-item">
                    <img src="images/GS2.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5>Don't Just List it...</h5>
                        <p>Get it SOLD! We exhaust every avenue to ensure our listings are at the fingertips of every possible buyer, getting you top dollar for your home.</p>
                    </div>
                    </div>

                    <div class="carousel-item">
                    <img src="images/GS3.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <h5>Guide to Buyers</h5>
                        <p>Nobody knows the market like we do. Enjoy having a pro at your service. Market analysis, upgrades lists, contractors on speed dial, & more!</p>
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

            </div>
        </div>

        <!--ROW CONTENT 9-->
        <div class="row">
            <h3 class="text-center Playfair mt-5 fw-bold">Visit Our Location</h3>

            <div class="col-md-6 text-center locationdetails1">
                <h5 class="Playfair mb-3 lochead">Marci Metzger - THE RIDGE REALTY GROUP</h5>
                <p><i class="fas fa-map-marker-alt"></i> 3190 HW-160, Suite F, Pahrump, Nevada 89048, United States</p>
                <p><a href="tel:+12069196886"><i class="fas fa-phone-alt"></i>Appointment: (206) 919-6886</a></p>
            </div>

            <div class="col-md-6 text-center locationdetails2">
                
                <h5 class="Playfair mb-3 lochead">OFFICE HOURS</h5>
                <p>Open daily: 8:00 am - 7:00 pm</p>
                <p><em>Appointments outside office hours available upon request. Just call!</em></p>
            </div>
        </div>

    <!--1st Container Content Close-->
    </div>

    <!--ROW CONTENT 10-->
    <div id="map">
        <div id="mapControls"></div>
    </div>

<!--ROW CONTENT 11-->

    <!--Footer-->
    <div class="container-fluid text-white">

        <div class="row">
            <div class="col-12 bg-dark">

                <div class="footer">
                    <h5 class="">CONNECT WITH US</h5>

                    <div class="footer p-3">
                        <div class="social-icons-copy">
                            <a href="https://www.facebook.com/MarciHomes/" target="_blank" class="icon facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/marciandlauren_nvrealtors/" target="_blank" class="icon instagram"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/marci-metzger-30642496/" target="_blank" class="icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.yelp.com/biz/marci-metzger-the-ridge-realty-pahrump" target="_blank" class="icon yelp"><i class="fab fa-yelp"></i></a>
                            <a href="https://wa.me/14259412560" target="_blank" class="icon whatsapp"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    
                    <footer class="textfooter text-center text-white"">
                        &copy; 2025 James Mateo - All Rights Reserved
                    </footer>

                </div>
            </div>

    
        </div>
    </div>


   
    <!-- Script files at the end of the body -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="leaflet.js"></script>
    <script src="home.js"></script>
</body>
</html>