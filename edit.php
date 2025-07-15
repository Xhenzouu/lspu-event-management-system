<?php
function fetch_data()
{
    $output = '';
    $conn = mysqli_connect("localhost", "root", "", "symbols");
    $sql = "SELECT * FROM symbols ORDER BY email";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result))
    {
        $output .= '<tr onclick="fillForm('.$row["id"].', \''.addslashes($row["name"]).'\', \''.addslashes($row["email"]).'\', \''.addslashes($row["title"]).'\', '.$row["year"].', \''.$row["department"].'\', \''.$row["gender"].'\', \''.$row["fromdate"].'\', \''.$row["todate"].'\', '.$row["people"].')">  
                    <td>'.$row["id"].'</td>  
                    <td>'.$row["name"].'</td>  
                    <td>'.$row["title"].'</td>  
                    <td>'.$row["email"].'</td>  
                    <td>'.$row["year"].'</td>
                    <td>'.$row["department"].'</td>
                    <td>'.$row["gender"].'</td>
                    <td>'.$row["fromdate"].'</td>  
                    <td>'.$row["todate"].'</td> 
                    <td>'.$row["people"].'</td> 
                    </tr>';
    }
    return $output;
}
?>

<?php include('header.php'); ?>

<style>
    body {
        background-color: #f4f7fa; /* Light background for contrast */
    }
    .jumbotron {
        background-color: #ffffff; /* White background for the form */
        border-radius: 10px; /* Rounded corners */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        padding: 30px; /* Increased padding */
        margin-top: 55px;
    }
    h3 {
        color: #333; /* Darker text for the heading */
        font-weight: 600; /* Semi-bold heading */
    }
    .form-control {
        border-radius: 5px; /* Rounded input fields */
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1); /* Inner shadow for input fields */
    }
    .form-check-input {
        margin-top: 0.3rem; /* Align radio buttons better */
    }
    .btn {
        border-radius: 5px; /* Rounded buttons */
        font-weight: bold; /* Bold button text */
    }
    .btn-primary {
        background-color: #007bff; /* Bootstrap primary color */
        border: none; /* Remove border */
    }
    .btn-primary:hover {
        background-color: #0056b3; /* Darker shade on hover */
    }
    .btn-warning {
        background-color: #ffc107; /* Bootstrap warning color */
        border: none; /* Remove border */
    }
    .btn-warning:hover {
        background-color: #e0a800; /* Darker shade on hover */
    }
    .modal-content {
        border-radius: 10px; /* Rounded modal */
    }
</style>

<center>
<h3 style="padding: 20px;">Records In Database:</h3>
<div class="table-responsive table-hover table-bordered col-10">
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
            </tr>
        </thead>
        <tbody>
            <?php echo fetch_data(); ?>
        </tbody>
    </table>
</div>

<h3 style="padding: 20px;">Edit Registration:</h3>

<div class="jumbotron col-6" style="font-weight: bold;">
    <form action='doedit.php' method='post'>
        <div class="form-group row">
            <label for="name" class="col-4">ID:</label>
            <input type="int" class="form-control col-7" id="id" name="id" placeholder="Enter id to be edit" readonly>
        </div>
        <div class="form-group row">
            <label for="name" class="col-4">Name:</label>
            <input type="text" class="form-control col-7" id="name" name="name" placeholder="Enter name" required>
        </div>
        <div class="form-group row">
            <label for="exampleInputEmail1" class="col-4">Email address:</label>
            <input type="email" class="form-control col-7" id="email" name="email" placeholder="Enter email" required>
        </div>
        <div class="form-group row">
            <label for="title" class="col-4">Event:</label>
            <input type="text" class="form-control col-7" id="title" name="title" placeholder="Enter event" required>
        </div>
        <div class="form-group row">
            <label for="Year" class="col-4">Year:</label>
            <input type="int" class="form-control col-7" id="Year" name="Year" placeholder="Enter Year" required>
        </div>
        <div class="form-group row">
            <label for="department" class="col-4">Department:</label>
            <select class="form-control col-7" id="department" name="department" required>
                <option value="" disabled selected>Select your department</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Business Administration">Business Administration</option>
                <option value="Engineering">Engineering</option>
                <option value="Arts and Sciences">Arts and Sciences</option>
                <!-- Add more departments as needed -->
            </select>
        </div>
        <div class="form-group row">
            <label for="gender" class="col-4">Gender:</label>
            <label class="col-4">Male<input class="form-check-input col-4" type="radio" name="gender" value="male" required></label>
            <label class="col-4">Female<input class="form-check-input col-4" type="radio" name="gender" value="female" required></label>
        </div>
        <div class="form-group row">
            <label for="fromdate" class="col-4">From Date:</label>
            <input type="date" class="form-control col-7" id="fromdate" name="fromdate" required>
        </div>
        <div class="form-group row">
            <label for="todate" class="col-4">To Date:</label>
            <input type="date" class="form-control col-7" id="todate" name="todate" required>
        </div>
        <div class="form-group row">
            <label for="people" class="col-4">No. of People:</label>
            <input type="int" class="form-control col-7" id="people" name="people" placeholder="Enter number of people" required>
        </div>
        <button class="btn btn-primary" type="submit" value="submit">Submit</button>
        <button class="btn btn-warning" type="reset" value="Reset">Reset</button>
    </form>
</div>

<script>
function fillForm(id, name, email, title, year, department, gender, fromdate, todate, people) {
    document.getElementById('id').value = id;
    document.getElementById('name').value = name;
    document.getElementById('email').value = email;
    document.getElementById('title').value = title;
    document.getElementById('Year').value = year;
    document.getElementById('department').value = department; // Ensure this line is correct
    document.getElementById('fromdate').value = fromdate;
    document.getElementById('todate').value = todate;
    document.getElementById('people').value = people;
    
    // Set gender radio button
    if (gender === 'male') {
        document.querySelector('input[name="gender"][value="male"]').checked = true;
    } else if (gender === 'female') {
        document.querySelector('input[name="gender"][value="female"]').checked = true;
    }
}
</script>

<?php include('footer.php'); ?>
