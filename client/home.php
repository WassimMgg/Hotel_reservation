<?php
include "../assets/_connect.php"; // Include your database connection file
?>

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
</head>

<body>

  <?php
  include "../assets/_header.php";
  ?>
  <section id="hero" class="container section-p1">
    <div class="px-4 pt-5  ">
      <h1 class="display-4 fw-bold pb-5">Rooms & Suits</h1>
      <div class="mx-auto">
        <p class="lead mb-4 pb-3">Choose from a variety of luxury suits and rooms, each with unique and elegant design, Our rooms feature beautiful views
          of the city, the pool, or the garden.Laxurious bathrooms, and all the amenties you need for a comfartable stay.
        </p>
        <div class="button">
          <a href="../client/singleroom.php">
            <button>
              <span>Book Now</span>
              <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
                <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
              </svg>
            </button>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="room section-p1">
    <h1>Rooms</h1>
    <?php
      $sql = $conn->query("SELECT * FROM room"); 
      while($row = mysqli_fetch_assoc($sql)){

      ?>
    <div class="room1 section-p1">

      <div class="room1-text">
     
        <h2><?php echo $row['room_name'] ?></h2>
        <p><?php echo $row['Description'] ?></p>
        <a href="../client/singleroom.php">
          <button class="button type1">
            <span class="btn-txt">Book Now</span>
          </button>
        </a>
      </div>
      <div class="room1-img">
        <img src="../img/<?php  echo $row['image'] ?>"alt="room1" />
      </div>
    </div>
<?php  } ?>
    <!-- <div class="room1">

      <div class="room1-text">
        <h2>Deluxe Room</h2>
        <p>Our Deluxe rooms are designed to provide you with a comfortable stay. The rooms are equipped with a king-size bed, a
          spacious bathroom, and a private balcony with a view of the city.</p>
        <a href="/client/singleroom.php">
          <button class="button type1">
            <span class="btn-txt">Book Now</span>
          </button>
        </a>
      </div>
      <div class="room1-img">
        <img src="../img/pexels-pixabay-164595.jpg" alt="room1" />
      </div>

    </div>

    <div class="room1">

      <div class="room1-text">
        <h2>Deluxe Room</h2>
        <p>Our Deluxe rooms are designed to provide you with a comfortable stay. The rooms are equipped with a king-size bed, a
          spacious bathroom, and a private balcony with a view of the city.</p>
        <a href="/client/singleroom.php">
          <button class="button type1">
            <span class="btn-txt">Book Now</span>
          </button>
        </a>
      </div>
      <div class="room1-img">
        <img src="../img/pexels-pixabay-164595.jpg" alt="room1" />
      </div>

    </div>

    <div class="room1">

      <div class="room1-text">
        <h2>Deluxe Room</h2>
        <p>Our Deluxe rooms are designed to provide you with a comfortable stay. The rooms are equipped with a king-size bed, a
          spacious bathroom, and a private balcony with a view of the city.</p>
        <a href="/client/singleroom.php">
          <button class="button type1">
            <span class="btn-txt">Book Now</span>
          </button>
        </a>
      </div>
      <div class="room1-img">
        <img src="../img/pexels-pixabay-164595.jpg" alt="room1" />
      </div>

    </div>

    <div class="room1">

      <div class="room1-text">
        <h2>Deluxe Room</h2>
        <p>Our Deluxe rooms are designed to provide you with a comfortable stay. The rooms are equipped with a king-size bed, a
          spacious bathroom, and a private balcony with a view of the city.</p>
        <a href="/client/singleroom.php">
          <button class="button type1">
            <span class="btn-txt">Book Now</span>
          </button>
        </a>
      </div>
      <div class="room1-img">
        <img src="../img/pexels-pixabay-164595.jpg" alt="room1" />
      </div>

    </div> -->
  </section>

  <?php
  include "../assets/_footer.php"; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

