<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>
<body>
<form method="post">
  <div class="form-group first_box">
    <h1>OTP Verification system</h1>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <button type="button" class="btn btn-primary" onclick="send_otp()">SEND OTP</button>
  </div>
  
  <div class="form-group second_box">
    <h1>Continue login</h1>

    <label for="exampleInputEmail1">Enter OTP</label>
    <input type="text" class="form-control" id="otp" aria-describedby="emailHelp" placeholder="Enter OTP">
    <small id="emailHelp" class="form-text text-muted">Never share your OTP with anyone else.</small>
    <button type="button" class="btn btn-primary" onclick="match_otp()">SUBMIT</button>
    <div class="alert alert-info" role="alert"></div>
  </div>

</form>
<script src="script/script.js"></script>    
</body>
</html>