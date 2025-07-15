<!DOCTYPE html>
<html>
<head>
    <title>LSPU Event Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" 
    integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <style>
    .header-section {
        background: #f8f9fa; /* light background */
        padding: 15px 0;
    }

    .header-section .logo img {
        max-height: 80px;
    }

    .header-section .social_icon1 img {
        max-height: 60px;
    }

    .navbar .navbar-nav {
        flex-direction: row; /* Ensure items are in a row */
        justify-content: center; /* Center the nav items */
        width: 100%; /* Full width for centering */
    }

    .navbar .navbar-nav .nav-link {
        font-size: 18px;
        font-weight: 500;
        margin: 0 15px; /* Add some space between links */
    }

    .custom-navbar {
        background-color: black;
    }

    .custom-navbar .nav-link {
        color: white; /* Set text color to white */
    }

    /* Custom container width */
    .custom-container {
        max-width: 2500px; /* Set your desired max width */
        margin: 0 auto; /* Center the container */
    }
</style>
</head>
<body style="background-image: url(https://kluniversity.in/images/bg.png);">
    <div class="custom-container">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="logo">
                        <a href="" class="desktopshow">
                            <img class="img-responsive" src="https://lspu.edu.ph/assets/img/LSPU-LOGO.png" alt="LSPU Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="social_icon1">
                        <img src="https://lspu.edu.ph/assets/img/LSPU-FRONTLINE.PNG" class="img-responsive" alt="Frontline Logo">
                    </div>
                </div>
                <div class="col-md-1 text-center">
                    <div class="social_icon1">
                        <img src="https://lspu.edu.ph/assets/img/bago-pilipinas-logo.png" class="img-responsive" alt="Bago Pilipinas Logo" style="max-width: 85px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="edit.php">Edit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="delete.php">Delete</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="report.php">Report</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" 
    integrity="sha384-alNF32W5k0C2eAooIOLaZOxGdl8w7ghrBhjqnF1PId9hG7cjkh4t55kWQROkp4x" crossorigin="anonymous"></script>
</body>
</html>
