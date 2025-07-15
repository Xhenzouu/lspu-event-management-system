<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "symbols";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// AJAX request handling for deletion
if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];

    $sql = "DELETE FROM symbols WHERE id = $delete_id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    exit;
}

// Fetch initial data (for first page load)
function fetch_data()
{
    $output = '';
    $conn = mysqli_connect("localhost", "root", "", "symbols");
    $sql = "SELECT * FROM symbols ORDER BY email";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $output .= '<tr id="row' . $row["id"] . '">  
        <td>' . $row["id"] . '</td>  
        <td>' . $row["name"] . '</td>  
        <td>' . $row["title"] . '</td>  
        <td>' . $row["email"] . '</td>  
        <td>' . $row["year"] . '</td>
        <td>' . $row["department"] . '</td>
        <td>' . $row["gender"] . '</td>
        <td>' . $row["fromdate"] . '</td>  
        <td>' . $row["todate"] . '</td> 
        <td>' . $row["people"] . '</td> 
        <td><button class="btn btn-danger deleteBtn" data-id="' . $row["id"] . '">Delete</button></td>
        </tr>';
    }
    return $output;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>LSPU Event Registration - Delete Records</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <style>
        body {
            background-image: url(https://kluniversity.in/images/bg.png);
        }
        .table-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            padding-bottom: 50px;
        }
        .table-responsive {
            width: 90%;
            max-width: 2000px; /* Optional */
        }
        .table th, .table td {
            word-wrap: break-word; /* Allow text to wrap within cells */
            text-align: center;    /* Center align text */
            vertical-align: middle; /* Vertically align text to the middle */
            padding: 10px;          /* Add padding for better spacing */
            border: 1px solid #ddd; /* Add borders to cells */
        }
        .table th {
            background-color: #9fcdff; /* Light background for table headers */
            font-weight: bold;
        }
        .custom-navbar {
            background-color: black;
        }
        .custom-navbar .nav-link {
            color: white; /* Set text color to white */
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


    </style>
</head>
<body>
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
            <a class="navbar-brand" href="index.php"></a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php?confirm=true" id="logout-link" aria-label="Log out">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <center>
        <h3 style="padding: 20px;">Delete Records:</h3>
    </center>

    <div class="table-container">
        <div class="table-responsive table-hover table-bordered">
            <table class="table">
                <thead>
                    <tr class="table-primary">
                        <th width="1%">Id</th>
                        <th width="1%">Name</th>
                        <th width="1%">Event</th>
                        <th width="1%">Email</th>
                        <th width="1%">Year</th>
                        <th width="1%">Department</th>
                        <th width="1%">Gender</th>
                        <th width="1%">From date</th>
                        <th width="1%">To date</th>
                        <th width="1%">No of people</th>
                        <th width="1%">Action</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <?php
                    // Initial data load
                    echo fetch_data();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        // Delete record via AJAX
        $(document).on("click", ".deleteBtn", function () {
            const id = $(this).data('id');
            if (confirm("Are you sure you want to delete this record?")) {
                $.ajax({
                    url: "",
                    method: "POST",
                    data: { delete_id: id },
                    success: function (response) {
                        if (response === "Record deleted successfully") {
                            $('#row' + id).remove(); // Remove the row from the table
                        } else {
                            alert("Error: " + response);
                        }
                    }
                });
            }
        });
    </script>
        <!-- NoScript Warning -->
        <noscript>
        <div class="noscript-warning">
            JavaScript is disabled. Logging out will proceed without confirmation.
        </div>
    </noscript>

    <!-- Logout Confirmation Script -->
    <script>
    document.getElementById('logout-link').addEventListener('click', function (event) {
        if (!confirm("Are you sure you want to log out?")) {
            event.preventDefault(); // Cancel navigation if user selects "Cancel"
        }
    });
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>