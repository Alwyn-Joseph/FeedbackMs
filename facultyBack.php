<?php
include "config.php";
session_start();
$userId = $_SESSION['login_user_student'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <title>Faculty Feedback Submission</title>
</head>

<body>


    <?php
    include("config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $s_id = $userId;
        $f_id = $_POST['subjects'];

        
        $fNameQuery = "select f_name from faculty where f_id = '$f_id'";
        $fNameResult = mysqli_query($con, $fNameQuery);
        $row = mysqli_fetch_array($fNameResult);
        $f_name = $row['f_name'];


        $q1 = $_POST['101'];
        $q2 = $_POST['102'];
        $q3 = $_POST['103'];
        $q4 = $_POST['104'];
        $q5 = $_POST['105'];
        $q6 = $_POST['106'];
        $q7 = $_POST['107'];
        $q8 = $_POST['108'];
        $q9 = $_POST['109'];
        $q10 = $_POST['110'];
        $q11 = $_POST['111'];
        $q12 = $_POST['112'];
        $q13 = $_POST['113'];
        $q14 = $_POST['114'];
        $q15 = $_POST['115'];
        $q16 = $_POST['116'];
        $q17 = $_POST['117'];
        $q18 = $_POST['118'];
        $cmnts = $_POST['comments'];

        $sql = "insert into faculty_feedback(f_id,f_name,s_id,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,cmnt) values('$f_id','$f_name','$s_id','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$cmnts')";
        $result = mysqli_query($con, $sql);

        if (!$result) {
            echo '<div class="card text-center">
                <div class="card-header">
                    Sorry!
                </div>
                <div class="card-body">
                    <h5 class="card-title">Oops! Something went wrong.</h5>
                    <p class="card-text">We are looking into it, and will solve it soon.</p>
                    <a href="#" class="btn btn-primary">Go Back</a>
                </div>
                <div class="card-footer text-muted">
                </div>
                </div>';
        } else {
            echo '<div class="card text-center">
                    <div class="card-header">
                        Thankyou for your Feedback!
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Feedback Submitted Successfully!</h5>
                        <p class="card-text">What you shared with us, will help us to improve</p>
                        <a href="studentdash.php" class="btn btn-primary">Go Back</a>
                    </div>
                    <div class="card-footer text-muted">
                    </div>
                    </div>';
        }
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
        echo '<meta http-equiv="refresh" content="1.5; URL=\'facultyForm.php\'" />';
    }

    mysqli_close($con);
    ?>

</body>

</html>