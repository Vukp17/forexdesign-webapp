<!-- index.php -->
<?php include 'components/header.inc.php'; ?>
<style>
    body {
        min-height: 100%;
        display: grid;
        grid-template-rows: auto 1fr auto;
    }

    #projectCarousel {
        margin-bottom: 20px;
    }

    .carousel-image {
        max-width: 80%;
        /* Adjust as needed */
        height: auto;
        /* Maintain aspect ratio */
    }

    @media (max-width: 576px) {
        .carousel-image {
            max-width: 100%;
        }
    }

    .brown {
        background-color: #925028;
        border-color: #925028;
        color: white;
    }

    .card {
        width: 18rem;
        height: 100%;
        /* Adjust as needed */
    }

    .card img {
        width: 100%;
        /* Adjust as needed */
        height: auto;
        /* Adjust as needed */
    }

    /* .croped-imgs .carousel-item {
    max-width: 800px;
} */

    /* #projectCarousel {
    max-width: 800px;
} */
    .croped-imgs .carousel-item img {
        max-width: 800px;
    }

    .pricing-table {
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 20px;
        padding: 20px;
        text-align: center;
    }

    .pricing-table .price {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .pricing-table .features {
        list-style-type: none;
        padding: 0;
    }

    .pricing-table .features li {
        margin-bottom: 10px;
    }

    .pricing-table .button {
        margin-top: 20px;
    }

    .pricing-table img {
        max-width: 100px;
        margin-bottom: 15px;
    }

    #calculator {
        width: 300px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    #calculator input {
        width: 100%;
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    #calculator button {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    #calculator button:hover {
        background-color: #45a049;
    }

    #calculator p {
        margin-top: 10px;
    }

    .newest-project {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 2rem;
        margin-top: 2rem;
    }

    .newest-project .card {
        width: 100%;
        border-radius: 10px;

    }

    .partners-section {
        display: flex;
        margin-top: 2rem;
        margin-bottom: 2rem;
        justify-content: space-between;
    }

    .partners-section .card {
        max-height: 500px;
        border-radius: 10px;
        min-height: 200px;
        width: 360px;
    }

    @media(max-width: 1000px) {
        .newest-project .card {
            width: 100%;
        }

        .partners-section .card {
            margin-bottom: 1rem;
            padding: 2rem;
            max-height: 500px;
            min-height: 380px;
            width: 100%;
        }

        .partners-section {
            flex-direction: column;
            align-items: center;
        }

    }

    @media(max-width: 500px) {
        .partners-section .card {
            min-height: 250px;
        }
    }


    @media(min-width: 1000px) and (max-width: 1200px) {
        .partners-section .card {
            max-width: 300px;
        }
    }

    .hero h1 {
        font-weight: bolder;
        font-family: sans-serif;
    }

    .hero .icon {
        width: 25px;
        margin-left: 5px;
    }
</style>

