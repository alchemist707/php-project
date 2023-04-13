<html>
<body>
<head>
    <link rel="stylesheet" href="dashboard.css">
</head>
<div class="container">
    <?php
    session_start();
    $host = "localhost"; // replace with your MySQL host
    $username = "root"; // replace with your MySQL username
    $password = ""; // replace with your MySQL password
    $database = "admission form"; // replace with your MySQL database name

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM admission WHERE email='" . $_SESSION['email'] . "'"; // replace with your table name

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<table>";
        echo "<thead><tr><th>Name</th><th>Email</th><th>Phone</th><th>Date of Birth</th><th>Gender</th><th>Course</th><th>Address</th><th>Marks Obtained</th><th>Status</th></tr></thead>";
        echo "<tbody>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["phone"]."</td>";
            echo "<td>".$row["dob"]."</td>";
            echo "<td>".$row["gender"]."</td>";
            echo "<td>".$row["course"]."</td>";
            echo "<td>".$row["address"]."</td>";
            echo "<td>".$row['marks']."</td>";
            echo "<td>";
            if ($row['result']=="pass") {
                echo "Shit You Passed 😭";
            }
            else {
                echo "Congrats You Failed Successfully🥳🎉🎉🎉🎉🎉";
            }
            echo "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p class='zero-results'>0 results</p>";
    }

    mysqli_close($conn);
    ?>
</div>
</body>
</html>
