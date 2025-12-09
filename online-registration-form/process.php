<?php
// process.php

// Simple function to safely get POST data
function get_post($key) {
    return isset($_POST[$key]) ? htmlspecialchars($_POST[$key]) : "";
}

// Get values from the form
$fullName   = get_post("fullName");
$email      = get_post("email");
$phone      = get_post("phone");
$dob        = get_post("dob");
$gender     = get_post("gender");
$course     = get_post("course");
$semester   = get_post("semester");
$percentage = get_post("percentage");
$address    = get_post("address");
$city       = get_post("city");
$state      = get_post("state");
$pincode    = get_post("pincode");
$comments   = get_post("comments");

// Skills (checkbox array)
$skills = [];
if (isset($_POST["skills"]) && is_array($_POST["skills"])) {
    foreach ($_POST["skills"] as $skill) {
        $skills[] = htmlspecialchars($skill);
    }
}
$skills_list = !empty($skills) ? implode(", ", $skills) : "Not specified";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application Submitted</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Extra styling only for display page */
        .result-container {
            background: #ffffff;
            width: 100%;
            max-width: 800px;
            margin: 30px auto;
            border-radius: 10px;
            padding: 25px 30px 35px;
            box-shadow: 0 0 15px rgba(0,0,0,0.08);
        }
        .result-title {
            text-align: center;
            margin-bottom: 5px;
            font-size: 24px;
        }
        .result-subtitle {
            text-align: center;
            margin-bottom: 20px;
            color: #555;
        }
        .result-table {
            width: 100%;
            border-collapse: collapse;
        }
        .result-table th,
        .result-table td {
            padding: 8px 10px;
            border-bottom: 1px solid #eee;
            text-align: left;
            vertical-align: top;
        }
        .result-table th {
            width: 30%;
            font-weight: bold;
            background: #f7f9fc;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background: #007bff;
            color: #fff;
            padding: 8px 15px;
            border-radius: 20px;
        }
        .back-link:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h1 class="result-title">Application Submitted Successfully</h1>
        <p class="result-subtitle">Below is the information you provided:</p>

        <table class="result-table">
            <tr>
                <th>Full Name</th>
                <td><?php echo $fullName; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?php echo $phone; ?></td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td><?php echo $dob; ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo $gender; ?></td>
            </tr>
            <tr>
                <th>Course Applied</th>
                <td><?php echo $course; ?></td>
            </tr>
            <tr>
                <th>Semester</th>
                <td><?php echo $semester; ?></td>
            </tr>
            <tr>
                <th>Percentage / CGPA</th>
                <td><?php echo $percentage; ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo nl2br($address); ?></td>
            </tr>
            <tr>
                <th>City</th>
                <td><?php echo $city; ?></td>
            </tr>
            <tr>
                <th>State</th>
                <td><?php echo $state; ?></td>
            </tr>
            <tr>
                <th>Pincode</th>
                <td><?php echo $pincode; ?></td>
            </tr>
            <tr>
                <th>Skills</th>
                <td><?php echo $skills_list; ?></td>
            </tr>
            <tr>
                <th>Comments</th>
                <td><?php echo nl2br($comments); ?></td>
            </tr>
        </table>

        <div style="text-align: center;">
            <a href="index.html" class="back-link">Back to Registration Form</a>
        </div>
    </div>
</body>
</html>
