<?php
session_start();
include('db.php');
if (isset($_GET['f2'])){
    $rem=base64_decode($_GET['f2']);
}else{
    $rem=0.0;
}
$b=base64_decode($_GET['f1']);
$query="SELECT * FROM ".$_SESSION['User']."_".$b." WHERE 1;";
$income=mysqli_query($connect,$query);
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
    <link rel="stylesheet" href="Styling/bud.css">
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


  <div class="alert alert-success" role="alert">
    BUDGET : <?php echo $b ?> <br>
    Remaining Amount : <?php echo $rem?>
  </div>


  <div class="container">
    <div class="form">
      <form class="signUp" action="calculate.php?b=<?php echo $b?>" method="POST" style="display:block">
        <div class="formGroup">
          <input type="number" placeholder="0" name="amt" autocomplete="off">
        </div>
        <select class="form-select" name="currency" aria-label="Default select example">
          <option selected class="opt">Select Currency</option>
          <option class="opt">US DOLLAR $</option>
          <option class="opt">AUS DOLLAR $</option>
          <option class="opt">EURO €</option>
          <option class="opt">POUND £</option>
          <option class="opt">INDIAN RUPEE ₹</option>
        </select>
        <div class="formGroup">
          <input type="text" placeholder="Remarks" name="rmk" autocomplete="off">
        </div>
        <div class="formGroup">
          <input type="submit" class="btn2" name='action' value='INCOME' id='i' />
          <input type="submit" class="btn2" name='action' value='EXPENDITURE' id='e'>
        </div>
 
      </form>
    </div>
  </div>


  <div>
    <h3  id='l10'>Upto last 10 transactions visible below</h3>
    <h3  id='comp'>For complete history click <a href="complete.php?f=<?php echo base64_encode($b)?>">here</a></h3>
  </div>


  <table class="table table-dark table-striped-columns table-bordered" id='inc'>
    <thead>
      <tr>
        <th scope="col" class='h'>#</th>
        <th scope="col" class='t h'>Type</th>
        <th scope="col" class='t h'>Amount</th>
        <th scope="col" class='t h'>Remarks</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      <?php
      $n=1;
      $no=mysqli_num_rows($income);
      $var=$no-10;
      foreach($income as $row)
      {
        if($n>$var)
        {
          $type=$row['type'];
          $rmk = $row['rmk'];
          $amt = $row['amt'];
          echo "<tr>";
          echo "<th scope='row'>".$n-$var."</th>";
          echo "<td class='t'>".$type."</td>";
          echo "<td class='t'>".$amt."</td>";
          echo "<td class='t'>".$rmk."</td>";
          echo "</tr>";
        }
        $n=$n+1;
      }
      ?>
    </tbody>
  </table>
</body>
</html> 