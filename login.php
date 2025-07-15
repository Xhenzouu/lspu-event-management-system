<?php
// Start the session
session_start();

// Database connection
$servername = "localhost"; // Change if necessary
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "symbols"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to handle login
function loginUser ($conn) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Validate input
        if (empty($email) || empty($password)) {
            echo "<script>alert('Email and Password are required.');</script>";
            return;
        }

        // Prepare and execute the query
        $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        // Check if user exists
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($hashed_password);
            $stmt->fetch();

            // Verify the password
            if (password_verify($password, $hashed_password)) {
                // Set session variables
                $_SESSION['username'] = $email; // Store username in session
                // Redirect to index.php
                header("Location: index.php");
                exit();
            } else {
                echo "<script>alert('Invalid password.');</script>";
            }
        } else {
            echo "<script>alert('No user found with that email.');</script>";
        }

        // Close the statement
        $stmt->close();
    }
}

// Call the login function
loginUser ($conn);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta name="keywords" content="">
    <meta name="description" content="Laguna State Polytechnic University">
    <meta name="author" content="techtune">
    <meta name="google-site-verification" content="ZJTbFy5BGO2u5PqFCpUNGtuvxxNWcMhfSFR4Xex4XuQ">
    <title>Login</title>
    <link rel="shortcut icon" href="https://online.lspusys.com/assets/images/favicon.png">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Signika:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://online.lspusys.com/assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://online.lspusys.com/assets/vendor/font-awesome/css/all.min.css">
    <script src="https://online.lspusys.com/assets/vendor/jquery/jquery.js" type="text/javascript"></script>

    <!-- sweetalert js/css -->
    <link rel="stylesheet" href="https://online.lspusys.com/assets/vendor/sweetalert/sweetalert-custom.css">
    <script src="https://online.lspusys.com/assets/vendor/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <!-- login page style css -->
    <link rel="stylesheet" href="https://online.lspusys.com/assets/login_page/css/style.css">
    <script type="text/javascript">
        var base_url = 'https://online.lspusys.com/';
    </script>

    <style>
        /* Internal CSS for vertical centering */
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            background-color: #f8f9fa; /* Optional: Change background color */
        }

        .sign-footer {
            color: white; /* Set text color to white */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="slideIn">
            <!-- image and information -->
            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12 no-padding fitxt-center">
                <div class ="image-area">
                    <div class="content">
                        <div class="center img-hol-p">
                            <img src="https://online.lspusys.com/uploads/app_image/logo.png" height="110" alt="LSPU Logo">
                        </div>
                        <div class="image-hader">
                            <h2>SIGN-IN TO YOUR <br> LSPU ACCOUNT</h2>
                        </div>
                        <div class="address">
                            <p></p>
                        </div>
                        <div class="f-social-links center">
                            <a href="https://www.facebook.com/username" target="_blank">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                        </div> 
                    </div>
                </div>
            </div>

            <!-- Login -->
            <div class="col-lg-6 col-lg-offset-right-1 col-md-6 col-md-offset-right-1 col-sm-12 col-xs-12 no-padding">
                <div class="sign-area">
                    <div class="sign-hader">
                        <img src="https://online.lspusys.com/uploads/app_image/lspu-ribbon.png" width="100%" alt="">
                        <img src="https://online.lspusys.com/uploads/app_image/lspu-online-logo-negative-alternate.png" width="100%" alt="">
                        <b style="color:gray">INTEGRITY • PROFESSIONALISM • INNOVATION</b>
                        <hr>
                    </div>
                    <form action="login.php" method="post" accept-charset="utf-8">
                        <input type="hidden" name="school_csrf_name" value="496817c3f39678adced55fc552a0423e">
                        <div class="form-group ">
                            <div class="input-group input-group-icon">
                                <span class="input-group-addon">
                                    <span class="icon">
                                        <i class="far fa-user"></i>
                                    </span>
                                </span>
                                <input type="text" class="form-control" name="email" value="" placeholder="Email Address" required>
                            </div>
                            <span class="error"></span>
                        </div>
                        <div class="form-group ">
                            <div class="input-group input-group-icon">
                                <span class="input-group-addon">
                                    <span class="icon"><i class="fas fa-unlock-alt"></i></span>
                                </span>
                                <input type="password" class="form-control input-rounded" name="password" placeholder="Password" required>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="forgot-text">
                            <div class="checkbox-replace">
                                <div class="text-center">
                                    <a href="http://localhost/LSPUevents_Management_System/register.php">Register Here</a>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="http://localhost/LSPUevents_Management_System/forgotpassword.php">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="btn_submit" class="btn btn-block btn-round">
                                <i class="fas fa-sign-in-alt"></i> Login
                            </button>
                        </div>
                        <div class="sign-footer">
                            <p>© 2020 Laguna State Polytechnic University</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>