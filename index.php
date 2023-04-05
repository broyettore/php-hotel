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
    <header>
        <div class="container p-2 d-flex align-items-center justify-content-between">
            <div class="logo">
                <h1 class="d-flex align-items-center ">
                    <a href="#jumbo">
                    Hotel Union
                    </a>
                </h1>
            </div>
            <nav>
                <ul class="d-flex">
                    <li class="p-2 m-2">
                        <a href="#about">
                            About Us
                        </a>
                    </li>
                    <li class="p-2 m-2">
                        <a href="#booking">
                            Booking
                        </a>
                    </li>
                    <li class="p-2 m-2">
                        <a href="#">
                            Gallery
                        </a>
                    </li>
                    <li class="py-2 my-2 ps-2 ms-2">
                        <a href="#">
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="jumbo" class="d-flex flex-column align-items-center justify-content-center">
            <div class="container ms-ctn d-flex flex-column align-items-start justify-content-center p-3">
                <h2 class="m-2">Hello</h2>
                <div class="m-2">And Welcome to</div>
                <div class="m-2" >Hotel Union</div>
                <h3 class="m-2">
                    <em class="fs-5">"Where peace and luxury become a lifestyle"</em>
                </h3>
                <div class="cta m-2">
                <button type="button" class="btn ms-btn-info">
                    <a href="#booking">
                    Booking
                    </a>
                </button>
                <button type="button" class="btn ms-btn-light">
                    <a href="#about">
                    More
                    </a>
                </button>
                </div>
            </div>
        </section>
        <section id="about" class="d-flex flex-column align-items-center justify-content-center">
            <div class="container ms-ctn d-flex flex-column align-items-start justify-content-center p-4">
                <h2 class="m-2">About Us</h2>
                <div class="services-options m-2">
                    <table class="table ms-table my-2">
                        <thead>
                            <tr>
                                <th scope="col">
                                Hotel Name
                                </th>
                                <th scope="col">
                                Description
                                </th>
                                <th scope="col">
                                Parking
                                </th>
                                <th scope="col">
                                Review
                                </th>
                                <th scope="col">
                                Distance to Center
                                </th>
                            </tr>
                        </thead>
                    <tbody>
                            <tr>
                                <th scope="row">
                                <?php echo $hotels[0]["name"] ?>
                                </th>
                                <td>
                                <?php echo $hotels[0]["description"] ?>
                                </td>
                                <td>
                                    <?php if($hotels[0]["parking"] === true) {
                                        echo $hotels[0]["parking"] = "Yes";
                                    } else {
                                        echo $hotels[0]["parking"] = "No";
                                    } ?>
                                </td>
                                <td>
                                    <?php echo $hotels[0]["vote"] ?>
                                </td>
                                <td>
                                    <?php echo $hotels[0]["distance_to_center"] ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                <?php echo $hotels[1]["name"] ?>
                                </th>
                                <td>
                                <?php echo $hotels[1]["description"] ?>
                                </td>
                                <td>  
                                    <?php if($hotels[1]["parking"] === true) {
                                        echo $hotels[1]["parking"] = "Yes";
                                    } else {
                                        echo $hotels[1]["parking"] = "No";
                                    } ?>
                                    </td>
                                <td>
                                    <?php echo $hotels[1]["vote"] ?>
                                </td>
                                <td>
                                    <?php echo $hotels[1]["distance_to_center"] ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                <?php echo $hotels[2]["name"] ?>
                                </th>
                                <td>
                                <?php echo $hotels[2]["description"] ?>
                                </td>
                                <td>
                                    <?php if($hotels[2]["parking"] === true) {
                                        echo $hotels[2]["parking"] = "Yes";
                                    } else {
                                        echo $hotels[2]["parking"] = "No";
                                    } ?>
                                </td>
                                <td>
                                    <?php echo $hotels[2]["vote"] ?>
                                </td>
                                <td>
                                    <?php echo $hotels[2]["distance_to_center"] ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                <?php echo $hotels[3]["name"] ?>
                                </th>
                                <td>
                                <?php echo $hotels[3]["description"] ?>
                                </td>
                                <td>
                                    <?php if($hotels[3]["parking"] === true) {
                                        echo $hotels[3]["parking"] = "Yes";
                                    } else {
                                        echo $hotels[3]["parking"] = "No";
                                    } ?>
                                </td>
                                <td>
                                    <?php echo $hotels[3]["vote"] ?>
                                </td>
                                <td>
                                    <?php echo $hotels[3]["distance_to_center"] ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                <?php echo $hotels[4]["name"] ?>
                                </th>
                                <td>
                                <?php echo $hotels[4]["description"] ?>
                                </td>
                                <td>
                                    <?php if($hotels[4]["parking"] === true) {
                                        echo $hotels[4]["parking"] = "Yes";
                                    } else {
                                        echo $hotels[4]["parking"] = "No";
                                    } ?>
                                </td>
                                <td>
                                    <?php echo $hotels[4]["vote"] ?>
                                </td>
                                <td>
                                    <?php echo $hotels[4]["distance_to_center"] ?>
                                </td>
                            </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section id="booking" class="d-flex flex-column align-items-center justify-content-center">
            <div class="container ms-ctn d-flex flex-column align-items-start justify-content-center p-4">
                <h2 class="m-2">Booking</h2>
                <form class="m-2" action="data.php" method="GET">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="clientName">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" name="clientEmail">
                </div>
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">Pet/s (if none leave empty)</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="clientHotel">
                </div>
                <div class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="parkingOption" value="on">
                    <label class="form-check-label" for="exampleCheck1">Parking</label>
                </div>
                <button type="submit" class="btn ms-btn-info">Submit</button>
                </form>            
        </section>
    </main>
</div>

    <!-- Bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>
</html>