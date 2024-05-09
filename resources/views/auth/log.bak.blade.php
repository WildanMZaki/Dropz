<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dropz - Login</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f8ff; /* Sky Blue */
      overflow: hidden; /* Prevent scrolling during animation */
    }
    .login-card {
      position: relative;
      z-index: 1;
      width: 40%;
      margin: 50px auto; /* Reduced margin for larger screens */
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }
    .falling-effect {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh; /* Height of the falling effect */
      overflow: hidden;
      z-index: 0;
    }
    .falling-line {
      position: absolute;
      width: 2px; /* Adjust the width and color as needed */
      height: 50vh;
      background-color: rgba(0, 123, 255, 0.5); /* Light blue with transparency */
      animation: falling linear infinite;
    }
    .falling-line:nth-child(1) { left: 40%; animation-duration: 5s; }
    .falling-line:nth-child(2) { left: 42%; animation-duration: 6s; }
    .falling-line:nth-child(3) { left: 46%; animation-duration: 4s; }
    .falling-line:nth-child(4) { left: 48%; animation-duration: 5.5s; }
    .falling-line:nth-child(5) { left: 52%; animation-duration: 4.5s; }
    @keyframes falling {
      0% {
        transform: translateY(-100vh);
      }
      100% {
        transform: translateY(100vh);
      }
    }
    .login-card h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    .form-check-label {
      font-weight: normal;
    }
    .login-btn {
      background-color: #007bff; /* Bootstrap Primary Color */
      border: none;
    }
    .login-btn:hover {
      background-color: #0056b3; /* Darker shade of blue */
    }
  </style>
</head>
<body>

<div class="container">
  <div class="falling-effect"> <!-- Falling effect -->
    <div class="falling-line"></div>
    <div class="falling-line"></div>
    <div class="falling-line"></div>
    <div class="falling-line"></div>
    <div class="falling-line"></div>
  </div>
  <div class="login-card p-4">
    <h2>Dropz</h2>
    <form>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
      </div>
      <div class="row">
          <div class="form-group mt-3">
            <a href="#" class="float-right">Forgot Password?</a>
          </div>
      </div>
      <div class="row">
          <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="agree">
            <label class="form-check-label" for="agree">I agree to the <a href="#">Terms</a> and <a href="#">Privacy Policy</a></label>
          </div>
      </div>
      <button type="submit" class="btn btn-primary btn-block login-btn">Login</button>
    </form>
    <div class="text-center mt-3">
      <span>Don't have an account?</span>
      <a href="#">Sign Up</a>
    </div>
    <div class="text-center mt-3">
      <span>Or login with</span>
      <div class="d-flex">
        <button class="btn btn-dark btn-block"><i class="fab fa-google"></i> Google</button>
        <button class="btn btn-primary btn-block"><i class="fab fa-facebook"></i> Facebook</button>
      </div>
    </div>
  </div>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Font Awesome Icons -->
</body>
</html>
