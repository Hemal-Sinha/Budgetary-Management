<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <script src="first.js"></script> -->
</head>

<body style="background-image: url('Images/team.png');background-size: cover;">
  <nav class="navbar navbar-expand-lg sticky-top bg-primary">
    <div class="container-fluid">
      <span class="navbar-brand" href="#">
        <img src="Images/calc.png" width="70" height="40">
        BUDGET MANAGER
      </span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="home_page.php">Home</a>
          <a class="nav-link" href="prev.php">Previous Budgets</a>
          <a class="nav-link" href="add_new.php">New Budget</a>
          <a class="nav-link" href="about.php">About Us</a>
          <a class="nav-link disabled">Coming Soon</a>
        </div>
      </div>
      <span class="navbar-brand" href="#">
        <?php echo "Hello, ".$_SESSION['User']."!"?>
        <a href="first.php">
          <img src="Images/logout.png" width="70" height="40">
        </a>
      </span>
    </div>
  </nav>


  <div>
    <h3>TEAM : </h3>
  </div>


    <div class="card mb-3" style="max-width: 540px;margin: 0 auto;background:transparent;border:3px solid black">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="Images/profile.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Hemal Sinha</h5>
                    <p class="card-text">I am a beginner web developer and this is one of my first major project.</p>
                    <p class="card-text">Contact : hemalsinha18jan@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>