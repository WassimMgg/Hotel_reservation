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
    <link rel="stylesheet" href="../css/stylelogin.css" />
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <?php
    include "../assets/_header.php";
    ?>

    <div id="login" class="wrapper select-p1" style="background-image: url('images/bg-registration-form-1.jpg');">
        <div class="inner">
            <div class="image-holder">
                <img src="../img/room (5).jpg" alt="login">
            </div>
            <form action="cart.php" method="post">
                <h3>Registration Form</h3>
                <div class="form-group">
                    <input type="text" name="fname" placeholder="First Name" class="form-control" required>
                    <input type="text" name="lname" placeholder="Last Name" class="form-control">
                </div>
                <div class="form-wrapper">
                    <input type="text" name="username" placeholder="Username" class="form-control">
                    <i class="zmdi zmdi-account"></i>
                </div>
                <div class="form-wrapper">
                    <input type="text" name="phone" placeholder="Phone Number" class="form-control">
                    <i class="zmdi zmdi-phone"></i>
                    <div class="form-wrapper">
                        <input type="text" name="email" placeholder="Email Address" class="form-control">
                        <i class="zmdi zmdi-email"></i>
                    </div>
                    <div class="form-wrapper">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                        <i class="zmdi zmdi-lock"></i>
                    </div>
                    <div class="form-wrapper">
                        <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control">
                        <i class="zmdi zmdi-lock"></i>
                    </div>

                    <button type="sunmit" name="submit" onclick="auth()">
                        Register
                    </button>

            </form>
        </div>
    </div>

    <?php
    include "../assets/_footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function auth() {
            var password = document.getElementsByName('password').value;
            var cpassword = document.getElementsByName('cpassword').value;

            if (password != cpassword) {
                alert('Password does not match! Please try again');

            } else {
                window.location.assign('cart.php');
            }
        }
    </script>
</body>

</html>



