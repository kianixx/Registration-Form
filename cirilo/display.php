<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Details</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: url('https://instructure-uploads-apse1.s3.ap-southeast-1.amazonaws.com/account_234870000000000001/attachments/152/uc-login%20ver2-background.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.15);
            max-width: 500px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .detail {
            margin: 10px 0;
            font-size: 16px;
        }

        .label {
            font-weight: bold;
            color: #444;
        }

        .value {
            color: #666;
        }

        .btn {
            display: block;
            margin: 20px auto 0;
            padding: 10px 20px;
            border: none;
            background: #007BFF;
            color: #fff;
            font-size: 14px;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
        }

        .btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Student Registration Details</h2>

        <div class="detail"><span class="label">First Name:</span> <span class="value"><?php echo $_POST["fname"]; ?></span></div>
        <div class="detail"><span class="label">Last Name:</span> <span class="value"><?php echo $_POST["lname"]; ?></span></div>
        <div class="detail"><span class="label">ID Number:</span> <span class="value"><?php echo $_POST["IDnum"]; ?></span></div>
        <div class="detail"><span class="label">Date of Birth:</span> <span class="value"><?php echo $_POST["dob"]; ?></span></div>
        <div class="detail"><span class="label">Program:</span> <span class="value"><?php echo $_POST["program"]; ?></span></div>
        <div class="detail"><span class="label">Address:</span> <span class="value"><?php echo $_POST["address"]; ?></span></div>
        <div class="detail"><span class="label">City:</span> <span class="value"><?php echo $_POST["city"]; ?></span></div>
        <div class="detail"><span class="label">Country:</span> <span class="value"><?php echo $_POST["country"]; ?></span></div>
        <div class="detail"><span class="label">Contact Person:</span> <span class="value"><?php echo $_POST["person"]; ?></span></div>
        <div class="detail"><span class="label">Phone:</span> <span class="value"><?php echo $_POST["phone"]; ?></span></div>

        <a href="registration.php" class="btn">Back to Form</a>
    </div>
</body>
</html>
