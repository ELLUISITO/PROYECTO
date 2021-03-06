<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants</title>
    <!-- bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />

    {{-- <link rel="stylesheet" href="./restaurantStyle.css"> --}}
    <link href="{{ asset('css/restaurantStyle.css') }}" rel="stylesheet">

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

</head>

<body>

    <!-- here we have the navbar -->
    <div class=" shadow-2 sticky-top bg-light">
        <div class="container-fluid">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid col-md-3 ">
                    <a class="navbar-brand" href="#">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="55%" 
                            style="min-width: 160px;"
                            viewBox="0 0 3354.111 713.496" enable-background="new 0 0 3354.111 713.496"
                            xml:space="preserve">
                            <g>
                                <path d="M3335.258,476.767c-10.404,0-18.854,8.45-18.854,18.854c0,10.404,8.449,18.854,18.854,18.854
                 c10.402,0,18.854-8.45,18.854-18.854C3354.111,485.217,3345.66,476.767,3335.258,476.767z M3335.258,511.485
                 c-8.77,0-15.865-7.136-15.865-15.864c0-8.77,7.135-15.864,15.865-15.864c8.77,0,15.904,7.135,15.904,15.864
                 C3351.162,504.35,3344.027,511.485,3335.258,511.485z M3341.396,492.392c0-3.428-2.432-5.461-6.02-5.461h-6.02v17.18h2.949v-6.218
                 h3.229l3.109,6.218h3.189l-3.428-6.855C3340.24,496.418,3341.396,494.743,3341.396,492.392z M3335.258,495.222h-2.91v-5.699h2.91
                 c1.992,0,3.188,0.996,3.188,2.83C3338.445,494.226,3337.211,495.222,3335.258,495.222z M1063.508,285.956v-45.6h-69.914v271.288
                 h69.914V348.976c0-29.457,18.894-43.927,48.351-43.927h38.266v-64.692h-32.686C1091.849,240.356,1069.607,253.709,1063.508,285.956
                 z M1215.615,133.053c-23.916,0-42.252,18.894-42.252,42.81c0,23.358,18.336,42.252,42.252,42.252s42.252-18.894,42.252-42.252
                 C1257.866,151.946,1239.531,133.053,1215.615,133.053z M1180.737,511.645h69.756V240.356h-69.756V511.645z M1582.766,376
                 c0,77.448-62.779,140.229-140.228,140.229c-31.251,0-59.591-10.244-82.312-27.544v102.601h-69.755V240.356h69.755v22.959
                 c22.721-17.299,51.061-27.543,82.312-27.543C1519.987,235.772,1582.766,298.552,1582.766,376z M1512.573,376
                 c0-42.052-34.12-76.173-76.173-76.173s-76.173,34.121-76.173,76.173c0,42.053,34.121,76.173,76.173,76.173
                 C1478.453,452.173,1512.573,418.093,1512.573,376z M2795.152,352.204l-40.697-11.161c-26.785-6.976-37.189-15.187-37.189-29.337
                 c0-13.792,14.668-23.438,35.635-23.438c19.971,0,35.635,13.074,35.635,29.815v1.554h64.295v-1.554
                 c0-49.228-40.139-82.312-99.93-82.312c-59.191,0-102.201,33.044-102.201,78.604c0,35.436,23.477,62.142,64.453,73.223
                 l38.984,10.643c29.615,8.211,40.617,17.3,40.617,33.603c0,17.18-15.904,28.739-39.582,28.739
                 c-24.674,0-41.295-15.626-41.295-38.824v-1.555h-68.24v1.555c0,55.645,44.803,94.548,108.979,94.548
                 c61.822,0,106.705-37.986,106.705-90.283C2861.32,400.354,2849.84,366.793,2795.152,352.204z M1830.219,240.356h69.754v271.288
                 h-69.754v-22.96c-22.721,17.3-51.062,27.544-82.312,27.544c-77.447,0-140.227-62.78-140.227-140.229s62.78-140.228,140.227-140.228
                 c31.25,0,59.592,10.244,82.312,27.543V240.356z M1830.219,376L1830.219,376c0-42.092-34.121-76.173-76.174-76.173
                 s-76.172,34.121-76.172,76.173c0,42.053,34.119,76.173,76.172,76.173C1796.137,452.173,1830.219,418.093,1830.219,376z
                  M2151.85,143.815h69.756v367.869h-69.756v-22.96c-22.721,17.3-51.061,27.544-82.311,27.544
                 c-77.449,0-140.229-62.78-140.229-140.229s62.779-140.228,140.229-140.228c31.25,0,59.59,10.244,82.311,27.543V143.815z
                  M2151.85,376c0-42.052-34.121-76.173-76.174-76.173c-42.051,0-76.172,34.121-76.172,76.173c0,42.053,34.08,76.173,76.172,76.173
                 C2117.729,452.173,2151.85,418.093,2151.85,376z M2545.469,511.645h69.754V240.356h-69.754V511.645z M2580.346,133.053
                 c-23.916,0-42.252,18.894-42.252,42.81c0,23.358,18.336,42.252,42.252,42.252s42.252-18.894,42.252-42.252
                 C2622.598,151.946,2604.262,133.053,2580.346,133.053z M3162.822,376c0,77.448-62.779,140.229-140.229,140.229
                 c-77.447,0-140.227-62.78-140.227-140.229s62.779-140.228,140.227-140.228C3100.043,235.772,3162.822,298.552,3162.822,376z
                  M3098.768,376c0-42.052-34.121-76.173-76.174-76.173s-76.172,34.121-76.172,76.173c0,42.053,34.08,76.173,76.172,76.173
                 C3064.646,452.173,3098.768,418.093,3098.768,376z M1027.793,143.815H760.212v62.222h99.053v305.607h69.516V206.037h99.053v-62.222
                 H1027.793z M2381.006,437.345l-62.062-196.988h-73.264l93.074,271.288h83.945l93.631-271.288h-73.264L2381.006,437.345z
                  M3265.023,285.956v-45.6h-69.914v271.288h69.914V348.976c0-29.457,18.895-43.927,48.35-43.927h38.266v-64.692h-32.684
                  C3293.363,240.356,3271.162,253.709,3265.023,285.956z" />
                                <circle fill="#ffa500" cx="356.749" cy="356.748" r="356.748" />
                                <path
                                    d="M577.095,287.152l43.049-46.836h-95.465c-47.792-32.646-105.51-51.659-167.931-51.659
                 c-62.342,0-119.899,19.054-167.612,51.659H93.432l43.049,46.836c-26.387,24.075-42.929,58.754-42.929,97.259
                 c0,72.665,58.914,131.578,131.579,131.578c34.519,0,65.968-13.313,89.446-35.077l42.172,45.919l42.172-45.879
                 c23.478,21.764,54.887,35.037,89.406,35.037c72.665,0,131.658-58.913,131.658-131.578
                 C620.024,345.866,603.483,311.188,577.095,287.152z M225.17,473.458c-49.188,0-89.047-39.859-89.047-89.047
                 s39.86-89.048,89.047-89.048c49.187,0,89.047,39.86,89.047,89.048S274.357,473.458,225.17,473.458z M356.788,381.82
                 c0-58.595-42.61-108.898-98.853-130.383c30.413-12.716,63.776-19.771,98.813-19.771s68.439,7.055,98.853,19.771
                 C399.399,272.962,356.788,323.226,356.788,381.82z M488.367,473.458c-49.188,0-89.048-39.859-89.048-89.047
                 s39.86-89.048,89.048-89.048s89.047,39.86,89.047,89.048S537.554,473.458,488.367,473.458z M488.367,337.694
                 c-25.79,0-46.677,20.887-46.677,46.677c0,25.789,20.887,46.676,46.677,46.676c25.789,0,46.676-20.887,46.676-46.676
                 C535.042,358.621,514.156,337.694,488.367,337.694z M271.846,384.411c0,25.789-20.887,46.676-46.676,46.676
                  s-46.676-20.887-46.676-46.676c0-25.79,20.887-46.677,46.676-46.677C250.959,337.694,271.846,358.621,271.846,384.411z" />
                            </g>
                        </svg>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="container-fluid col-md-5 ">

                    <form class="d-md-flex d-none col-md-12">
                        <div class="input-group ">
                            <button class="btn btn-outline-dark" type="button" id="button-addon1"><i
                                    class="fas fa-search"></i></button>
                            <input type="text" class="form-control inbSearch" placeholder=""
                                aria-label="Example text with button addon" aria-describedby="button-addon1" style="border-left: transparent;">
                        </div>
                    </form>

                </div>
                <div class="container-fluid col-md-4">
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav me-0 mb-2 mb-lg-0">
                            <li class="nav-item d-md-none d-flex ">
                                <form class="d-md-none d-flex">
                                    <div class="input-group mb-3">
                                        <button class="btn btn-outline-dark" type="button" id="button-addon1"><i
                                                class="fas fa-search fs-7"></i></button>
                                        <input type="text" class="form-control" placeholder=""
                                            aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    </div>
                                </form>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex " aria-current="page" href="#"> <svg viewBox="0 0 24 24"
                                        width="24px" height="24px" class="fecdL d Vb wQMPa">
                                        <path
                                            d="M3.366 21.984a1.36 1.36 0 01-1.067-.513 1.352 1.352 0 01-.266-1.148l1.445-6.637 10.249-10.22c1.625-1.62 4.352-1.939 6.153-.674a4.8 4.8 0 012.098 3.518 4.756 4.756 0 01-1.384 3.833l-10.326 10.32-6.902 1.521zm2.038-7.245l-1.069 4.906 4.875-1.103 7.909-7.902-3.796-3.797-7.919 7.896zm9.41-9.382l3.794 3.795.499-.499a2.662 2.662 0 00.775-2.144c-.076-.81-.502-1.514-1.196-1.982-1.029-.724-2.549-.49-3.472.431l-.4.399z">
                                        </path>
                                    </svg><span class="ps-2" > Review</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex" href="#"><svg viewBox="0 0 24 24" width="24px" height="24px"
                                        class="fecdL d Vb wQMPa">
                                        <path
                                            d="M12.001 20.729s-6.741-5.85-8.485-8.003c-2.055-2.541-2.018-5.837.089-7.836a5.928 5.928 0 014.104-1.618c1.548 0 3.005.575 4.104 1.618l.174.165.162-.155a5.93 5.93 0 014.104-1.618c1.548 0 3.005.574 4.104 1.618 2.158 2.049 2.192 5.273.084 7.841-1.755 2.139-8.44 7.988-8.44 7.988zM7.709 5.271a3.935 3.935 0 00-2.727 1.068c-1.578 1.498-1.06 3.708.088 5.128 1.306 1.613 5.333 5.204 6.925 6.605 1.583-1.404 5.58-4.993 6.899-6.601 1.195-1.455 1.685-3.603.085-5.122-.726-.689-1.694-1.069-2.728-1.069s-2.001.38-2.728 1.069l-1.539 1.462-1.551-1.473a3.925 3.925 0 00-2.724-1.067z">
                                        </path>
                                    </svg><span class="ps-2"> Trips</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex" href="#"><svg viewBox="0 0 24 24" width="24px" height="24px"
                                        class="fecdL d Vb wQMPa">
                                        <path
                                            d="M12 2c.539 0 .976.437.976.976v1.032c1.779.21 3.268 1 4.356 2.222 1.271 1.426 1.937 3.372 1.97 5.512.013.755.016 3.706.016 5.381h1.463v1.951H15.77a4.4 4.4 0 01-.336.924 3.545 3.545 0 01-1.2 1.382c-.589.391-1.332.62-2.234.62s-1.645-.229-2.233-.621a3.538 3.538 0 01-1.2-1.382 4.4 4.4 0 01-.336-.924H3.22v-1.951h1.463c0-1.669.002-4.602.015-5.372-.007-2.149.663-4.098 1.944-5.523 1.098-1.222 2.601-2.009 4.383-2.219V2.976A.975.975 0 0112 2zM6.634 17.122h10.732c0-1.675-.003-4.611-.016-5.351-.026-1.763-.573-3.232-1.475-4.245-.891-1-2.187-1.625-3.876-1.625-1.692 0-3.007.627-3.906 1.627-.909 1.012-1.452 2.473-1.444 4.223 0 .001-.015 3.696-.015 5.371zm3.653 1.951l.024.052c.125.249.297.471.538.63.234.156.59.294 1.151.294.562 0 .917-.138 1.151-.294a1.601 1.601 0 00.561-.682h-3.425z">
                                        </path>
                                    </svg><span class="ps-2">Alerts</span></a>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="btn btn-dark btn-rounded">Sign in</button>

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>




    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-3 pe-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="">Establishment Type</h5>
                        <!-- Default checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                            <label class="form-check-label" for="flexCheckDefault">
                                Restaurants
                            </label>
                        </div>

                        <!-- Checked checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                            <label class="form-check-label" for="flexCheckChecked">
                                Quick Bites
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                            <label class="form-check-label" for="flexCheckChecked">
                                Dessert
                            </label>
                        </div>
                        <!-- Checked checkbox -->


                        <div class="collapse" id="collapseShowMore">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                                <label class="form-check-label" for="flexCheckChecked">
                                    Coffee & Tea
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                                <label class="form-check-label" for="flexCheckChecked">
                                    Bakeries
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                                <label class="form-check-label" for="flexCheckChecked">
                                    Specialty Food Market
                                </label>
                            </div>
                        </div>

                        <a class="nav-link dropdown-toggle ps-0" data-bs-toggle="collapse" href="#collapseShowMore"
                            role="button" aria-expanded="false" aria-controls="collapseExample">
                            Show more
                        </a>

                        <hr>

                        <h5 class="">Restaurant features</h5>
                        <!-- Default checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                            <label class="form-check-label" for="flexCheckDefault">
                                Delivery
                            </label>
                        </div>

                        <!-- Checked checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                            <label class="form-check-label" for="flexCheckChecked">
                                Takeout
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                            <label class="form-check-label" for="flexCheckChecked">
                                Gift Cards Available
                            </label>
                        </div>
                        <!-- Checked checkbox -->


                        <div class="collapse" id="collapseShowMore">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                                <label class="form-check-label" for="flexCheckChecked">
                                    Reservations
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                                <label class="form-check-label" for="flexCheckChecked">
                                    Drive Thru
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                                <label class="form-check-label" for="flexCheckChecked">
                                    Jazz Bar

                                </label>
                            </div>
                        </div>

                        <a class="nav-link dropdown-toggle ps-0" data-bs-toggle="collapse" href="#collapseShowMore"
                            role="button" aria-expanded="false" aria-controls="collapseExample">
                            Show more
                        </a>

                        <hr>
                        <h5 class="card-title">Meals</h5>
                        <!-- Default checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                            <label class="form-check-label" for="flexCheckDefault">
                                Breakfast
                            </label>
                        </div>

                        <!-- Checked checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                            <label class="form-check-label" for="flexCheckChecked">
                                Brunch
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                            <label class="form-check-label" for="flexCheckChecked">
                                Lunch
                            </label>
                        </div>
                        <!-- Checked checkbox -->


                        <div class="collapse" id="collapseShowMore">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                                <label class="form-check-label" for="flexCheckChecked">
                                    Dinner
                                </label>
                            </div>
                           
                        </div>

                        

                        <hr>

                        <h5 class="card-title">Reservations</h5>
                        <!-- Default checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                            <label class="form-check-label" for="flexCheckDefault">
                                Online Reservations
                            </label>
                        </div>

                        <!-- Checked checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                            <label class="form-check-label" for="flexCheckChecked">
                                Restaurant Deals
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                            <label class="form-check-label" for="flexCheckChecked">
                                Available Tonight
                            </label>
                        </div>
                        <!-- Checked checkbox -->

                        <hr>


                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-9">
                <div class="row">
                    <div class="owl-carousel  owl-theme owl-loaded">
                        <div class="owl-stage-outer">
                            <h3 class="mb-0">Delivery Available</h3>
                            <div class="owl-stage row justify-content-between">
                                <div class="owl-item  m-0">
                                    <div class="card mb-3 ">

                                        
                                        <div class="bg-image hover-overlay ripple position-relative"
                                            data-mdb-ripple-color="light">

                                            <div class="bg-image hover-overlay ripple position-absolute rounded-circle d-flex justify-content-center align-items-center"
                                                style="left: 88%; top: 4%; z-index: 2 ; height: 25px; width: 25px; background-color: rgb(255, 255, 255);"
                                                data-mdb-ripple-color="red">

                                                <a href="#!">
                                                    <!-- <i class="fas fa-heart text-danger pt-2"></i> -->
                                                    <i class="far fa-heart text-danger pt-2"></i>
                                                </a>
                                            </div>

                                            <img src="" class="img-fluid" />

                                            <a href="#!">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)">
                                                </div>
                                            </a>
                                        </div>

                                        <div class="card-body">
                                            <h5 class="card-title">Les Bariol??s de Maud</h5>

                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>

                                            <p class="card-text">
                                                Lebanese, Mediterranean $
                                            </p>
                                            <button type="button" class="btn btnOrderOnline ">Order Online</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="./JS/js.js"></script> --}}
    <script src="{{ asset('js/js.js') }}" defer></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            margin: 5,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                800: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: false,
                    loop: false
                }
            },
        })

        let matchmedia = window.matchMedia("(min-width: 768px)");

        window.addEventListener('resize', () => {
            let ele = document.querySelectorAll('.coll');
            ele.forEach(elem => {
                if (!matchmedia.matches) {
                    elem.classList.replace("collapse.show", "collapse")
                } else {
                    elem.classList.replace("collapse", "collapse.show")
                }
            })
        });



        let index = 0;

        function collapseplus(ele) {
            let svgplus = ele.querySelector(".svgplus");
            if (index == 0) {
                index = 1;
                svgplus.innerHTML = `<path d="M2 13.111v-2.222h20v2.222z"></path>`;
            } else {
                svgplus.innerHTML =
                    `<path d="M13.111 22h-2.222v-8.889H2v-2.222h8.889V2h2.222v8.889H22v2.222h-8.889z"></path>`;
                index = 0;
            }
        }

        function displaynone(ele) {
            ele.style.display = "none";
        }

    </script>
</body>

</html>