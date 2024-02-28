<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/about.css">

</head>

<?php include 'components/header.inc.php'; ?>

<body>
    <?php include 'components/navbar.php'; ?>

    <div class="container">
        <div class="row justify-content-center bg-light pt-2">
            <h1>Contact </h1>
        </div>
        <div class="row justify-content-center  bg-light">
        <hr>
        </div>
        <div class="row justify-content-center  bg-light">
            <div class="col-md-4">
                <div class="contact-info">
                    <p><strong>Telephone:</strong> 123-456-7890</p>
                    <hr>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info">
                    <p><strong>Email:</strong> info@example.com</p>
                    <hr>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info">
                    <p><strong>Socials:</strong> Facebook | Twitter | Instagram</p>
                    <hr>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-3 ">
            <h2>Feel free to write to us</h2>
        </div>
        <div class="row justify-content-center mt-">
            <div class="col-md-4 ">
                <!-- Your image here -->
                <img src="images/contactus.jpg" alt="Your Image" style="max-width: 100%;">
            </div>
            <div class="col-md-4">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php include 'components/footer.php'; ?>
</body>