<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelmaker</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200;300;400;500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="{{ asset('css/principal_estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/img.css') }}" rel="stylesheet">

    {{--
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/img.css"> 
    --}}
</head>

<body>

    <aside class="aside-nav-wrapper">
        <div class="aside-close">
            <i class="fas fa-times"></i>
        </div>
        <div class="aside-nav-content">

            <div class="aside-sigin-button">Sign in</div>

            <div class="navigation-wrapper-link-large">
                <div>
                    <span>Review</span>
                </div>
                <div>
                    <span>Alerts</span>
                </div>
                <div>
                    <span>Trips</span>
                </div>
                <div>
                    <span>Bookings</span>
                </div>
            </div>
            <hr>
            <div class="navigation-wrapper-link-small">
                <div>Hotels</div>
                <div>Things to do</div>
                <div>Restaurants</div>
                <div>Flights</div>
                <div>Vacation Rentals</div>
                <div>Shopping</div>
                <div>Vacation Packages</div>
                <div>Cruises</div>
                <div>Rentals Cars</div>
                <div>More</div>
            </div>
        </div>
    </aside>
    <div class="overlay"></div>

    <header>
        <div class="wrapper header-wrapper">
            <div class="burger">
                <i class="fas fa-bars"></i>
            </div>
            <img src="./img/travelmaker_logo.png" alt="">

            <div class="header-search-wrapper">
                <div class="header-search-content">
                    <i class="fas fa-search"></i>
                    <input type="text" class="">
                </div>
            </div>

            <div class="header-buttons">
                <button class="pencil">
                    <i class="fas fa-pencil-alt"></i><span>Review</span>
                </button>
                <button class="heart">
                    <i class="far fa-heart"></i><span>Trips</span>
                </button>
                <button class="bell">
                    <i class="far fa-bell"></i><span>Alerts</span>
                </button>
                <button class="sign-in "><span>Sign in</span></button>

                <div class="header-search-button">
                    <button><i class="fas fa-search"></i></button>
                </div>
            </div>

        </div>
    </header>

    <nav>
        <div class="wrapper">
            <div class="nav-wrapper grid navigation-carousel">
                <div class="nav-tile"><span>Hotels</span> <i class="fas fa-bed"></i></div>
                <div class="nav-tile"><span>Vacation Rentals</span> <i class="fas fa-key"></i></div>
                <div class="nav-tile"><span>Things to Do</span> <i class="fas fa-clipboard-list"></i></div>
                <div class="nav-tile"><span>Restaurants</span> <i class="fas fa-utensils"></i></div>
                <div class="nav-tile"><span>Travel Forums</span> <i class="fas fa-comments"></i></div>
                <div class="nav-tile extra-button">
                    <span>Flights</span> <i class="fas fa-plane"></i>
                </div>
                <div class="nav-tile extra-button"><span>Cruises</span> <i class="fas fa-ship"></i></div>
                <div class="nav-tile"><span>More</span> <i class="fas fa-ellipsis-h"></i></div>
            </div>
        </div>
    </nav>

    <main>
        <form class="search-banner" method="GET" action="{{route ('servicios.index')}}">
            <div class="wrapper no-padding">
                <div class="search-wrapper">
                    <div class="search-bubble">
                        <button type="submit"><i class="fas fa-search"></i></button>
                        <input type="text" name="buscar" placeholder="QUE BUSCAS?" >
                    </div>
                </div>
            </div>
        </form>

        <section class="vip-member">
            <div class="wrapper">
                <h2>VIP Cool stays</h2>
                <p>Where Travelmaker VIP members are staying and saving</p>
                <div class="main-carousel">
                    <div class="carousel-cell">
                        <div class="carousel-pic-default vip-pic-1">
                            <div class="vip-logo"></div>
                            <button class="like-heart">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>





                        
                        <h4>South Beach Hotel</h4>
                        <div class="review-dots">
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot">
                                <div class="half"></div>
                            </div>
                            <span>4,192</span>
                        </div>
                        <span class="second-text">from $240/night</span>
                    </div>
                    <div class="carousel-cell">
                        <div class="carousel-pic-default vip-pic-2">
                            <div class="vip-logo"></div>
                            <button class="like-heart">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <h4>Miami Soho Beach House</h4>
                        <div class="review-dots">
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <span>3,457</span>
                        </div> <span class="second-text">from $430/night</span>
                    </div>
                    <div class="carousel-cell">
                        <div class="carousel-pic-default vip-pic-3">
                            <div class="vip-logo"></div>
                            <button class="like-heart">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <h4>Tropical Hotel</h4>
                        <div class="review-dots">
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot">
                                <div class="half"></div>
                            </div>
                            <span>4,609</span>
                        </div> <span class="second-text">from $520/night</span>
                    </div>
                    <div class="carousel-cell">
                        <div class="carousel-pic-default vip-pic-4">
                            <div class="vip-logo"></div>
                            <button class="like-heart">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <h4>Indonesia Mystic Palace</h4>
                        <div class="review-dots">
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot empty"></div>
                            <span>2,490</span>
                        </div> <span class="second-text">from $150/night</span>
                    </div>
                    <div class="carousel-cell">
                        <div class="carousel-pic-default vip-pic-5">
                            <div class="vip-logo"></div>
                            <button class="like-heart">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <h4>Dubai Oriental Hotel</h4>
                        <div class="review-dots">
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <span>3,523</span>
                        </div> <span class="second-text">from $400/night</span>
                    </div>
                    <div class="carousel-cell">
                        <div class="carousel-pic-default vip-pic-6">
                            <div class="vip-logo"></div>
                            <button class="like-heart">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <h4>California Dreamin</h4>
                        <div class="review-dots">
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot empty"></div>
                            <span>4,685</span>
                        </div> <span class="second-text">from $180/night</span>
                    </div>
                    <div class="carousel-cell">
                        <div class="carousel-pic-default vip-pic-7">
                            <div class="vip-logo"></div>
                            <button class="like-heart">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <h4>Thailand hotel</h4>
                        <div class="review-dots">
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <span>3,422</span>
                        </div> <span class="second-text">from $550/night</span>
                    </div>
                    <div class="carousel-cell">
                        <div class="carousel-pic-default vip-pic-8">
                            <div class="vip-logo"></div>
                            <button class="like-heart">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <h4>Cambodia Tropical Resort</h4>
                        <div class="review-dots">
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot"></div>
                            <div class="rev-dot">
                                <div class="half"></div>
                            </div>
                            <span>3,543</span>
                        </div> <span class="second-text">from $350/night</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-rentals">
            <div class="wrapper">
                <div class="rentals-wrapper grid">
                    <h2>Home Rentals Near You</h2>
                    <p>We think you'd enjoy these homes for a quick trip out of town.</p>
                    <div class="rentals-carousel">
                        <div class="carousel-cell-rentals">
                            <div class="carousel-pic-rentals rentals-pic-1"></div>
                            <h4>Rentals in New York City</h4>
                            <span class="rentals-amount">634 rentals</span>
                        </div>
                        <div class="carousel-cell-rentals">
                            <div class="carousel-pic-rentals rentals-pic-2"></div>
                            <h4>Rentals in Houston</h4>
                            <span class="rentals-amount">359 rentals</span>
                        </div>
                        <div class="carousel-cell-rentals">
                            <div class="carousel-pic-rentals rentals-pic-3"></div>
                            <h4>Rentals in Chicago</h4>
                            <span class="rentals-amount">289 rentals</span>
                        </div>
                        <div class="carousel-cell-rentals">
                            <div class="carousel-pic-rentals rentals-pic-4"></div>
                            <h4>Rentals in Los Angeles</h4>
                            <span class="rentals-amount">451 rentals</span>
                        </div>
                        <div class="carousel-cell-rentals">
                            <div class="carousel-pic-rentals rentals-pic-5"></div>
                            <h4>Rentals in Phoenix</h4>
                            <span class="rentals-amount">227 rentals</span>
                        </div>
                        <div class="carousel-cell-rentals">
                            <div class="carousel-pic-rentals rentals-pic-6"></div>
                            <h4>Rentals in Philadelphia</h4>
                            <span class="rentals-amount">358 rentals</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="more-to-explore">
            <div class="wrapper">
                <div class="explore-wrapper">
                    <h2>More to explore</h2>
                    <div class="explore-carousel">
                        <div class="carousel-cell-explore">
                            <div class="carousel-pic-explore explore-pic-1">
                                <button class="like-heart">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <span>From Travelmaker</span>
                            <h4>Why Fall Is the Perfect Time to Visit Our National Parks</h4>
                        </div>
                        <div class="carousel-cell-explore">
                            <div class="carousel-pic-explore explore-pic-2">
                                <button class="like-heart">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <span>From Travelmaker</span>
                            <h4>A Guide to Last-Minute Road Trips You Can Do Right Now</h4>
                        </div>
                        <div class="carousel-cell-explore">
                            <div class="carousel-pic-explore explore-pic-3">
                                <button class="like-heart">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <span>From Travelmaker</span>
                            <h4>All the Ways We're Celebrating Hispanic Heritage Month</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="hire-banner">
            <div class="wrapper">
                <div class="hire-banner-wrapper grid">
                    <div class="hire-text-wrapper grid">
                        <div class="hire-text">
                            <h2>Don't go it alone.
                                Hire an expert to craft your trip.
                            </h2>
                        </div>
                        <div class="hire-button grid">
                            <button>Learn more</button>
                        </div>
                    </div>
                    <div class="hire-pic-wrapper hire-pic"></div>
                </div>
            </div>
        </section>

        <section class="destinations">
            <div class="wrapper">
                <h2 class="destinations-header">Destinations travelers love</h2>
                <div class="destinations-carousel">
                    <div class="carousel-cell-destinations">
                        <div class="carousel-pic-default destinations-pic destinations-pic-1">
                            <div class="destinations-text">
                                <p>Yellowstone National Park, WY</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell-destinations">
                        <div class="carousel-pic-default destinations-pic destinations-pic-2">
                            <div class="destinations-text">
                                <p>Punta Cana, Dominican Republic</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell-destinations">
                        <div class="carousel-pic-default destinations-pic destinations-pic-3">
                            <div class="destinations-text">
                                <p>Maui, HI</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell-destinations">
                        <div class="carousel-pic-default destinations-pic destinations-pic-4">
                            <div class="destinations-text">
                                <p>Orlando, FL</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell-destinations">
                        <div class="carousel-pic-default destinations-pic destinations-pic-5">
                            <div class="destinations-text">
                                <p>Sedona, AZ</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell-destinations">
                        <div class="carousel-pic-default destinations-pic destinations-pic-6">
                            <div class="destinations-text">
                                <p>Cancun, Mexico</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell-destinations">
                        <div class="carousel-pic-default destinations-pic destinations-pic-7">
                            <div class="destinations-text">
                                <p>New York City, NY</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell-destinations">
                        <div class="carousel-pic-default destinations-pic destinations-pic-8">
                            <div class="destinations-text">
                                <p>Las Vegas, NV</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="travelmaker-get-more">
            <div class="wrapper no-padding">
                <div class="get-more-bg get-more-pic">
                    <div class="get-more-text-wrapper">
                        <h2>Get more of what you've been missing.</h2>
                        <div>Introducing Travelmaker VIP. Endless travel savings, one simple membership.</div>
                        <button>Learn more</button>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <div class="wrapper">
            <div class="footer-grid">
                <div class="links1">
                    <div class="footer-section-header accordion">
                        About Travelmaker
                    </div>
                    <div class="footer-links-wrapper panel">
                        <ul class="footer-links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Resources and Policies</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Investor Relations</a></li>
                            <li><a href="#">Content Integrity</a></li>
                        </ul>
                    </div>
                </div>
                <div class="links2">
                    <div class="footer-section-header accordion">
                        Explore
                    </div>
                    <div class="footer-links-wrapper panel">
                        <ul class="footer-links">
                            <li><a href="#">Write a review</a></li>
                            <li><a href="#">Add a Place</a></li>
                            <li><a href="#">Join</a></li>
                            <li><a href="#">Travelers' Choice</a></li>
                            <li><a href="#">Insurance</a></li>
                            <li><a href="#">GreenLeaders</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Travelmaker VIP</a></li>
                            <li><a href="#">Travel Articles</a></li>
                        </ul>
                    </div>
                </div>
                <div class="links3">
                    <div class="footer-section-header accordion">
                        Do Business With Us
                    </div>
                    <div class="footer-links-wrapper panel">
                        <ul class="footer-links">
                            <li><a href="#">Owners</a></li>
                            <li><a href="#">Business Advantage</a></li>
                            <li><a href="#">Sponsored Placements</a></li>
                            <li><a href="#">Advertise with Us</a></li>
                            <li><a href="#">Become an Affiliate</a></li>
                        </ul>
                    </div>
                    <div class="footer-section-header accordion">
                        Get The App
                    </div>
                    <div class="footer-links-wrapper panel">
                        <ul class="footer-links">
                            <li><a href="#">iPhone App</a></li>
                            <li><a href="#">Android App</a></li>
                        </ul>
                    </div>
                </div>
                <div class="partners">
                    <div class="footer-section-header accordion">
                        Travelmaker Sites
                    </div>
                    <div class="footer-links-wrapper panel">
                        <ul class="footer-links">
                            <li>
                                <p>Discover your dream destination with</p>
                                <a href="#">Jester's Tear</a>
                            </li>
                            <li>
                                <p>Book the best restaurants with</p>
                                <a href="#">ThePork</a>
                            </li>
                            <li>
                                <p>Book tours and attraction tickets on</p>
                                <a href="#">Viagrator</a>
                            </li>
                            <li>
                                <p>Read cruise reviews on</p>
                                <a href="#">Tom Critic</a>
                            </li>
                            <li>
                                <p>Get airline seating charts on</p>
                                <a href="#">Guru Air</a>
                            </li>
                            <li>
                                <p>Find vacation rentals on</p>
                                <a href="#">KeyKey</a>
                            </li>
                            <li>
                                <p>Search for holiday rentals on</p>
                                <a href="#">RentMePlease</a>
                            </li>
                            <li>
                                <p>Find a vacation home on</p>
                                <a href="#">Piss Neighbors Off</a>
                            </li>
                            <li>
                                <p>Plan and book your next trip with</p>
                                <a href="#">Unforgettable Holidays</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="pickers">
                    <div class="currency">$ USD</div>
                    <div class="country">United States</div>
                </div>
                <div class="social">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-pinterest"></i>
                    <i class="fab fa-instagram"></i>
                </div>
                <div class="legal">
                    <div class="terms-wrapper">
                        <div class="footer-logo">
                            <img src="./img/travelmaker_logo_mini.png" alt="">
                        </div>
                        <div class="terms-text-wrapper">
                            <div class="rights-reserved">
                                <p>© 2021 Travelmaker LLC All rights reserved :)</p>
                            </div>
                            <div class="footer-links-wrapper">
                                <div class="footer-links terms-links">
                                    <span><a href="#">Terms of Use</a></span>
                                    <span><a href="#">Privacy and Cookies Statement</a></span>
                                    <span><a href="#">Cookie consent</a></span>
                                    <span><a href="#">Site Map</a></span>
                                    <span><a href="#">How the site works</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="region-notice">This is the version of our website addressed to speakers of English in
                        the
                        United States. If you
                        are a resident of
                        another country or region, please select the appropriate version of Travelmaker for your
                        country
                        or region in the
                        drop-down menu. <a href="#">more</a></p>
                </div>

                <div class="a">
                    <a href="http://www.freepik.com" class="additional-resources">Designed by pch.vector /
                        Freepik
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="{{ asset('js/flickity.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    {{-- <script src="./js/main.js"></script>
    <script src="./js/flickity.js"></script> --}}

</body>

</html>
<img src="" alt="">