<?php
include "config.php";
session_start();
$userId = $_SESSION['login_user_student'];
$query1 = "select * from students where s_id='$userId'";
$result1 = mysqli_query($con, $query1);
$row1 = mysqli_fetch_array($result1);
$cId = $row1['c_id'];

$query2 = "select * from subjects where c_id='$cId'";
$result2 = mysqli_query($con, $query2);
while ($row2 = mysqli_fetch_array($result2)) {
    $subName = $row2['sub_name'];
    $subId = $row2['sub_id'];
    $fId = $row2['f_id'];
}

$query3 = "select * from faculty where f_id='$fId'";
$result3 = mysqli_query($con, $query3);
$row3 = mysqli_fetch_array($result3);
$facName = $row3['f_name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="head"><a class="navbar-brand" href="facultydash.php">
            <h2>Student Dashboard</h2>
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

        </div>
        </div>
        <ul class="navbar-nav px-3">
            <div class="navbar-nav"><a class="nav-link active" href="home.html">Home <span
                        class="sr-only">(current)</span></a><a class="nav-link active" href="#">Help</a>
                <a class="nav-link active" href="#">About</a>
                <a class="nav-link active" href="contact.html">Contact Us</a>
                <li class="nav-item text-nowrap"><a class="nav-link" id="signinbtn" href="logout.php">Sign out <i
                            class="bi bi-arrow-right-circle-fill"></i></a></li>
        </ul>
    </nav>


    <center class="bg-light" id="viewMore">
        <div
            class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">
                Your Subjects
            </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                </div>
            </div>
        </div>
    </center>

    <div class="container text-center">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "$subName"; ?></h5>
                        <p class="card-text">
                            Subject Code: BCACAC101
                        </p>
                        <p class="card-text">
                            Faculty Name: Shambhavi
                        </p>
                        <a href="facultyForm.php" class="btn btn-primary">Give Feedback</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Distributed Computing</h5>
                        <p class="card-text">
                            Subject Code: BCACAC102
                        </p>
                        <p class="card-text">
                            Faculty Name: Priya
                        </p>
                        <a href="#" class="btn btn-primary">Give Feedback</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text">
                            Subject Code: BCACAC103
                        </p>
                        <p class="card-text">
                            Faculty Name: Murali Krishna
                        </p>
                        <a href="#" class="btn btn-primary">Give Feedback</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Artificial Intelligence</h5>
                        <p class="card-text">
                            Subject Code: BCACAC104
                        </p>
                        <p class="card-text">
                            Faculty Name: Vanitha Prabhu
                        </p>
                        <a href="#" class="btn btn-primary">Give Feedback</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">LINUX</h5>
                        <p class="card-text">
                            Subject Code: BCACAC105
                        </p>
                        <p class="card-text">
                            Faculty Name: Sgruthi T
                        </p>
                        <a href="#" class="btn btn-primary">Give Feedback</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Software Engineering</h5>
                        <p class="card-text">
                            Subject Code: BCACAC106
                        </p>
                        <p class="card-text">
                            Faculty Name: Ramesha S
                        </p>
                        <a href="#" class="btn btn-primary">Give Feedback</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script></script>
</body>

</html>