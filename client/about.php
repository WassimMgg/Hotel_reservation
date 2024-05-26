<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hotel Booking</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/styleabout.css" />
</head>
<body>
<?php
  include "../assets/_header.php";
  ?>
    <div class="team-section">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h1>Our Team</h1>
                    <p>Meet our team</p>
                </div>
            </div>
            <div class="team-card">
                <div class="card">
                    <div class="card-img">
                        <img src="../img/Mgg.jpg" alt="team1" />
                    </div>
                    <div class="card-body">
                        <h2>Meguellati Wassim</h2>
                        <h4>Web developer</h4>
                        <p>Second year Student at University of Guelma , Leader Of TechGeeks Club </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img src="../img/Ahmed_Bezazi.jpg" alt="team2" />
                    </div>
                    <div class="card-body">
                        <h2>Bezazi Ahmed</h2>
                        <h4>Web Developer</h4>
                        <p>Second year Student at University of Guelma , Member Of TechGeeks Club </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
  include "../assets/_footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>