<?php
session_start();
if (isset($_GET['msg'])){
    $msg=$_GET['msg'];
}else{
    $msg="Enter the name and currency of the budget";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Budget</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Styling/addnew.css">
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
                <a href="logout.php">
                    <img src="Images/logout.png" width="70" height="40">
                </a>
            </span>
    
        </div>
    </nav>


    <div class="alert alert-success" role="alert">
        <?php echo $msg ?>
    </div>
    

    <div class="container">
        <div class="form">
            <form class="signUp" action="curr.php" method="POST" style="display:block">
                <div class="formGroup">
                    <input type="text" placeholder="Budget Name" name="bname" autocomplete="off">
                </div>
                <select class="form-select" name="currency" aria-label="Default select example">
                    <option selected class="opt">Select Currency</option>
                    <option class="opt">USD</option>
                    <option class="opt">AUD</option>
                    <option class="opt">EUR</option>
                    <option class="opt">GBP</option>
                    <option class="opt">INR</option>
                </select>
                <div class="formGroup">
                    <button type="submit" class="btn2">CONTINUE</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
