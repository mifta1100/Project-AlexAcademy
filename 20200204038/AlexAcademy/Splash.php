<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" type="png" href="images/icon/favicon.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Comaptible" content="IE=edge">
    <title>AlexAcademy</title>
    <meta name="desciption" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">


    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .button-container {
            text-align: center;
        }

        .centered-button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #800080;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            margin: 5px;
        }
    </style>

</head>

<body>
    <!-- Navigation Bar -->
    <header id="header">
        <nav>
            <div class="logo"><img src="images/icon/logo.png" alt="logo"></div>
        </nav>
        <div class="head-container">
            <div class="quote">
                <p>Learning is not attained by chance, it must be sought for with ardor and attended to with diligence.
                </p>
                <h5>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values,
                    beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and
                    directed research!</h5> &nbsp;&nbsp;

            </div>
            <div class="svg-image">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="images/extra/svg1.jpg" alt="svg">
            </div>
        </div>
        <div class="button-container">
            <a href="page.php" class="centered-button">User login</a>
            <a href="adminLogin.php" class="centered-button">Admin login</a>
        </div>
    </header>
</body>

</html>