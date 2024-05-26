<?php
include "../assets/_connect.php";

if (isset($_POST['fullname'], $_POST['date'], $_POST['number'], $_POST['cvv'])) {
    $fullname = $_POST['fullname'];
    $date = $_POST['date'];
    $number = $_POST['number'];
    $cvv = $_POST['cvv'];
    // Prepare an SQL statement
    $stmt = $conn->prepare("INSERT INTO reservation (fullname_res, date_reservation, card_number, cvv) VALUES (?, ?, ?, ?)");

    // Check if the prepare statement has failed. 
    if (false === $stmt) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }

    // Bind the variables to the params
    $result = $stmt->bind_param("ssss", $fullname, $date, $number, $cvv);

    // check if bind_param failed
    if (false === $result) {
        die("Bind param error: (" . $stmt->errno . ") " . $stmt->error);
    }

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "<script>alert('Registration Successful!')</script>";
    } else {
        // Provide a more informative error message
        $error_msg = "Reservation failed: (" . $stmt->errno . ") " . $stmt->error;
        echo "<script>alert('$error_msg')</script>";
    }
} else {
    echo "Please fill out all required fields.";
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
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>

    <?php
    include "../assets/_header.php";
    ?>
    <div class="reservation container section-p1">
        <h1>Reservation Successfully</h1>
        <p>Thank you for booking with us. Your reservation has been successfully made. We look forward to hosting you.</p>
      

        <div class="button">
            <a href="../client/home.php" class="btn btn-primary">Back to Home</a>
        </div>

    </div>

    <?php
    include "../assets/_footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>