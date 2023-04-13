<?php

if (isset($_POST['submit'])) { // check if form has been submitted

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    // Connect to the database
    $host = "localhost";
    $username = "root";
    $dbpw = "";
    $database = "admission form";

    $conn = mysqli_connect($host, $username, $dbpw, $database);

    if (!$conn) {
        echo "Failed to connect to database";
        exit();
    }

    // Insert the form data into the database
    $random_number = rand(1, 100); // generate a random integer between 1 and 100
    if ($random_number>=40) {
        $result = "pass";
    } else {
        $result = "fail";
    }
    $sql = "INSERT INTO admission(name, email, phone, dob, gender, course,address, password, result, marks) VALUES ('$name', '$email', '$phone', '$dob', '$gender', '$course', '$address','".password_hash($_POST['password'],PASSWORD_DEFAULT)."','$result','$random_number')";
    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
        header("Location: index.html");
        exit();
    } else {
        echo "Error inserting data";
    }

    mysqli_close($conn);
}
?>
