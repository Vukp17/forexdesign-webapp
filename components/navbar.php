<!-- navbar.php -->

<?php
session_start();
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    // Store the language setting in the session so it persists across pages
    $_SESSION['lang'] = $lang;
} else if (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else {
    $lang = 'en';  // Default language
}
include "languages/$lang.php";
?>

<style>
    .image-wrapper {
        display: flex;
        align-items: center;
    }

    .image-wrapper img {
        width: 70px;
        height: 70px;
        margin-right: 10px;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <div class="image-wrapper">
                <img  src="images/forex_design.png" alt="Logo">
                <!-- <h1>FOREX DESIGN</h1> -->
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"><?php echo $lang['home']; ?></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.php"><?php echo $lang['about_us']; ?></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php"><?php echo $lang['contact_us']; ?></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="certificates.php"><?php echo $lang['certificates']; ?></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $lang['language']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="?lang=en"><?php echo $lang['english']; ?></a>
                        <a class="dropdown-item" href="?lang=srb"><?php echo $lang['serbian']; ?></a>
                        <!-- Add more language options here if needed -->
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>