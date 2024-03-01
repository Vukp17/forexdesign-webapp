<!-- index.php -->
<?php include 'components/header.inc.php'; ?>

<body>

    <?php include 'components/navbar.php'; ?>

    <!-- Content -->
    <div class="container-fluid">
        <div class="container pt-2">
            <div class="row hero">
                <!-- Text Content -->
                <div class="col-lg-6 bg-light p-5">
                    <?php echo "<h1>" . $lang['welcome'] . "</h1>"; ?>
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
                                <img src="images/Picture6.jpg" class="d-block mx-auto carousel-image fixed-size" alt="Facade">
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