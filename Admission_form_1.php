<!DOCTYPE html>
<html>
<head>
    <title>Admission Form</title>
    <link rel="stylesheet" href="Admission.css">
</head>
<body>
<h1>Admission Form</h1>
<div class="container">
    <form method="post" action="Database.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other" required>
        <label for="other">Other</label><br><br>

        <label for="course">Course:</label>
        <select id="course" name="course" required>
            <option value="">-- Select Course --</option>
            <option value="B.Tech">B.Tech</option>
            <option value="M.Tech">M.Tech</option>
            <option value="MBA">MBA</option>
            <option value="BCA">BCA</option>
            <option value="MCA">MCA</option>
        </select><br><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="1" cols="30" required></textarea><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</div>
</body>
</html>
