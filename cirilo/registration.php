<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <title>Document</title>

    <style>
    body { 
      background: url('https://instructure-uploads-apse1.s3.ap-southeast-1.amazonaws.com/account_234870000000000001/attachments/152/uc-login%20ver2-background.jpg') no-repeat center center/cover;
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      padding: 20px;
    }
    
    form {
      background-color: #FCFDFD;
      padding: 20px 30px;
      max-width: 700px;
      width: 100%;
      border-radius: 8px;
    }

    h1 { 
        margin: 10px 0; 
    }

    .form-group {
      margin-bottom: 12px;
    }

    label {
      font-size: 16px;
      display: block;
      margin-bottom: 4px;
      text-align: left;
    }

    label.radio { 
        display: inline; 
        margin-right: 10px; 
        font-size: 15px; 
    }

    input, select {
      font-family: 'Poppins', sans-serif;
      font-size: 15px;
      padding: 6px 8px;
      height: 34px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .row {
      display: flex;
      gap: 10px;
    }

    .row .form-group {
      flex: 1;
      margin-bottom: 0;
    }

    input[type=submit] {
      width: 160px;
      background: #0073e6;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }
    input[type=submit]:hover { background: #005bb5; }

    input[type="text"],
    input[type="password"],
    input[type="email"],
    input[type="date"],
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f1f7ff; 
        font-size: 10px;
        outline: none;
        box-sizing: border-box;
    }

    /* Focus effect */
    input[type="text"]:focus,
    input[type="password"]:focus,
    input[type="email"]:focus,
    input[type="date"]:focus,
    select:focus {
        border-color: #0073e6;   
        background-color: #e9f2ff;
    }

    .logo-container {
      text-align: center;
      margin-bottom: 15px;
    }

    .logo-container img {
      max-width: 180px;   
      height: auto;
    }

    .form-title {
      text-align: center;
      font-size: 22px;
      font-weight: bold;
      margin-bottom: 20px;
      color: #333;
    }
    
  </style>
</head>
<body>
  <form id="regForm" action="display.php" method="post">

    <div class="logo-container">
      <img src="https://instructure-uploads-apse1.s3.ap-southeast-1.amazonaws.com/account_234870000000000001/attachments/188/UC%20logofinal.png" alt="University of Cebu Logo">
    </div>

    <h1 style="text-align:center">Student Registration Form</h1>
    <hr>

    <div class="row">
      <div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" required>
      </div>
      <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" required>
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" required>
      </div>
    </div>

    <div class='row'>
        <div class="form-group">
        <label>ID Number</label>
        <input type="text" id="IDnum" name="IDnum" required>
        </div>

        <div class="form-group">
        <label for="program">Program</label>
        <select id="program" name="program" required>
            <option>BSIT</option>
            <option>BSCS</option>
            <option>BSN</option>
        </select>
        </div>
    </div>

    <div class="row">
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Street Address" required>
      </div>

      <div class="form-group">
        <label for="city">City</label>
        <input type="text" id="city" name="city" required>
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <label for="country">Country</label>
        <select id="country" name="country" required>
          <option value="" selected disabled hidden>Select a country</option>
          <option value="CN">China</option>
          <option value="IN">India</option>
          <option value="JP">Japan</option>
          <option value="KR">South Korea</option>
          <option value="PH">Philippines</option>
          <option value="ID">Indonesia</option>
          <option value="MY">Malaysia</option>
          <option value="SG">Singapore</option>
          <option value="TH">Thailand</option>
          <option value="VN">Vietnam</option>
          <option value="PK">Pakistan</option>
          <option value="BD">Bangladesh</option>
          <option value="SA">Saudi Arabia</option>
          <option value="AE">United Arab Emirates</option>
          <option value="TR">Turkey</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <label for="email">Contact Person</label>
        <input type="text" id="person" name="person" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" required>
      </div>
    </div>
    

    <div style="text-align:center">
      <input type="submit" value="Register">
    </div>
  </form>
</body>
</html>
