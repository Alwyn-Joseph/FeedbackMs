<?php
session_start();
include "config.php";

if (isset($_SESSION['login_user_admin'])) {
    $userID = $_POST['sid'];
    if(isset($_POST['delete'])){
        $Query = "select * from students where s_id='$userID'";
        $Result = mysqli_query($con, $Query);
        $count = mysqli_num_rows($Result);

        if ($count!=1) {
            echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
                            </script>
                            <script>
                                window.onload = function swal() {
                                    Swal.fire({
                                        icon: \'error\',
                                title: \'Oops...\',
                                text: \'Incorrect Student ID!\',
                                })
                                };
                            </script>';
        echo '<meta http-equiv="refresh" content="1.5; URL=\'manageUsers.php\'" />';

        }else{
            $vQuery = "delete FROM students WHERE s_id='$userID'";
                $Result = mysqli_query($con, $vQuery);
                    if ($Result!=NULL) {
                        echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
                                </script>
                                <script>
                                    window.onload = function swal() {
                                        Swal.fire({
                                            icon: \'success\',
                                    title: \'Deleted\',
                                    text: \'Student was deleted successfully!\',
                                    })
                                    };
                                </script>';
        echo '<meta http-equiv="refresh" content="1.5; URL=\'manageUsers.php\'" />';

                    }
                }
        }
    else{

    $vQuery = "select * from students where s_id='$userID'";
    $vResult = mysqli_query($con, $vQuery);
    $vRow = mysqli_fetch_array($vResult);
    $count = mysqli_num_rows($vResult);

    if ($count >= 1) {

        $name=$vRow['s_name'];
        $c_id=$vRow['c_id'];
        $phone = 93456789788;
        $email = "naveenkumar12@gmail.com";
        $fname = "Lokesh Kumari";
        $mname = "Saukalya Kumar";
        $dob = "27/05/21";
        $doa = "02/05/21";
        $nation = "Indian";
        $state = "Karnataka";
        $batch = "CA18";
        $sec = "A";
?>


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
</head>

<body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <h6 class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 bg-dark" h><img src="images/Logo.png" width="30" alt="alvas">
            Feedback System</h6>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
  
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">

                        <h6
                            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Feedbacks</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                        <li class="nav-item">
                            <a class="nav-link" href="faculties.php">
                                <span data-feather="shopping-cart"></span>
                                Faculties
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="students.php">
                                <span data-feather="users"></span>
                                Facilities
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

                        <br><br><br>
                        <br><br><br>

                        <hr style="border-top: 2px solid #bbb;">
                        <li class="nav-item">
                            <a class="nav-link" href="manageforms.php">
                                <span data-feather="layers"></span>
                                Manage Forms
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="manageUsers.php">
                                <span data-feather="layers"></span>
                                Manage Users
                            </a>
                        </li>
 
                        
                        <li class="nav-item text-nowrap">
                        <a class="nav-link" href="logout.php">Sign out <i
                        class="bi bi-arrow-right-circle-fill"></i></a>
                        </li>
                    </ul>

                    
                </div>
            </nav>
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
                                        <p class="text-muted font-size-sm">Course Id : <?php echo "$c_id"; ?></p>
                                        
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
                                        <h6 class="mb-0">Full Name :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo "$name"; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">ID :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo "$userID"; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo "$email"; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo "$phone"; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Father's Name :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo "$fname"; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Mother's Name :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo "$mname"; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Date Of Birth :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo "$dob"; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Date of admission :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo "$doa"; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nationality :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo "$nation"; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">State :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo "$state"; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Batch :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo "$batch"; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Section :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo "$sec"; ?>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    </div> 
                </div>
            </div>
        </main>
        <br>
        <br>


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
                    text: \'Incorrect Student ID!\',
                    })
                    };
                </script>';
        echo '<meta http-equiv="refresh" content="1.5; URL=\'manageUsers.php\'" />';
    }
}
} else {
    echo "<script>location.href='adminlogin.php'</script>";
}
?>