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
    <link rel="stylesheet" href="Styling/test.css">
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




	<div style="display:block;" class='testing'>
  		<div style="display:inline-block;">
    		<h4 id='only'>Click here for</h4>
  		</div>
  		<div style="display:inline-block;">
			<div class="btn">
        		<button class="loginBtn" id='comp'><h4 style="color:blue;">Complete</h4></button>
			</div>
		</div>
		<div style="display:inline-block;">
			<h4 id='only'>, </h4>
		</div>
		<div style="display:inline-block;">
			<div class="btn">
        		<button class="loginBtn" id='inc'><h4 style="color:blue;">Income</h4></button>
			</div>
		</div>
		<div style="display:inline-block;">
			<h4 id='only'>or</h4>
		</div>
		<div style="display:inline-block;">
			<div class="btn">
        		<button class="loginBtn" id='exp'><h4 style="color:blue;">Expenditure</h4></button>
			</div>
		</div>
		<div style="display:inline-block;">
			<h4 id='only'>information</h4>
		</div>
	</div>
  


	<div id='Complete' style='display:block;'>
		<?php
		include('db.php');
		session_start();
		$b=base64_decode($_GET['f']);
		$query="SELECT * FROM ".$_SESSION['User']."_".$b." WHERE 1;";
		$result=mysqli_query($connect,$query);
		?>
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
				foreach($result as $row)
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
					$n=$n+1;
				}
				?>
			</tbody>
		</table>
	</div>


	<div id='Income' style='display:none;'>
		<?php
		include('db.php');
		session_start();
		$b=base64_decode($_GET['f']);
		$query="SELECT * FROM ".$_SESSION['User']."_".$b." WHERE type='Income';";
		$result=mysqli_query($connect,$query);
		?>
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
				foreach($result as $row)
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
					$n=$n+1;
				}
				?>
			</tbody>
		</table>
	</div>



	<div id='Expenditure' style='display:none;'>
		<?php
		include('db.php');
		session_start();
		$b=base64_decode($_GET['f']);
		$query="SELECT * FROM ".$_SESSION['User']."_".$b." WHERE type='Expenditure';";
		$result=mysqli_query($connect,$query);
		?>
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
				foreach($result as $row)
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
					$n=$n+1;
				}
				?>
			</tbody>
		</table>
	</div>


	<script>
		document.getElementById('comp').addEventListener('click', comp);
		function comp() 
		{
			document.getElementById('Complete').style.display = 'block';
			document.getElementById('Income').style.display = 'none';
			document.getElementById('Expenditure').style.display = 'none';
		}

		document.getElementById('inc').addEventListener('click', inc);
		function inc() 
		{
			document.getElementById('Complete').style.display = 'none';
			document.getElementById('Income').style.display = 'block';
			document.getElementById('Expenditure').style.display = 'none';
		}

		document.getElementById('exp').addEventListener('click', exp);
		function exp() 
		{
			document.getElementById('Complete').style.display = 'none';
			document.getElementById('Income').style.display = 'none';
			document.getElementById('Expenditure').style.display = 'block';
		}
	</script>
</body>
</html> 