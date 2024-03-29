<?php include 'components/header.inc.php'; ?>
<?php include 'components/navbar.php'; ?>

<style>
    .center-vertical {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .center-vertical img {
        max-height: 100%;
        width: auto;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center bg-light mb-4"><?php echo $lang['certificates']; ?></h1>

            <!-- Certificate 2 -->
            <div class="row mb-4 ">
                <div class="col-md-6">
                    <h3><?php echo $lang['pool_certificate']; ?></h3>
                    <p><?php echo $lang['pool_certificate_description']; ?></p>
                    <hr>
                    <a href="pdfs/WOOD_CERTIFICATE.pdf" download class="btn btn" style="background-color: #925028;
    border-color: #925028; color:white"><?php echo $lang['download_certificate']; ?></a>
                </div>

                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <a href="pdfs/WOOD_CERTIFICATE.pdf"> <img src="images/IMG_2756.jpg" alt="<?php echo $lang['pool_certificate']; ?>" class="img-fluid"> </a>
                </div>
            </div>

            <!-- Additional Text -->
            <!-- <div class="additional-text mt-5">
                <h2 class="text-center  mb-4"><?php echo $lang['trusted_certification_partner']; ?></h2>
                <p><?php echo $lang['trusted_certification_partner_description']; ?></p>
            </div> -->

        </div>
    </div>
</div>

<?php include 'components/footer.php'; ?>