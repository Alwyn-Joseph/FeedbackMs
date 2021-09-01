<?php
/*
include "config.php";
session_start();
$userId = $_SESSION['login_user_student'];
*/
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

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $s_id = $userId;
        $q1 = $_POST['flexRadioDefault1'];
        $q2 = $_POST['flexRadioDefault2'];
        $q3 = $_POST['flexRadioDefault3'];
        $q4 = $_POST['flexRadioDefault4'];
        $q5 = $_POST['flexRadioDefault5'];
        $q6 = $_POST['flexRadioDefault6'];
        $q7 = $_POST['flexRadioDefault7'];
        $q8 = $_POST['flexRadioDefault8'];
        $q9 = $_POST['flexRadioDefault9'];
        $q10 = $_POST['flexRadioDefault10'];
        $q11 = $_POST['flexRadioDefault11'];
        $q12 = $_POST['flexRadioDefault12'];
        $q13 = $_POST['flexRadioDefault13'];
        $q14 = $_POST['flexRadioDefault14'];
        $q15 = $_POST['flexRadioDefault15'];
        $q16 = $_POST['flexRadioDefault16'];
        $q17 = $_POST['flexRadioDefault17'];
        $q18 = $_POST['flexRadioDefault17'];
        $cmnts = $_POST['comments'];

        $sql = "insert into alumni_feedback(s_id,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,cmnt) values('$s_id','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$cmnts')";
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
                    text: \'Still working on it!\',
                    })
                    };
                </script>';
        echo '<meta http-equiv="refresh" content="1.5; URL=\'alumnifeedback.php\'" />';
    }

    mysqli_close($con);
    ?>

</body>

</html>