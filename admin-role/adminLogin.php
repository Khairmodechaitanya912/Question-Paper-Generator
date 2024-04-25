<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./adminLogin.css">
    <title>Question Bank Generator</title>
</head>
<body>
    <section id="login">
      <div class="text-center text-white">
        <h1 class="heading">Login Form</h1>
      </div>
      <div class="text-center text-white">
        <h2 class="sub-heading">Welcome Back..</h2>
      </div>
      <div class="d-flex justify-content-center">
        <div class="login-frame text-white">
          <div class="row">
          <div class="col-12">
            <label for="emailField" class="form-label">Email Id</label>
            <input type="email" class="form-control mb-2" id="emailField" placeholder="name@gmail.com" required>
          </div>
          <div class="col">
            <label for="passwordField" class="form-label">Password</label>
            <input type="password" class="form-control" id="passwordField" placeholder="Password">
          </div>
          </div>
          <button type="submit" class="btn btn-primary w-50 mt-4">Login</button>
        </div>
      </div>
    </section>
</body>
</html>