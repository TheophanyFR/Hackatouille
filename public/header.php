<?php
session_start();

if(!empty($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CrossXperience</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>

<!-- Start barre de navigation-->

<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CrossXperience</a>
                <img class="logo" src="../src/images/logo.png">
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="navbar-form navbar-left">
                    <div class="form-group">
                        <form method="GET">
                        <input name="search" type="text" class="form-control" placeholder="Search">
                            <button href="../categories/videogames.php" type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
                <ul class="nav navbar-nav navbar-right">
                        <strong>Hello <?php echo $_SESSION['username']; ?> !</strong>
                    <a href="../public/login.php" type="button" class="btn btn-default navbar-btn">Login</a>
                    <a href="../public/signup.php" type="button" class="btn btn-default navbar-btn">Create an account</a>
                    <li><a href="../public/index.php">News</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My culture<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../categories/videogames.php">Video games</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../categories/test_movies_api.php">Movies</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../categories/test_series_api.php">TV-Shows</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My account<span class="caret"></span></a>
                        <p><?=$userInfo['username'];?></p>
                        <ul class="dropdown-menu">
                            <li><a href="../public/profil.php">My profile</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>

<!-- End barre de navigation-->
<!--Include de la page index.php-->



