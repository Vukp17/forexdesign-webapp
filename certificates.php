<?php include 'components/header.inc.php'; ?>
<?php include 'components/navbar.php'; ?>

<style>
    .center-vertical {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        /* Ensure the parent container has a defined height */
    }

    /* Ensure images do not exceed their parent container's height */
    .center-vertical img {
        max-height: 100%;
        /* Limit image height to 100% of parent container */
        width: auto;
        /* Maintain aspect ratio */
    }
</style>

</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center bg-light mb-4">Certificates</h1>

            <!-- Certificate 1 -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <h3>Bmg trada certificate</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <hr>
                    <a href="images/image001.jpg" download class="btn btn-primary">Download Certificate</a>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center"> <!-- Added d-flex, align-items-center, justify-content-center classes here -->
                    <img src="images/image001.jpg" alt="Certificate 1" class="img-fluid">
                </div>
            </div>

            <!-- Certificate 2 -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <h3>Pool Certificate</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <hr>
                    <a href="images/IMG_2756.jpg" download class="btn btn-primary">Download Certificate</a>
                </div>
                    
                <div class="col-md-6 d-flex align-items-center justify-content-center"> <!-- Added d-flex, align-items-center, justify-content-center classes here -->
                    <img src="images/IMG_2756.jpg" alt="Certificate 2" class="img-fluid">
                </div>
            </div>

            <!-- Add more certificates as needed -->

            <!-- Additional Text -->
            <div class="additional-text mt-5">
                <h2>We Are Your Trusted Certification Partner</h2>
                <p>We are committed to certification work with customer focus, competence, and engagement as our guiding principles. Dialogue with you is our most important tool.</p>
            </div>

        </div>
    </div>
</div>


<?php include 'components/footer.php'; ?>