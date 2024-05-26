<?php
include "../assets/_connect.php";

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare an SQL statement
    $stmt = $conn->prepare("INSERT INTO users (last_name, first_name, username, email, password, phone) VALUES (?, ?, ?, ?, ?, ?)");

    // Check if the prepare statement has failed. 
    if (false === $stmt) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }

    // Bind the variables to the params
    $result = $stmt->bind_param("ssssss", $lname, $fname, $username, $email, $hashedPassword, $phone);

    // check if bind_param failed
    if (false === $result) {
        die("Bind param error: (" . $stmt->errno . ") " . $stmt->error);
    }

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "<script>alert('Registration Successful!')</script>";
    } else {
        // check error here
        die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
    }
}

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/stylecart.css" />
</head>

<body>
    <?php
    include "../assets/_header.php";
    ?>

    <section class="cart section-p1 container">
    <div class="card mt-50 mb-50">
    <?php
      $sql = $conn->query("SELECT * FROM room"); 
      if($row = mysqli_fetch_assoc($sql)){

      ?>
            <div class="card-title mx-auto">
                <h1><?php echo $row['room_name'] ?></h1>
            </div>
            <?php  } ?>
            <div class="nav">
                <ul class="mx-auto">
                    <li class="active"><a href="#">Payment</a></li>
                </ul>
            </div>
            <form action="reservation.php" method="post">
               
                <span id="card-header">Reservation:</span>
                <div class="row-1">
                    <div class="row row-2">
                        <span id="card-inner">Card holder name</span>
                    </div>
                    <div class="row row-2">
                        <input type="text" placeholder="Full Name" name="fullname">
                    </div>
                </div>
                <div class="row-1">
                    <div class="row row-2">
                        <span id="card-inner">Reservation Date</span>
                    </div>
                    <div class="row row-2">
                        <input type="text" placeholder="YYYY-MM-DD" name="date">
                    </div>
                </div>
                <div class="row three">
                    <div class="col-7">
                        <div class="row-1">
                            <div class="row row-2">
                                <span id="card-inner">Card number</span>
                            </div>
                            <div class="row row-2">
                                <input type="text" placeholder="00000000000" name="number">
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <input type="text" placeholder="CVV" name="cvv">
                    </div>
                </div>
                <button type="submit" class="btn d-flex mx-auto"><b>Reserve</b></button>
            </form>
        </div>
    </section>

    <?php
    include "../assets/_footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>


