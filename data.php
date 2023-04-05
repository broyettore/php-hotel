<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Beautiful hotel by the sea, ideal for a family vacation.',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Green Hotel known for the amazing landscape and acces to nature !',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Incredible Hotel with elevated standards and cuisine, not to mention its private beach.',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Simple and minimalist Hotel, ideal for a peaceful and reaxling time with loved ones.',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Traditional italian hotel, loved not only for the flawless service but also for the gentle staff and needless to say mind-blowing FOOD.',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    $clientName = $_GET["clientName"];
    $clientEmail = $_GET["clientEmail"];
    $clientHotel = $_GET["clientHotel"];
    $parking = $_GET["parkingOption"];
    
    echo "<prev>";
    var_dump(isset($parking));
    echo "</prev>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- my css  -->
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Hotel Union</title>
</head>
<body>

<div class="parallax">
    <main>
        <section id="jumbo" class="d-flex flex-column align-items-center justify-content-center">
            <div class="container ms-ctn-result d-flex flex-column align-items-start justify-content-start p-3 my-4">
                <h2 class="m-2 fs-2">Your Booking Information</h2>
               <ul class="m-2">
                    <li class="my-3">
                        <?php
                        echo "Name: " . $clientName
                        ?>
                    </li>
                    <li class="my-3">
                        <?php
                        echo "Email: " . $clientEmail
                        ?>
                    </li>
                    <li class="my-3">
                        <?php
                        echo "Hotel Selected: " . $clientHotel
                        ?>
                    </li>
                    <li class="my-3">
                        Parking:
                        <?php
                        if (isset($parking) && $parking == "on") {
                             foreach($hotels as $hotel) {
                            if ($hotel["parking"] === true ) {
                                echo $hotel["name"] . ", ";
                            }
                        }} else {
                            echo "not checked";
                        }
                        ?>
                    </li>
               </ul>
            </div>
        </section>
    </main>
</div>

    <!-- Bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>
</html>