<?php
session_start();
include "config.php";

if (isset($_SESSION['login_user'])) {
    $userID = $_POST['fId'];

    $vQuery = "select * from faculty_feedback where f_id='$userID'";
    $vResult = mysqli_query($con, $vQuery);
    $vRow = mysqli_fetch_array($vResult);
    $count = mysqli_num_rows($vResult);

    if ($count >= 1) {
        $query1 = "select avg(q8) from faculty_feedback where f_id='$userID'";
        $result1 = mysqli_query($con, $query1);
        $row1 = mysqli_fetch_array($result1);
        $avg = (round($row1['avg(q8)'])) * 2;

        $query2 = "select * from faculty where f_id='$userID'";
        $result2 = mysqli_query($con, $query2);
        $row2 = mysqli_fetch_array($result2);
        $name = ($row2['f_name']);

        $queryDId = "select * from faculty where f_id='$userID'";
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



        $phone = 93456789788;

        $email = "naveenkumar12@gmail.com";

        $lm = 6;
        $cm = 8;

        $notify = 3;

        $overall = 4;

        $overall = ($overall) * 10;

        if ($overall >= 90) {
            $pgbcolor = "success";
        } elseif ($overall >= 60) {
            $pgbcolor = "warning";
        } else {
            $pgbcolor = "danger";
        }

?>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Admin | Faculty</title>

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/dashboard/">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <style>
    .nav-link:hover {
        background-color: #8dd8b3;
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    body {
        font-size: .875rem;
    }

    .feather {
        width: 16px;
        height: 16px;
        vertical-align: text-bottom;
    }

    /* Sidebar*/

    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 100;
        /* Behind the navbar */
        padding: 48px 0 0;
        /* Height of navbar */
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    @media (max-width: 767.98px) {
        .sidebar {
            top: 5rem;
        }
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: .5rem;
        overflow-x: hidden;
        overflow-y: auto;
        /* Scrollable contents if viewport is shorter than content. */
    }

    .sidebar .nav-link {
        font-weight: 500;
        color: #333;
    }

    .sidebar .nav-link .feather {
        margin-right: 4px;
        color: #727272;
    }

    .sidebar .nav-link.active {
        color: #007bff;
    }

    .sidebar .nav-link:hover .feather,
    .sidebar .nav-link.active .feather {
        color: inherit;
    }

    .sidebar-heading {
        font-size: .75rem;
        text-transform: uppercase;
    }

    /*Navbar*/
    .navbar-brand {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: 1rem;
        background-color: rgba(0, 0, 0, .25);
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
    }

    .navbar .navbar-toggler {
        top: .25rem;
        right: 1rem;
    }

    .navbar .form-control {
        padding: .75rem 1rem;
        border-width: 0;
        border-radius: 0;
    }

    .form-control-dark {
        color: #fff;
        background-color: rgba(255, 255, 255, .1);
        border-color: rgba(255, 255, 255, .1);
    }

    .form-control-dark:focus {
        border-color: transparent;
        box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
    }

    #dash:hover {
        background-color: #560058;
        color: white;
    }

    #stat:hover {
        background-color: #7cb8f8;
        color: white;
    }

    #more:hover {
        background-color: #a71777;
        color: white;
    }

    #signinbtn:hover {
        background-color: #343a40;
    }

    a {
        text-decoration: none;
    }

    td,
    tr {
        text-align: center;
    }

    html {
        scroll-behavior: smooth;
    }

    * {
        font-family: 'Ubuntu', sans-serif;
    }

    a {
        text-decoration: none;
    }

    a:hover {
        background-color: rgb(95, 95, 95);

        border-radius: 4px;
        text-decoration: none;

    }

    #head:hover {
        background-color: black;
    }

    body {
        margin-top: 20px;
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;
    }

    .main-body {
        padding: 15px;
    }

    .card {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }

    .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
    }

    .gutters-sm>.col,
    .gutters-sm>[class*=col-] {
        padding-right: 8px;
        padding-left: 8px;
    }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
    }

    .bg-gray-300 {
        background-color: #e2e8f0;
    }

    .h-100 {
        height: 100% !important;
    }

    .shadow-none {
        box-shadow: none !important;
    }

    #messageLink:hover {
        transition: 0ms;
        background-color: #007bff;
        color: white;

    }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"><img src="images/Logo.png" width="30" alt="alvas">
            Alva's
            Feedback System</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" id="signinbtn" href="logout.php">Sign out <i
                        class="bi bi-arrow-right-circle-fill"></i></a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" id="dash" aria-current="page" href="admindashboard.php">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <h6
                            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Feedbacks</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                        <li class="nav-item">
                            <a class="nav-link active" href="faculties.php">
                                <span data-feather="shopping-cart"></span>
                                Faculties
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="students.php">
                                <span data-feather="users"></span>
                                Students
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="alumni.php">
                                <span data-feather="bar-chart-2"></span>
                                Alumni
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="employer.php">
                                <span data-feather="bar-chart-2"></span>
                                Employer
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="parent.php">
                                <span data-feather="bar-chart-2"></span>
                                Parent
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="event.php">
                                <span data-feather="bar-chart-2"></span>
                                Event
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="questions.php">
                                <span data-feather="layers"></span>
                                Questions
                            </a>
                        </li>
                    </ul>
                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Statistics</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" id="stat" href="#">
                                <span data-feather="file-text"></span>
                                Faculty Analysis
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="stat" href="#">
                                <span data-feather="file-text"></span>
                                College Analysis
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="stat" href="#">
                                <span data-feather="file-text"></span>
                                Course Analysis
                            </a>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li class="nav-item">
                            <a class="nav-link" id="more" href="#">
                                <span data-feather="file-text"></span>
                                More <i class="bi bi-box-arrow-in-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <br><br>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                        class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4><?php echo "$name"; ?></h4>
                                        <p class="text-secondary mb-1">Deptartment : CSE</p>
                                        <p class="text-muted font-size-sm">Department Id: <?php echo "$dId"; ?></p>
                                        <a href="#message" class="btn btn-outline-primary">
                                            Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo "$name"; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">ID</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo "$userID"; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo "$email"; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo "$phone"; ?>
                                    </div>
                                </div>
                                <hr>
                                <a href="#viewMore" class="btn btn-danger">
                                    Modify
                                </a>
                                <hr>
                            </div>
                        </div>

                        <div class="row gutters-sm">
                            <div class="col-sm-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="d-flex align-items-center mb-3"><i
                                                class="material-icons text-info mr-2"></i>Subject-wise analyisis
                                        </h6>
                                        <small>JAVABCA3A</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>JAVABCA3B</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 72%"
                                                aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>C++BCA2B</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 89%"
                                                aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>FITBCA1A</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 55%"
                                                aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>ECOMERCEBCOM2A</small>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 66%"
                                                aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="card h-100">
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
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 60%"
                                                aria-valuenow="<?php echo "$avg" ?>" aria-valuemin="0"
                                                aria-valuemax="100">
                                            </div>
                                        </div>
                                        <p class="card-text"><b>Teaching</b></p>
                                        <div class="progress mb-3" style="height: 8px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"
                                                aria-valuenow="<?php echo "$avg" ?>" aria-valuemin="0"
                                                aria-valuemax="100">
                                            </div>
                                        </div>
                                        <p class="card-text"><b>Attitude</b></p>
                                        <div class="progress mb-3" style="height: 8px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"
                                                aria-valuenow="<?php echo "$avg" ?>" aria-valuemin="0"
                                                aria-valuemax="100">
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

                <br><br><br>
                <center class="bg-light" id="viewMore">
                    <div
                        class=" d-flex justify-content-center flex-wrap flex-md-nowrap align-it ems-center pt-3 pb-2 mb-3 border-bottom">
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
                    <br><br><br>
                </center>
                <div class="bg-light">
                    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
                        id="message">
                        <h1 class="h2">
                            Message
                        </h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group mr-2">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <form class="justify-content-center align-items-center">
                            <div class="form-group">
                                <textarea type="text" class="form-control" aria-describedby="message" rows="10"
                                    cols="5"></textarea>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div
                                class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                <button type="submit" class="btn btn-primary ">Send Message</button>
                                <div class="btn-toolbar mb-2 mb-md-0">
                                    <div class="btn-group mr-2">
                                    </div>
                                </div>
                            </div>

                            <br><br>
                        </form>
                    </div>
                </div>

                <br><br>
                </form>
        </div>
        </main>
        <br>
        <br>

        <script>
        var xValues = ["Communication", "Teaching", "Attitude", "Exam Patterns", "Resourses"];
        var yValues = [<?php echo "$avgq8" ?>, <?php echo "$avgq9" ?>, <?php echo "$avgq3" ?>,
            <?php echo "$avgq6" ?>,
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
        echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
                </script>
                <script>
                    window.onload = function swal() {
                        Swal.fire({
                            icon: \'error\',
                    title: \'Oops...\',
                    text: \'Incorrect Faculty ID!\',
                    })
                    };
                </script>';
        echo '<meta http-equiv="refresh" content="1.5; URL=\'viewfacfeed.php\'" />';
    }
} else {
    echo "<script>location.href='adminlogin.php'</script>";
}
?>