<body>

    <?php include 'components/navbar.php'; ?>

    <!-- Content -->
    <div class="container-fluid bg-light">
        <div class="container pt-5 pb-5">
            <div class="row hero mt-3">
                <!-- Text Content -->
                <div class="col-lg-6 bg-light p-5">
                    <h1> <?php echo $lang['wooden_constructions']; ?></h1>
                    <p><?php echo $lang['scandinavia_essence']; ?></p>
                    <!-- Verified Icon -->
                    <img class="icon" src="images/verified-badge-svgrepo-com.svg" alt="Verified Icon">
                    <span>Verified</span>
                    <!-- Trusted Company Icon -->
                    <img class="icon" src="images/workspace-trusted-svgrepo-com.svg" alt="Trusted Company Icon">
                    <span>Trusted Company</span>
                </div>
                <!-- Image -->
                <div class="col-lg-6 p-0">
                    <img src="images/kuca2.jpg" class="img-fluid" alt="Image">
                </div>
            </div>
            <!-- Services Section -->
            <!-- Card Section -->
            <div class="row">
                <div class="col-lg-4 bg-light p-5">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $lang['contact_us']; ?></h3>
                            <p class="card-text"><?php echo $lang['contact_us_description']; ?></p>
                            <a href="contact.php" class="btn btn" style="background-color: #925028;
                         border-color: #925028; color:white"><?php echo $lang['go_to_contact_us']; ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 bg-light p-5">
                    <h2><?php echo $lang['our_services']; ?></h2>
                    <p><?php echo $lang['services_description']; ?></p>
                </div>

            </div>
            <!-- Partners Section -->
            <div class="row bg-light">
                <div class="col-lg-12">
                    <h2 class="text-center bg-light pr-2"><?php echo $lang['our_partners']; ?></h2>

                </div>
            </div>
            <div class="row partners-section">

                <div class="card">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="https://www.zasavica.org.rs/"> <img src="images/zasavica_logo.png" alt="Partner 2 Logo"> </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <a href="https://www.modulor.eco/"><img src="images/modulor_logo.png" alt="Partner 3 Logo"> </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body d-flex justify-content-center align-items-center ">
                        <a href="https://www.modulor.eco/"><img src="images/lawoofice_logo.png" style="max-height: 100px;" alt="Partner 3 Logo"> </a>
                    </div>
                </div>

            </div>



            <div class="row bg-light">
                <div class="col-lg-12">
                    <h2 class="text-center bg-light pr-2"><?php echo $lang['latest_project']; ?></h2>

                </div>
            </div>
            <div class="newest-project">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href=" https://novosadska.tv/2023/09/21/jos-tri-velike-investicije-u-opstini-vrbas-do-kraja-godine/ "><img src="https://novosadska.tv/wp-content/uploads/2023/09/dk-ravno-selo-1-960x640.jpg" class="card-img-top" alt="..."></a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Rekonstrukcija fasade</h5>
                                <p class="card-text"> Rekonstrukcija fasade na domu kulture u Ravnom selu povodm Ravno Selo Film Festival</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <h2 class="text-center mb-4"> <?php echo $lang['our_products']; ?></h2>
            <!-- Pricing Section -->
            <div id="pricingCarousel" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pricing-table">
                                        <img src="images/pricing/28x120mm.jpg" alt="Basic Plan">
                                        <div class="price">Daska</div>
                                        <ul class="features">
                                            <li>Dimenzije:28x120mm</li>
                                        </ul>
                                        <button class="btn brown btn-primary button">Ask</button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table">
                                        <img src="images/pricing/45x170mm.jpg" alt="Basic Plan">
                                        <div class="price">Daska</div>
                                        <ul class="features">
                                            <li>Dimenzije:45x170mm</li>
                                        </ul>
                                        <button class="btn brown btn-primary button">Ask</button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table">
                                        <img src="images/pricing/45x190mm.jpg" alt="Basic Plan">
                                        <div class="price">Daska</div>
                                        <ul class="features">
                                            <li>Dimenzije:45x190mm</li>
                                        </ul>
                                        <button class="btn brown btn-primary button">Ask</button>
                                    </div>
                                </div>

                                <!-- Add more pricing tables here -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pricing-table">
                                        <img src="images/pricing/greda 45x120mm.jpg" alt="Basic Plan">
                                        <div class="price">Greda</div>
                                        <ul class="features">
                                            <li>Dimenzije:45x120mm</li>
                                        </ul>
                                        <button class="btn brown btn-primary button">Ask</button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table">
                                        <img src="images/pricing/greda 70x70mm.jpg" alt="Basic Plan">
                                        <div class="price">Greda</div>
                                        <ul class="features">
                                            <li>Dimenzije:70x70mm</li>
                                        </ul>
                                        <button class="btn brown btn-primary button">Ask</button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table">
                                        <img src="images/pricing/greda 95x95mm.jpg" alt="Basic Plan">
                                        <div class="price">Greda</div>
                                        <ul class="features">
                                            <li>Dimenzije:95x95mm</li>
                                        </ul>
                                        <button class="btn brown  btn-primary button">Ask</button>
                                    </div>
                                </div>

                                <!-- Add more pricing tables here -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pricing-table">
                                        <img src="images/pricing/greda 45x120mm.jpg" alt="Basic Plan">
                                        <div class="price">Letva</div>
                                        <ul class="features">
                                            <li>Dimenzije:45x120mm</li>
                                        </ul>
                                        <button class="btn brown btn-primary button">Ask</button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table">
                                        <img src="images/pricing/greda 70x70mm.jpg" alt="Basic Plan">
                                        <div class="price">Greda</div>
                                        <ul class="features">
                                            <li>Dimenzije:70x70mm</li>
                                        </ul>
                                        <button class="btn brown btn-primary button">Ask</button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table">
                                        <img src="images/pricing/greda 95x95mm.jpg" alt="Basic Plan">
                                        <div class="price">Greda</div>
                                        <ul class="features">
                                            <li>Dimenzije:95x95mm</li>
                                        </ul>
                                        <button class="btn brown btn-primary button">Ask</button>
                                    </div>
                                </div>

                                <!-- Add more pricing tables here -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pricing-table">
                                        <img src="images/pricing/letva 45x45mm.jpg" alt="Basic Plan">
                                        <div class="price">Letva</div>
                                        <ul class="features">
                                            <li>Dimenzije:45x45mm</li>
                                        </ul>
                                        <button class="  brown btn btn-primary button">Ask</button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table">
                                        <img src="images/pricing/letva 45x70mm (2).jpg" alt="Basic Plan">
                                        <div class="price">Letva</div>
                                        <ul class="features">
                                            <li>Dimenzije:45x70mm</li>
                                        </ul>
                                        <button class=" brown btn btn-primary button">Ask</button>
                                    </div>
                                </div>
                                <!-- Add more pricing tables here -->
                            </div>
                        </div>
                    </div>
                    <!-- Add more carousel items for additional plans -->
                </div>
                <a class="carousel-control-prev" href="#pricingCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#pricingCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- Add more carousel items here if you have more cards -->
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <div class="row ">
            <div class="col-lg-12">
                <h2 class="text-center mb-4"><?php echo $lang['gallery']; ?></h2>
                <div id="projectCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner croped-imgs">
                        <!-- <div class="carousel-item active">
                                        <img src="images/Picture7.jpg" class="d-block mx-auto carousel-image fixed-size" alt="Pool">
                                    </div> -->
                        <div class="carousel-item active">
                            <img src="Presentation/Slide4.PNG" class="d-block mx-auto carousel-image fixed-size" alt="Facade">
                        </div>
                        <div class="carousel-item ">
                            <img src="Presentation/Slide5.PNG" class="d-block mx-auto carousel-image fixed-size" alt="Facade">
                        </div>
                        <div class="carousel-item ">
                            <img src="Presentation/Slide6.PNG" class="d-block mx-auto carousel-image fixed-size" alt="Facade">
                        </div>
                        <div class="carousel-item ">
                            <img src="Presentation/Slide7.PNG" class="d-block mx-auto carousel-image fixed-size" alt="Facade">
                        </div>
                        <!-- <div class="carousel-item">
                                        <img src="images/Picture2.jpg" class="d-block mx-auto carousel-image fixed-size" alt="Pergola">
                                    </div> -->
                        <!-- Add more carousel items as needed -->
                    </div>
                    <a class="carousel-control-prev" href="#projectCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only"><?php echo $lang['previous']; ?></span>
                    </a>
                    <a class="carousel-control-next" href="#projectCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only"><?php echo $lang['next']; ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- <div id="calculator">
        <input type="number" id="length" placeholder="Enter length in meters">
        <input type="number" id="width" placeholder="Enter width in meters">
        <button id="calculate">Calculate</button>
        <p id="result"></p>
    </div> -->
    <!-- See Our Projects Section -->
    <!-- See Our Projects Section -->


    <?php include 'components/footer.php'; ?>

</body>

</html>