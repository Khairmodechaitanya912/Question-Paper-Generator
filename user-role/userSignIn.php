<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./userSignin.css">
    <title>Question Bank Generator</title>
</head>
<body>
<section id="signin">
    <div class="text-center text-white">
        <h1 class="heading">Sign In Form</h1>
    </div>

    <div class="d-flex justify-content-center">
      <div class="sign text-white">
        <div class="row">
          <div class="col-sm-6 col-12">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" placeholder="First Name" id="firstName" aria-label="First name" required>
          </div>
          <div class="col mt-sm-0 mt-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" placeholder="Last Name" id="lastName" aria-label="Last name" required>
          </div>
          <div class="col-12 mt-3">
            <label for="email" class="form-label">Email Id</label>
            <input type="email" class="form-control" id="email" placeholder="name@gmail.com" required>
          </div>
          <div class="col-12 mt-3">
            <label for="mobNo" class="form-label">Mobile No</label>
            <input type="email" class="form-control" id="mobNo" placeholder="9988776655" required>
          </div>
          <div class="col-12 mt-3">
            <label for="passwordField" class="form-label">Password</label>
            <input type="password" class="form-control" id="passwordField" placeholder="Password">
          </div>
          <div class="col-12 mt-3">
            <label for="confirmpasswordField" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirmpasswordField" placeholder="Confirm Password">
          </div>
        </div>
          <button type="submit" class="btn btn-primary w-50 mt-4">Sign In</button>
          <p class="text-center mt-4 fs-6">Already a member? <a href="./userLogin.php" class="link-info link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">Login</a></p>
      </div>
    </div>
  </section>

</body>
</html>