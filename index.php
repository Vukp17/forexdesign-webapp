<!-- index.php -->
<?php include 'components/header.inc.php'; ?>
<style>
    .carousel-image {
        max-width: 80%;
        /* Adjust as needed */
        height: auto;
        /* Maintain aspect ratio */
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
</style>

<body>

    <?php include 'components/navbar.php'; ?>

    <!-- Content -->
    <div class="container-fluid">
        <div class="container pt-2">
            <div class="row hero">
                <!-- Text Content -->
                <div class="col-lg-6 bg-light p-5">
                    <h1><?php echo $lang['wooden_constructions']; ?></h1>
                    <p><?php echo $lang['scandinavia_essence']; ?></p>
                </div>
                <!-- Image -->
                <div class="col-lg-6 p-0">
                    <img src="images/kuca2.jpg" class="img-fluid" alt="Image">
                </div>
            </div>
            <!-- Services Section -->
            <!-- Card Section -->
            <div class="row">
                <div class="col-lg-8 bg-light p-5">
                    <h2><?php echo $lang['our_services']; ?></h2>
                    <p><?php echo $lang['services_description']; ?></p>
                </div>
                <div class="col-lg-4 bg-light p-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $lang['contact_us']; ?></h5>
                            <p class="card-text"><?php echo $lang['contact_us_description']; ?></p>
                            <a href="contact.php" class="btn btn-primary"><?php echo $lang['go_to_contact_us']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partners Section -->
            <div class="row">
                <div class="col-lg-4 bg-light p-5">
                    <div class="card">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <img src="images/zasavica_logo.png" alt="Partner 2 Logo">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 bg-light p-5">
                    <div class="card">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <img src="images/modulor_logo.png" alt="Partner 3 Logo">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 bg-light p-5">
                    <div class="card">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <img src="images/modulor_logo.png" alt="Partner 3 Logo">
                        </div>
                    </div>
                </div>
            </div>

            <!-- See Our Projects Section -->
            <div class="row  bg-light">
                <div class="col-lg-12">
                    <h2 class="text-center bg-light mb-4"><?php echo $lang['gallery']; ?></h2>
                    <div id="projectCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
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
    </div>
    <?php include 'components/footer.php'; ?>

</body>

</html>