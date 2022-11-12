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
    <link rel="stylesheet" href="Styling/home.css">
    <!-- <script src="first.js"></script> -->
</head>

<body>
  
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


  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
  <div class="carousel-item active">
      <img src="Images/st.png" class="w-100" style="height:500px;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Images/1.png" class="w-100" style="height:500px;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Images/2.jpeg" class="w-100" style="height:500px;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Images/3.jpeg" class="w-100" style="height:500px;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Images/4.jpeg" class="w-100" style="height:500px;" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>





  <!-- <div class='quote'>
    <img src='Images/q.jpeg' style="margin:auto;display:block;width:850px;">
    <div class='q'>"Don't tell me what you value,<br> show me your budget,<br> and I'll tell you what you value"</div>
  </div> -->
</div>
</body>
</html>
