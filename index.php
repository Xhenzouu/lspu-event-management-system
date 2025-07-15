<?php include('header.php'); ?>
<?php include("dbconnect.php"); ?>

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
        transition: box-shadow 0.3s ease; /* Smooth transition for the glow effect */
    }
    .form-control:focus {
        outline: none; /* Remove default outline */
        box-shadow: 0 0 5px 2px rgba(0, 255, 0, 0.5); /* Green glow effect */
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
    /* New styles for labels */
    label {
        color: brown; /* Brown color for labels */
        font-weight: bold; /* Bold text for labels */
    }
</style>

<center>
    <h3 style="padding: 10px;">Event Registration:</h3>
    <div class="jumbotron col-6">
        <form action='submit.php' method='post'>
            <div class="form-group row">
                <label for="name" class="col-3">Name:</label>
                <input type="text" class="form-control col-8" id="name" name="name" placeholder="Enter name" required>
            </div>
            <div class="form-group row">
                <label for="exampleInputEmail1" class="col-3">Email address:</label>
                <input type="email" class="form-control col-8" id="email" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group row">
                <label for="title" class="col-3">Event:</label>
                <input type="text" class="form-control col-8" id="title" name="title" placeholder="Enter event" required>
            </div>
            <div class="form-group row">
                <label for="Year" class="col-3">Year:</label>
                <input type="number" class="form-control col-8" id="Year" name="Year" placeholder="Enter Year" required>
            </div>
            <div class="form-group row">
                <label for="department" class="col-3">Department:</label>
                <select class="form-control col-8" id="department" name="department" required>
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
                <label for="gender" class="col-3">Gender:</label>
                <label class="col-4">Male<input class="form-check-input col-4" type="radio" name="gender" value="male" required></label>
                <label class="col-4">Female<input class="form-check-input col-4" type="radio" name="gender" value="female" required></label>
            </div>
            <div class="form-group row">
                <label for="fromdate" class="col-3">From Date:</label>
                <input type="date" class="form-control col-8" id="fromdate" name='fromdate' required>
            </div>
            <div class="form-group row">
                <label for="todate" class="col-3">To Date:</label>
                <input type="date" class="form-control col-8" id="todate" name='todate' required>
            </div>
            <div class="form-group row">
                <label for="people" class="col-3">No. of People:</label>
                <input type="number" class="form-control col-8" id="people" name='people' placeholder="Enter number of people" required>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" required>
                    <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"> Agree to terms and Conditions </a>
                </label>
            </div>
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <!-- Modal content goes here -->
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" type="submit" value='submit'>Submit</button>
            <button class="btn btn-warning" type="reset" value='reset'>Reset</button>
        </form>
    </div>
</center>
