<?php
include "config.php";

session_start();

if (isset($_SESSION['login_user_faculty'])) {
    $userID = $_SESSION['login_user_faculty'];
    $queryq8 = "select avg(q8) from faculty_feedback where f_id='$userID'";
    $resultq8 = mysqli_query($con, $queryq8);
    $rowq8 = mysqli_fetch_array($resultq8);
    $avgq8 = (round($rowq8['avg(q8)'])) * 2;

    $queryq9 = "select avg(q9) from faculty_feedback where f_id='$userID'";
    $resultq9 = mysqli_query($con, $queryq9);
    $rowq9 = mysqli_fetch_array($resultq9);
    $avgq9 = (round($rowq9['avg(q9)'])) * 2;

    $queryq3 = "select avg(q3) from faculty_feedback where f_id='$userID'";
    $resultq3 = mysqli_query($con, $queryq3);
    $rowq3 = mysqli_fetch_array($resultq3);
    $avgq3 = (round($rowq3['avg(q3)'])) * 2;

    $queryq6 = "select avg(q6) from faculty_feedback where f_id='$userID'";
    $resultq6 = mysqli_query($con, $queryq6);
    $rowq6 = mysqli_fetch_array($resultq6);
    $avgq6 = (round($rowq6['avg(q6)'])) * 2;

    $queryq7 = "select avg(q7) from faculty_feedback where f_id='$userID'";
    $resultq7 = mysqli_query($con, $queryq7);
    $rowq7 = mysqli_fetch_array($resultq7);
    $avgq7 = (round($rowq7['avg(q7)'])) * 2;


?>
<!DOCTYPE html>
<html>
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
            <h2>Faculty Dashboard</h2>
        </a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
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
    <center>
        <div
            class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">
                Performance Analysis
            </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                </div>
            </div>
        </div>
        <div class="container">
            <canvas id="myChart1" style="width:100%;max-width:600px"></canvas>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
        </div>
        <div
            class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">

            </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                </div>
            </div>
        </div>
        <div
            class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">
                Overall Analysis
            </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                </div>
            </div>
        </div>
        <div class="container">
            <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
        </div>
    </center>
    <script>
    var xValues = ["Communication", "Teaching", "Attitude", "Exam Patterns", "Resourses"];
    var yValues = [<?php echo "$avgq8" ?>, <?php echo "$avgq9" ?>, <?php echo "$avgq3" ?>, <?php echo "$avgq6" ?>,
        <?php echo "$avgq7" ?>
    ];
    var barColors = [
        "#b91d47",
        "#00aba9",
        "#2b5797",
        "#e8c3b9",
        "#1e7145"
    ];

    new Chart("myChart1", {
        type: "doughnut",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            title: {
                display: true,
                text: ""
            }
        }
    });


    var xValues = ["Overall"];
    var yValues = [5];
    var barColors = ["red", "green", "blue", "orange", "brown"];

    new Chart("myChart2", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: ""
            }
        }
    });
    </script>


</body>

</html>

<?php
} else {
    echo "<script>location.href='facultylogin.php'</script>";
}
?>