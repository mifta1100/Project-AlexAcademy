<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/design.css">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">

            <?php


            include("php/config.php");
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $age = $_POST['age'];
                $password = $_POST['password'];



                $verify_query = mysqli_query($con, "SELECT Email FROM alvi WHERE Email='$email'");

                if (mysqli_num_rows($verify_query) != 0) {
                    echo "<div class='message'>
                        <p>This email is used, Try another One Please!</p>
                    </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<div class='message'>
                         <p>Invalid email</p>
                     </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                } else if ($age <= 0) {
                    echo "<div class='message'>
                         <p>Invalid age</p>
                     </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                } else if (!preg_match("/^[A-Za-z ]+$/", $username)) {
                    echo "<div class='message'>
                         <p>Invalid User name</p>
                     </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                } else {

                    mysqli_query($con, "INSERT INTO alvi(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Error Occured");

                    echo "<div class='message'>
                        <p>Registration successfully!</p>
                    </div> <br>";
                    echo "<a href='page.php'><button class='btn'>Login Now</button>";
                }
            } else {

            ?>

                <header>Sign Up</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>

                    <div class="field">

                        <input type="submit" class="btn" name="submit" value="Register" required>
                    </div>
                    <div class="links">
                        Already a member? <a href="page.php">Sign In</a>
                    </div>
                </form>


                <?php

                $to_email = "mazharulislam77@gmail.com";
                $subject = "Registration Successful";
                $body = "Dear,\n\nThank you for registering on our website!\n\nBest regards,\nAlexAcademy";
                $headers = "From: alvishihat@gmail.com";

                if (mail($to_email, $subject, $body, $headers)) {
                    echo "";
                } else {
                    echo "";
                }

                ?>

        </div>
    <?php } ?>
    </div>
</body>

</html>