<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/about.css">
    <style>
        /* .container {
            margin-top: 50px;
        }

        .row {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .col-md-4 {
            margin-right: 20px;
        } */
    </style>
</head>

<?php include 'components/header.inc.php'; ?>

<body>
<?php include 'components/navbar.php'; ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <!-- Your image here -->
                <img src="images/sample.jpg" alt="Your Image" style="max-width: 100%;">
            </div>
            <div class="col-md-4">
                <h1>Contact Us</h1>
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

</html>
