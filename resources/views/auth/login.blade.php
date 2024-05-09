<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dropz Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('icons/fa/fontawesome.min.css') }}">
  <style>
    /* Additional Custom Styles */
    body {
      background-color: #f0f5ff; /* Sky-like background color */
    }
    .login-container {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .card {
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .line {
      border-top: 1px solid #ccc;
      margin: 0 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center login-container">
      <div class="col-sm-8 col-md-6 col-lg-4">
        <div class="card p-4">
          <img src="logo.png" alt="Dropz Logo" class="img-fluid mb-4 mx-auto d-block" style="max-width: 100px;">
          <hr>
          <form>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" name="email" id="email" placeholder="accounts@example.com">
              <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" name="password" id="password" placeholder="accounts@example.com">
              <label for="floatingInput">Password</label>
            </div>
            <div class="mb-3 d-flex justify-content-end">
              <a href="#" class="fw-bold text-decoration-none">Forgot password?</a>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="agree" name="agree" required>
              <label class="form-check-label" for="agree">I agree to the Terms and Privacy Policy</label>
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
          </form>
          <div class="d-flex align-items-center mb-3">
            <div class="flex-grow-1 line"></div>
            <div class="px-2">Or login with:</div>
            <div class="flex-grow-1 line"></div>
          </div>
          <div class="d-grid gap-2 mb-3">
            <button class="btn btn-danger">Google</button>
            <button class="btn btn-primary">Facebook</button>
          </div>
          <div>
            <p class="text-center">Don't have an account? <a href="#">Register here</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (Optional, if you need it) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
