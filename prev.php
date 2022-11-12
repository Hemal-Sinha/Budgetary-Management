<?php
session_start();
include('db.php');
$query = "SELECT * FROM ".$_SESSION['User'].";";
$result = mysqli_query($connect,$query);
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
    <link rel="stylesheet" href="Styling/addnew.css">
    <!-- <script src="first.js"></script> -->
</head>

<body>
<body style="background-image: url('Images/bgimg.png');background-size: cover;">
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


  <div class="head" style="color:black;">
    <h2><i>List of your all previous budgets</i></h2>
  </div>

  
  <table class="table table-dark table-striped-columns table-bordered">
    <thead>
      <tr>
        <th scope="col" class='h'>#</th>
        <th scope="col" class='t h'>Budget Name</th>
        <th scope="col" class='t h'>Remaining Amount</th>
        <th scope="col" class='t h'>Currency</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      <?php
      $n=1;
      foreach($result as $row)
      { 
        $l=strlen($_SESSION['User']);
        $name = substr($row['bname'],$l+1);
        $rem = $row['rem'];
        $curr = $row['curr'];
        echo "<tr>";
        echo "<th scope='row'>".$n."</th>";
        echo "<td class='t'> <a href='budget.php?f1=".base64_encode($name)."&f2=".base64_encode($rem)."'>".$name."</a> </td>";
        echo "<td class='t'>".$rem."</td>";
        echo "<td class='t'>".$curr."</td>";
        echo "</tr>";
        $n=$n+1;
      }
      ?>
    </tbody>
  </table>
</body>
</html>