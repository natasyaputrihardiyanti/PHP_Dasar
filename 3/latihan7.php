<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, iniatial-scale=1.0">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <title >Login Admin</title>
  </head>
  <body style="background-color: #2d0542;">
    <div class="container my-5">
    <div class="row justify-content-center align-items-center">
      <div class="card col-sm-3" style="background: #b670db;">

          <div class="card-header text-white" style="background: #b670db;">
            <h3>Login Form</h3>

          </div>
          <div class="card-body" style="background: #b670db;">
            <?php if (isset($_SESSION["massage"])): ?>
            <div class="alert alert-<?=($_SESSION["massage"]["type"])?>">
            <?php echo $_SESSION["massage"]["massage"]; ?>
            <?php unset ($_SESSION["massage"]); ?>
            <!-- <input type="text" name="username" class="form-control mb-1 " placeholder="Username" required>
            <input type="password" name="password" class="form-control mb-3" placeholder="Password" required> -->
          </div>
            <?php endif; ?>

            <input type="text" name="username" class="form-control mb-1 " placeholder="Username" required>
            <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
            <button type="submit" class="btn btn-block" style="background:#cc1635;">
              LOGIN
                </button>
          </div>



      </div>
    </div>


    </div>
  </body>
</html>
