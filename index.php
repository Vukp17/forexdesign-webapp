<!-- index.php -->
<?php include 'components/header.inc.php'; ?>

<body>

    <?php include 'components/navbar.php'; ?>

    <!-- Content -->
    <div class="container-fluid">
        <div class="container">
            <div class="row mt-5">
                <!-- Text Content -->
                <div class="col-lg-6 bg-light p-5">
                    <h1>Forex design</h1>
                    <p>Let us bring the essence of Scandinavia to your project.</p>
                </div>
                <!-- Image -->
                <div class="col-lg-6 p-0">
                    <img src="images/kuca2.jpg" class="img-fluid" alt="Image">
                </div>
            </div>
            <!-- Services Section -->
            <!-- Card Section -->
            <div class="row">
                <div class="col-lg-6 bg-light p-5">
                    <h2>Our Services</h2>
                    <p>Naše usluge uključuju izgradnju, isporuku visokokvalitetnih drvenih elemenata za opremanje eksterijera ,izgradnju montažnih objekata i adekvatnih veznih elemenata.
                        Profesionalnim i pouzdanim uslugama, vaši projekti na otvorenom , sa zadovaljavanjem svih ekoloških standarda, postaju stvarnost.
                        Svako dreveni element poseduje CE sertifikat i 20 godišnju garanciju, vezni elementi su galvanizovani ili A2 kvaliteta.
                        .</p>
                </div>
                <div class="col-lg-6 bg-light p-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Contact Us</h5>
                            <p class="card-text">If you have any inquiries or need assistance, feel free to contact us.</p>
                            <a href="contact.php" class="btn btn-primary">Go to Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- See Our Projects Section -->
            <div class="row  bg-light">
                <div class="col-lg-12">
                    <h2 class="text-center">See Our Projects</h2>
                    <div id="projectCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/Picture7.jpg" class="d-block mx-auto carousel-image fixed-size" alt="Pool">
                            </div>
                            <div class="carousel-item">
                                <img src="images/Picture6.jpg" class="d-block mx-auto carousel-image fixed-size" alt="Facade">
                            </div>
                            <div class="carousel-item">
                                <img src="images/Picture2.jpg" class="d-block mx-auto carousel-image fixed-size" alt="Pergola">
                            </div>
                            <!-- Add more carousel items as needed -->
                        </div>
                        <a class="carousel-control-prev" href="#projectCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#projectCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include 'components/footer.php'; ?>
    <script>
        // lightbox.option({
        //     'resizeDuration': 200,
        //     'wrapAround': true
        // })
    </script>

    <!-- Bootstrap JS and jQuery -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>