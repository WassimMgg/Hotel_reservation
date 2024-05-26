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
</head>

<body>

    <?php
    include "../assets/_header.php";
    ?>

    <div id="contact" class="section-p1">
        <form id="form" action="contact.php" method="post">
            <div>
                <h1>Contact Us</h1>
                <p>Feel free to contact us for any queries or feedback. We are here to help you.</p>
                <div>
                    <div class="inputGroup">
                        <input type="text" name="name" required="" autocomplete="off">
                        <label for="name">Name</label>
                    </div>
                    <div class="inputGroup">
                        <input type="email" name="email" required="" autocomplete="off">
                        <label for="email">Email</label>
                    </div>
                    <div class="inputGroup">
                        <input type="text" name="phone" required="" autocomplete="off">
                        <label for="phone">Phone</label>
                    </div>

                    <div class="inputGroup">
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Your Feedback"></textarea>
                    </div>
                </div>
                <div class="button">
                    <button class="button2" type="submit" name="submit">Send</button>
                </div>

            </div>
        </form>
    </div>

    <?php
    include "../assets/_footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>

<?php
include "../assets/_connect.php";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $msg = $_POST['message'];


    // Prepare an SQL statement
    $stmt = $conn->prepare("INSERT INTO contact_us ( phone_number, Email,fullname, Feedback) VALUES (?, ?, ?, ?)");

    // Check if the prepare statement has failed. 
    if (false === $stmt) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }

    // Bind the variables to the params
    $result = $stmt->bind_param("ssss", $phone, $email, $name, $msg);

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