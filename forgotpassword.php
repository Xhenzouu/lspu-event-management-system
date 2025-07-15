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

// Function to handle password restoration
function restorePassword($conn) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];

        // Validate input
        if (empty($email)) {
            echo "<script>alert('Email is required.');</script>";
            return;
        }

        // Check if the email exists in the database
        $stmt = $conn->prepare("SELECT username FROM users WHERE username = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            // Email exists, proceed to change password
            // Here you would typically send an email with a password reset link
            // For simplicity, we will just ask for a new password directly

            // Assuming you have a form to enter a new password
            if (isset($_POST['new_password'])) {
                $new_password = $_POST['new_password'];
                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

                // Update the password in the database
                $update_stmt = $conn->prepare("UPDATE users SET password = ? WHERE username = ?");
                $update_stmt->bind_param("ss", $hashed_password, $email);

                if ($update_stmt->execute()) {
                    echo "<script>alert('Password changed successfully! You can now log in.'); window.location.href='login.php';</script>";
                } else {
                    echo "<script>alert('Error updating password.');</script>";
                }

                $update_stmt->close();
            }
        } else {
            echo "<script>alert('No user found with that email.');</script>";
        }

        // Close the statement
        $stmt->close();
    }
}

// Call the password restoration function
restorePassword($conn);

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
    <meta name="description" content="School Management System">
    <meta name="author" content="techtune">
    <title>Password Restoration</title>
    <link rel="shortcut icon" href="https://online.lspusys.com/assets/images/favicon.png">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Signika:300,400,600,700" rel="stylesheet"> 
    <link rel="stylesheet" href="https://online.lspusys.com/assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://online.lspusys.com/assets/vendor/font-awesome/css/all.min.css">
    <script src="https://online.lspusys.com/assets/vendor/jquery/jquery.js" type="text/javascript"></script>

    <!-- Sweetalert js/css -->
    <link rel="stylesheet" href="https://online.lspusys.com/assets/vendor/sweetalert/sweetalert-custom.css">
    <script src="https://online.lspusys.com/assets/vendor/sweetalert/sweetalert.min.js" type="text/javascript"></script>
    
    <!-- Login page style css -->
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
    </style>
</head>
<body>
    <div class="container">
        <div class="slideIn">
            <!-- Image and information -->
            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12 no-padding fitxt-center">
                <div class="image-area">
                    <div class="content">
                        <div class="center img-hol-p">
                            <img src="https://online.lspusys.com/uploads/app_image/logo.png" height="110" alt="LSPU Logo">
                        </div>
                        <div class="image-hader">
                            <h2>RESET YOUR <br> LSPU ACCOUNT</h2>
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

            <!-- Password Restoration Form -->
            <div class="col-lg-6 col-lg-offset-right-1 col-md-6 col-md-offset-right-1 col-sm-12 col-xs-12 no-padding">
                <div class="sign-area">
                    <div class="text-center pt-sm">
                        <div class="sign-hader">
                            <img src="https://online.lspusys.com/uploads/app_image/lspu-ribbon.png" width="100%" alt="">
                            <img src="https://online.lspusys.com/uploads/app_image/lspu-online-logo-negative-alternate.png" width="100%" alt="">
                            <b style="color:gray">INTEGRITY • PROFESSIONALISM • INNOVATION</b>
                            <hr>
                        </div>
                    </div>
                    <div class="forgot-header">
                        <h4><i class="fas fa-fingerprint"></i> Password Restoration</h4>
                        Enter your email address and you will receive instructions to your registered email.
                    </div>
                    <form action="forgotpassword.php" id="frm" method="post" accept-charset="utf-8">
                        <input type="hidden" name="school_csrf_name" value="a97a42dba7fb62fecddbbc6bd72414a5">                                                                                                                               
                        <div class="form-group">
                            <div class="input-group input-group-icon">
                                <span class="input-group-addon">
                                    <span class="icon">
                                        <i class="fas fa-unlock-alt"></i>
                                    </span>
                                </span>
                                <input type="text" class="form-control" name="email" value="" autocomplete="off" placeholder="Email Address" required> <!-- Updated placeholder -->
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="form-group">
                            <div class="input-group input-group-icon">
                                <span class="input-group-addon">
                                    <span class="icon">
                                        <i class="fas fa-key"></i>
                                    </span>
                                </span>
                                <input type="password" class="form-control" name="new_password" placeholder="New Password" required>
                            </div>
                            <span class="error"></span>
                        </div>

                        <div class="form-group">
                            <button type="submit" id="btn_submit" class="btn btn-block ladda-button btn-round">
                                <i class="far fa-paper-plane"></i> Change Password
                            </button>
                        </div>
                        <div class="text-center">
                            <a href="http://localhost/LSPUevents_Management_System/login.php"><i class="fas fa-long-arrow-alt-left"></i> Back To Login</a>
                            <p>© 2020 Laguna State Polytechnic University</p>
                        </div>
                        <div class="sign-footer"></div>
                    </form>                        
                </div>
            </div>
        </div>
    </div>
</body>
</html>