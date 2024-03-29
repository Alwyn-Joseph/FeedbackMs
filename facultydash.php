<?php
include "config.php";

session_start();

if (isset($_SESSION['login_user_faculty'])) {
    $userID = $_SESSION['login_user_faculty'];


    $query2 = "select * from faculty_details where f_id='$userID'";
    $result2 = mysqli_query($con, $query2);
    $row2 = mysqli_fetch_array($result2);
    $name = ($row2['f_name']);

    $queryDId = "select * from faculty_details where f_id='$userID'";
    $resultDId = mysqli_query($con, $queryDId);
    $rowDId = mysqli_fetch_array($resultDId);
    $dId = ($rowDId['d_id']);

    $queryq8 = "select avg(q8) from faculty_feedback where f_id='$userID'";
    $resultq8 = mysqli_query($con, $queryq8);
    $rowq8 = mysqli_fetch_array($resultq8);
    $avgq8 = (round($rowq8['avg(q8)'])) * 2;

    $queryq9 = "select avg(q9) from faculty_feedback where f_id='$userID'";
    $resultq9 = mysqli_query($con, $queryq9);
    $rowq9 = mysqli_fetch_array($resultq9);
    $avgq9 = (round($rowq9['avg(q9)'])) * 2;

    $queryq7 = "select avg(q7) from faculty_feedback where f_id='$userID'";
    $resultq7 = mysqli_query($con, $queryq7);
    $rowq7 = mysqli_fetch_array($resultq7);
    $avgq7 = (round($rowq7['avg(q7)'])) * 2;

    $queryq3 = "select avg(q3) from faculty_feedback where f_id='$userID'";
    $resultq3 = mysqli_query($con, $queryq3);
    $rowq3 = mysqli_fetch_array($resultq3);
    $avgq3 = (round($rowq3['avg(q3)'])) * 2;

    $queryq6 = "select avg(q6) from faculty_feedback where f_id='$userID'";
    $resultq6 = mysqli_query($con, $queryq6);
    $rowq6 = mysqli_fetch_array($resultq6);
    $avgq6 = (round($rowq6['avg(q6)'])) * 2;


    $queryq1 = "select avg(q1) from faculty_feedback where f_id='$userID'";
    $resultq1 = mysqli_query($con, $queryq1);
    $rowq1 = mysqli_fetch_array($resultq1);
    $avgq1 = (round($rowq1['avg(q1)'])) * 2;



    $overall = ($avgq3+$avgq6+$avgq7+$avgq8+$avgq9+$avgq1)*2;


    if ($overall >= 90) {
        $pgbcolor = "success";
    } elseif ($overall >= 60) {
        $pgbcolor = "warning";
    } else {
        $pgbcolor = "danger";
    }


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $message = $_POST['message'];
            $userID = $_SESSION['login_user_faculty'];

            if ($message != null) {

                $sql = "insert into admin_notifications(u_id,u_message) values('$userID','$message')";
                $result = mysqli_query($con, $sql);

                if (!$result) {
                    echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
                        </script><script>window.onload=function swal() {
                    Swal.fire( {
                            icon: \'error\',
                            title: \'Oops...\',
                            text: \'An error occured\',
                        }

                    )
                }

                ;
                </script>';
                    echo '<meta http-equiv="refresh" content="1.5; URL=\'facultydash.php\'" />';
                } else {
                    echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
                        </script><script>window.onload=function swal() {
                    Swal.fire( {
                            icon: \'success\',
                            title: \'Sent\',
                            text: \'Message Sent Successfully !\',
                        }

                    )
                }

                ;
                </script>';
                    echo '<meta http-equiv="refresh" content="1.5; URL=\'facultydash.php\'" />';
                }
            } else {
                echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
                        </script><script>window.onload=function swal() {
                    Swal.fire( {
                            icon: \'error\',
                            title: \'\',
                            text: \'An empty message, can cause problems\',
                        }

                    )
                }

                ;
                </script>';
                echo '<meta http-equiv="refresh" content="1.5; URL=\'facultydash.php\'" />';
            }
        }
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
    <style>
    html {
        scroll-behavior: smooth;
    }

    * {
        font-family: 'Ubuntu', sans-serif;
    }

    a {
        text-decoration: none;
        color:black;
    }

    a:hover {
        background-color: #e2e8f0;

        border-radius: 4px;
        text-decoration: none;

    }

    body {
        color: #1a202c;
        background-color: #e2e8f0;
    }

    .card {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
    }

    #messageLink:hover {
        transition: 0ms;
        background-color: #007bff;
        color: white;

    }

    #head{
        box-shadow:0px 0px 5px 1px grey;
    }
    </style>

    <title>Faculty Dashboard</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar bg-light text-dark" id="head">
            <img src="images/headLogo.png" class="img-fluid" width=150 height=100 alt="alvas">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

        </div>
        </div>
        <ul class="navbar-nav px-3" style="font-weight:bold;">
            <div class="navbar-nav"><a class="nav-link active" href="#">Home <span
                        class="sr-only">(current)</span></a><a class="nav-link active" href="home.html">Help</a>
                <a class="nav-link active" href="#">About</a>
                <a class="nav-link active" href="Home.php#contact">Contact Us</a>
                <li class="nav-item text-nowrap"><a class="nav-link" id="signinbtn" href="logout.php">Sign out <i
                            class="bi bi-arrow-right-circle-fill"></i></a></li>
        </ul>
    </nav>
    <br><br>
    <div class="container">
        <div class="main-body">

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4><?php echo "$name"; ?></h4>
                                    <p class="text-muted font-size-sm">Faculty: <?php echo "$userID"; ?></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                    <div class="card-body">
                                        <h5 class="card-title text-center"><b>Overall Performance</b></h5>
                                        <div class="progress mb-3" style="height: 15px">
                                            <div class="progress-bar bg-<?php echo "$pgbcolor"; ?>" role="progressbar"
                                                style="width: <?php echo "$overall"; ?>%">
                                            </div>
                                        </div>
                                        <p class="card-text">Here is your monthly performance summary</p>
                                        <p class="card-text"><b>Communication</b></p>
                                        <div class="progress mb-3" style="height: 8px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo ($avgq3)*10; ?>%"
                                                 aria-valuemin="0"
                                                aria-valuemax="10">
                                            </div>
                                        </div>
                                        <p class="card-text"><b>Teaching</b></p>
                                        <div class="progress mb-3" style="height: 8px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo ($avgq1)*10;?>%"
                                                 aria-valuemin="0"
                                                aria-valuemax="10">
                                            </div>
                                        </div>
                                        <p class="card-text"><b>Attitude</b></p>
                                        <div class="progress mb-3" style="height: 8px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo ($avgq6)*10; ?>%"
                                                 aria-valuemin="0"
                                                aria-valuemax="10">
                                            </div>
                                        </div>
                                        <a href="#viewMore" class="btn btn-primary">
                                            View More
                                        </a>
                                    </div>
                    </div>

                    


                </div>
            </div>

        </div>

    </div>
    <center class="bg-light" id="viewMore">
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
    </center>
    </div>
    <div class="container bf-light">
                        <h3 class="text-center">Examiner Feedback</h3>
                        <hr style="border-top: 2px solid #bbb;">
                        <div class="container">
                        <div class="card text-center">

                            <div class="card-body">
                                <a href="examFeed.php" class="btn btn-success">Give Feedback</a>
                            </div>
                            <div class="card-footer text-muted">
                                
                            </div>
                        </div>
                    </div>
                    <br>
    <div class="container text-center">
        <span class="small">
            ALVA’S INSTITUTE OF ENGINEERING & TECHNOLOGY
            <br>Shobhavana Campus, Mijar, Moodubidire - 574 225, Mangalore, DK</span>
    </div>
    <br>


    <script>
    var xValue = ["Time Sense and Punctuality", "Subject Command", "Use of Teaching Aids", "Helping Attitude",
        "Class Control"
    ];
    var yValue = [<?php echo "$avgq8" ?>, <?php echo "$avgq9" ?>, <?php echo "$avgq3" ?>,
        <?php echo "$avgq6" ?>,
        <?php echo "$avgq7" ?>, <?php echo "$avgq7" ?>
    ];
    var barColors = [
        "#b91d47",
        "#00aba9",
        "#2b5797",
        "#e8c3b9",
        "#1e7145",
        "#2f5797",
    ];

    new Chart("myChart1", {
        type: "doughnut",
        data: {
            labels: xValue,
            datasets: [{
                backgroundColor: barColors,
                data: yValue
            }]
        },
        options: {
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