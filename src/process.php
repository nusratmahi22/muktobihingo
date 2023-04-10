<?php
// Get the form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$job_type = $_POST['role'];

// Establishing Connection with DATABASE
$host = "localhost";
$username = "root";
$password = "";
$dbname = "behongo";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$first_name = mysqli_real_escape_string($conn, $first_name);
$last_name = mysqli_real_escape_string($conn, $last_name);
$dob = mysqli_real_escape_string($conn, $dob);
$gender = mysqli_real_escape_string($conn, $gender);
$email = mysqli_real_escape_string($conn, $email);
$job_type = mysqli_real_escape_string($conn, $job_type);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format");
}

// Inserting the data into the table
$sql = "INSERT INTO user_table (first_name, last_name, dob, gender, email, job_type) VALUES ('$first_name', '$last_name' , '$dob', '$gender','$email', '$job_type')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

$sql = "SELECT first_name, last_name, dob,gender,email,job_type FROM user_table";

// Execute the query
$result = $conn->query($sql);

//fetching data and showing database values
// echo "<table>";
// echo "<tr><th>Name </th><th>Email </th><th>Message </th></tr>";
// while ($row = mysqli_fetch_array($result)) {
//     echo "<tr><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td><td>" . $row['message'] . "</td><td>";
// }
// echo "</table>";

// Close the connection
mysqli_close($conn);
