

<head>
    <link rel="stylesheet" href="css/about.css">
    <style>
        .hero {
            background-image: url('images/wallpaperflare.com_wallpaper.jpg');
            background-size: cover;
            background-position: center;
        }

        .form-container {
            text-align: center;
        }

        .form-container form {
            max-width: 100%;
        }
    </style>
</head>
<?php include 'components/header.inc.php'; ?>

<body>

    <?php include 'components/navbar.php'; ?>

    <div class="container">
        <div class="row justify-content-center hero bg-light pt-2">
            <h1 style="color: white;"><?php echo $lang['contact']; ?></h1>
        </div>
        <div class="row justify-content-center  bg-light">
            <hr>
        </div>
        <div class="row justify-content-center  bg-light">
            <div class="col-md-4">
                <div class="contact-info">
                    <p><strong><?php echo $lang['telephone']; ?>:</strong> +381 641332846</p>
                    <hr>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info">
                    <p><strong><?php echo $lang['email']; ?>:</strong> darkopapic2576@gmail.com</p>
                    <hr>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-info">
                    <p><strong><?php echo $lang['socials']; ?>:</strong> Facebook | Twitter | Instagram</p>
                    <hr>
                </div>
            </div>
        </div>

        <div class="row justify-content-center pb-3 bg-light ">
            <h2><?php echo $lang['feel_free_to_write']; ?></h2>
        </div>
        <div class="row justify-content-center mt- form-container bg-light">
            <div class="col-md-4 ">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group">
                        <label for="name"><?php echo $lang['name']; ?>:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><?php echo $lang['email']; ?>:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message"><?php echo $lang['message']; ?>:</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><?php echo $lang['submit']; ?></button>
                </form>
            </div>
        </div>
    </div>
    <?php include 'components/footer.php'; ?>
</body>

</html>