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
  <link rel="stylesheet" href="../css/stylecontact.css" />
  <link rel="stylesheet" href="../css/styleroom.css" />
</head>
<body>

<?php

include "../assets/_connect.php"; // Include your database connection file
  include "../assets/_header.php";
  ?>
<section id="roomdetails"  class="section-p1">
      <div class="single-room-img">
        <img src="../img/room (1).jpg" alt="product" width="100%" height="400px" id="mainImg" />
        <div class="small-img-grp">
        <div class="small-img">
            <img
              src="../img/room (1).jpg"
              alt="product"
              width="100%"
              height="100%"
              class="small-img-1"
            />
          </div>
          <div class="small-img">
            <img
              src="../img/room (3).jpg"
              alt="product"
              width="100%"
              height="100%"
              class="small-img-1"
            />
          </div>
          <div class="small-img">
            <img
              src="../img/room (4).jpg"
              alt="product"
              width="100%"
              height="100%"
              class="small-img-1"
            />
          </div>
          <div class="small-img">
            <img
              src="../img/room (7).jpg"
              alt="product"
              width="100%"
              height="100%"
              class="small-img-1"
            />
          </div>
        </div>
      </div>
      <?php
      $sql = $conn->query("SELECT * FROM room"); 
      if($row = mysqli_fetch_assoc($sql)){

      ?>
      <div class="single-room-desc">

        <h2><?php echo $row['room_name'] ?> </h2>

        <h1 class="price" > <?php echo $row['price'] ?> DA</h1>

       

        
        <p class="desc">
        <?php echo $row['Description'] ?>
        </p>
        <a href="../client/register.php">
        <div class="button">
                <button class="button2" type="submit">Book Now</button>
        </div>
        </a>
        
        
      </div>
      <?php  } ?>
    </section>


    

    <?php
  include "../assets/_footer.php"; ?>
    <script>
     window.onload = function() {
        var mainImg = document.getElementById('mainImg');
        var smallImg = document.getElementsByClassName('small-img-1');

        for(let i=0; i< smallImg.length; i++) {
            smallImg[i].onclick = function(){
                mainImg.src = this.src;
            };
        }
    };
    </script>
</body>
</html>

