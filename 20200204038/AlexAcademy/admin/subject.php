<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>AlexAcademy</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">

    <link href="/AlexAcademy/vendor/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">
    <link href="/AlexAcademy/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/AlexAcademy/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>




    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Admin
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="AlexAcademy/admin/subject.php" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Subjects</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="book.php" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Books</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->


        <!--**********************************
            body start
        ***********************************-->

        <section id="mainbody">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <form action="subjetpost.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">.</div>
                            </div> <br><br>
                            <h2>SSC</h2>
                            <div class="mb-3">
                                <label for="" class="form-label">Organic Link</label>
                                <input type="text" class="form-control" name="video" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Inorganic Link</label>
                                <input type="text" class="form-control" name="inorgranic_video" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Physics Link</label>
                                <input type="text" class="form-control" name="video" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Mathematics Link</label>
                                <input type="text" class="form-control" name="video" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Physical Chemistry Link</label>
                                <input type="text" class="form-control" name="video" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>

                            <br><br><br><br>

                            <h2>HSC</h2>
                            <div class="mb-3">
                                <label for="" class="form-label">Organic Link</label>
                                <input type="text" class="form-control" name="video" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Inorganic Link</label>
                                <input type="text" class="form-control" name="inorgranic_video" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Physics Link</label>
                                <input type="text" class="form-control" name="video" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Mathematics Link</label>
                                <input type="text" class="form-control" name="video" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Physical Chemistry Link</label>
                                <input type="text" class="form-control" name="video" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>


                            <br><br><br><br>

                            <h2>Computer Science and Engineering</h2>
                            <div class="mb-3">
                                <label for="" class="form-label">Start Programming with Java Link</label>
                                <input type="text" class="form-control" name="video" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Start Programming with C++ Link</label>
                                <input type="text" class="form-control" name="inorgranic_video" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Start Programming with Python Link</label>
                                <input type="text" class="form-control" name="video" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Data Structure Link</label>
                                <input type="text" class="form-control" name="video" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Algorithm Link</label>
                                <input type="text" class="form-control" name="video" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Start Programming with HTML and CSS Link</label>
                                <input type="text" class="form-control" name="video" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Start Programming with JavaScript Link</label>
                                <input type="text" class="form-control" name="video" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>

                            <br><br><br><br>
                        </form>
                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <form action="bookpost.php" method="POST">
                        <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">.</div>
                            </div> <br><br>
                            <h2>SSC</h2>
                            <div class="mb-3">
                                <label for="" class="form-label">Organic Link</label>
                                <input type="text" class="form-control" name="video" aria-describedby="emailHelp">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>



        <!--**********************************
            body end
        ***********************************-->



    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="/AlexAcademy/vendor/global/global.min.js"></script>
    <script src="/AlexAcademy/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/AlexAcademy/js/custom.min.js"></script>
    <script src="/AlexAcademy/js/deznav-init.js"></script>

    <!--removeIf(production)-->




    <script src="/AlexAcademy/vendor/jqueryui/js/jquery-ui.min.js"></script>
    <script src="/AlexAcademy/vendor/moment/moment.min.js"></script>

    <script src="/AlexAcademy/vendor/fullcalendar/js/fullcalendar.min.js"></script>
    <script src="/AlexAcademy/js/plugins-init/fullcalendar-init.js"></script>
</body>

</html>