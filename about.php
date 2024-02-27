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
    $aboutText = "Good Wood Sweden AB was founded in 2016 by Alexander, Linnéa and Fredrik. Together we have almost 60 years of experience in Swedish sawmills and planing mills industry.
    In 2018 Alma Ekelöf joined our team.
    In 2019 we moved to a new office.
    
    There are plenty of sawmills close to our office in Växjö, southern Sweden which we are co-operating with in both sawn and planed timber. Our international customers are located in Europe and Asia.";

    // People Who Work and Invent
    $people = [
        [
            "name" => "Darko Papić",
            "position" => "CEO",
            "bio" => "John is the visionary leader behind our company. With his extensive knowledge and expertise, he drives our team to success.",
            "image" => "",
            "linkedin" => "https://www.linkedin.com/in/darko-papić/",
            "email" => "darko@example.com"
        ],
        [
            "name" => "Dejan Jelikić",
            "position" => "CTO",
            "bio" => "Jane is our technology guru. She is responsible for overseeing the development of our cutting-edge solutions.",
            "image" => "",
            "linkedin" => "https://www.linkedin.com/in/dejan-jelikić/",
            "email" => "dejan@example.com"
        ],
        // Add more people here...
    ];

    // Output the About Us Text
    echo "<h1>About Us</h1>";
    echo "<p>$aboutText</p>";

    // Output the People Who Work and Invent
    echo "<h2>People Who Work and Invent</h2>";
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