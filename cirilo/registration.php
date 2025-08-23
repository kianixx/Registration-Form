<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student Registration Form</h1>

    <form action="display.php" method="post">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="John"><br><br>

        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="Doe"><br><br>
        
        <label for="IDnum">ID Number:</label><br>
        <input type="text" id="IDnum" name="IDnum" value="24209140"><br><br>

        <label for="dob">Date of Brth:</label><br>
        <input type="date" id="dob" name="dob"><br><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" value="Brgy. Calawisan, LLC"><br><br>

        <label for="contact">Emergency Contact Number:</label><br>
        <input type="text" id="contact" name="contact" value="09155888268"><br><br>

        <label for="Eperson">Emergency Person:</label><br>
        <input type="text" id="Eperson" name="Eperson" value="Ar-Ar Cirilo"><br><br>
        <input type="submit" value="Submit">
    </form> 
</body>
</html>