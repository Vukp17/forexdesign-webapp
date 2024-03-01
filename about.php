<?php include 'components/header.inc.php'; ?>

<?php include 'components/navbar.php'; ?>
<style>
    .person {
        margin-bottom: 20px;
    }

    .person-image {
        width: 100%;
        max-width: 200px;
    }
</style>
<div class="container">
    <?php
    // About Us Text
    $aboutText = $lang['about_us_text'];

    // People Who Work and Invent
    $people = [
        [
            "name" => "Darko Papić",
            "position" => $lang['ceo'],
            "bio" => $lang['ceo_bio'],
            "image" => "",
            "linkedin" => "https://www.linkedin.com/in/darko-papić/",
            "email" => "darko@example.com"
        ],
        [
            "name" => "Dejan Jelikić",
            "position" => $lang['cto'],
            "bio" => $lang['cto_bio'],
            "image" => "",
            "linkedin" => "https://www.linkedin.com/in/dejan-jelikić/",
            "email" => "dejan@example.com"
        ],
        // Add more people here...
    ];
    ?>
    <h1 class="text-center bg-light mb-4"><?php echo $lang['about_us']; ?></h1>
    <?php

    // Output the About Us Text
    echo "<p>$aboutText</p>";

    // Output the People Who Work and Invent
    echo "<h2>" . $lang['people_who_work_and_invent'] . "</h2>";
    echo "<hr>";
    foreach ($people as $person) {
        echo "<div class='person'>";
        if (!empty($person['image'])) {
            echo "<img src=\"images/{$person['image']}\" alt=\"{$person['name']}\" class='person-image'>";
        }
        echo "<h3>{$person['name']}</h3>";
        echo "<p>{$person['position']}</p>";
        echo "<p>{$person['bio']}</p>";
        echo "<a href=\"{$person['linkedin']}\" target='_blank'>LinkedIn</a> | ";
        echo "<a href=\"mailto:{$person['email']}\">Email</a>";
        echo "</div>";
        echo "<hr>";
    }
    ?>
</div>

<?php include 'components/footer.php'; ?>