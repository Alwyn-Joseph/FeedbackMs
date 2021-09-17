<?php
include "config.php";
session_start();

if (isset($_SESSION['login_user_employer'])) {

    $userId = $_SESSION['login_user_employer'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $e_mail = $userId;
        $q = "select * from employer where e_mail='$e_mail' limit 1";
        $r = mysqli_query($con, $q);
        $f = mysqli_fetch_array($r);
        $e_id = $f['e_id'];
        $e_name = $f['e_name'];
        
        $q1 = $_POST['144'];
        $q2 = $_POST['145'];
        $q3 = $_POST['146'];
        $q4 = $_POST['147'];
        $q5 = $_POST['148'];
        $q6 = $_POST['149'];
        $q7 = $_POST['150'];
        $q8 = $_POST['151'];
        $q9 = $_POST['152'];
        $q10 = $_POST['153'];
        $q11 = $_POST['154'];
        $q12 = $_POST['155'];
        $q13 = $_POST['156'];
        $q14 = $_POST['157'];
        $q15 = $_POST['158'];
        $q16 = $_POST['inlineRadioOptions'];
        $cmnt1 = $_POST['cmnt1'];
        $cmnt2 = $_POST['cmnt2'];

        $sql = "insert into employer_feedback(e_id,e_name,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,cmnt1,cmnt2) values('$e_id','$e_name','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$cmnt1','$cmnt2')";
        $result = mysqli_query($con, $sql);

            if (!$result) {
                echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
                    </script>
                    <script>
                        window.onload = function swal() {
                            Swal.fire({
                                icon: \'error\',
                        title: \'Oops...\',
                        text: \'An error occured!\',
                        })
                        };
                    </script>';
                    echo '<meta http-equiv="refresh" content="1.5; URL=\'employerForm.php\'" />';
            } else {
                echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
                    </script>
                    <script>
                        window.onload = function swal() {
                            Swal.fire({
                                icon: \'success\',
                        title: \'Sent\',
                        text: \'Feedback Submitted Successfully!!\',
                        })
                        };
                    </script>';
                    echo '<meta http-equiv="refresh" content="1.5; URL=\'employerForm.php\'" />';
            }
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
    <title>Employer | Provide Your Feedback</title>

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/dashboard/">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
        </script>
        <style>
    * {
        font-family: 'Ubuntu', sans-serif;
        
    }

            /* width */
        ::-webkit-scrollbar {
        width: 5px;
        }

        ::-webkit-scrollbar:hover {
        width: 7px;
        }

        /* Track*/
        ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 5px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
        background: rgb(128, 128, 128);
        border-radius: 5px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
        background: #666666;
        }

    body{
        background: #0F2027;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #2C5364, #203A43, #0F2027); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        background-repeat: no-repeat;
    }

    form {
        margin-left: 10%;
        margin-right: 10%;
        padding-top: 5%;
        padding-left: 10%;
        padding-right: 10%;
        padding-bottom: 10%;
        border-radius: 5px;
        box-shadow: 0px 1px 2px 1px grey;
        background-color : white;
    }

    #title {
        padding-top: 5%;
    }

    #submit {
        font-size: 25;
        font-weight: bold;
        box-shadow: 1px 1px 3px 1px rgb(189, 189, 189);
        padding-left: 7%;
        padding-right: 7%;
    }

    #qsnbx{
        border-radius:5px;
        box-shadow:0px 0px 3px 0px #a7a7a7;
        background-color:#f8f8f8;
        transition: 0.2s;
    }
    #qsnbx:hover{
        
        box-shadow:0px 0px 3px 1px #a7a7a7;
    }

    </style>
</head>

<body>
    
    <div class="mb-3" id="title">
        <center>
            <h1 class="display-4 text-white">Employer Feedback Form</h1>
            <small class="text-white">Feedback provided by Employers</small>
            <br><br>
        </center>
    </div>

    <form method="post" action="">
        <div class="mb-3">
            <p class="">
                <b>Dear Employer,</b><br>
                Many graduates of our Department/College/Institution are already working in your organization. We
                are
                thankful to you
                for providing them employment with your prestigious Company/Organization.
                We shall very much appreciate and be grateful to you if you can spare some of your valuable time to
                fill up this feedback form. 
                <br>It will help us to improve the Institution further and give you better employees in
                future.
                <br><br>
            </p>
            <b>

            <?php
                    $query4 = "select * from questions where f_id='FM103'";
                    $result4 = mysqli_query($con, $query4);
                        while ($row4 = mysqli_fetch_array($result4)) {
                            echo '<div class="container text-center" id="qsnbx">
                            <br>
                            <label class="form-label"><b>' . $row4['q_desc'] . '</b></label>
                            <br><br>                  
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="' . $row4['q_id'] . '" value="1" id="radio" required>
                                        <label class="form-check-label" for="q1o1">
                                        Strongly Disagree
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="' . $row4['q_id'] . '" value="2" id="radio">
                                        <label class="form-check-label" for="q1o2">
                                            Disagree
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="' . $row4['q_id'] . '" value="3" id="radio">
                                        <label class="form-check-label" for="q1o3">
                                            Not Sure
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="' . $row4['q_id'] . '" value="4" id="radio">
                                        <label class="form-check-label" for="q1o4">
                                            Agree
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="' . $row4['q_id'] . '" value="5" id="radio">
                                        <label class="form-check-label" for="q1o5">
                                            Strongly Agree
                                        </label>
                                    </div>
                                    <br>
                                    <br>
                                    </div>
                                    <br>';
                        }
                    ?>

<div class="container text-center" id="qsnbx">
<br>
            <label class="form-label">On a scale of 1 to 10 how do you rate your overall satisfaction with AIET students
                and
                the curriculum?
            </label>
            <br>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="1" required>
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="2">
                <label class="form-check-label" for="inlineRadio1">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="3">
                <label class="form-check-label" for="inlineRadio1">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="4">
                <label class="form-check-label" for="inlineRadio1">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="5">
                <label class="form-check-label" for="inlineRadio2">5</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="6">
                <label class="form-check-label" for="inlineRadio2">6</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="7">
                <label class="form-check-label" for="inlineRadio2">7</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="8">
                <label class="form-check-label" for="inlineRadio2">8</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="9">
                <label class="form-check-label" for="inlineRadio2">9</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="10">
                <label class="form-check-label" for="inlineRadio2">10</label>
            </div>
<br><br>
            </div>
        <br>
        <div>
            <label class="form-label">If you were dissatisfied with any aspect, please comment further:
            </label>
            <br>
            <textarea class="form-control" type="text" name="cmnt1" id="" rows="5" required></textarea>
        </div>
        <br>
        <div>
            <label class="form-label">How could our programs be improved? What specific comments do you have regarding
                the curriculum?
            </label>
            <br>
            <textarea class="form-control" type="text" name="cmnt2" id="" rows="5" required></textarea>
        </div>
        </b>
        <br>
        <br>
        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
        <a class="btn btn-danger" href="logout.php" id="submit">Cancel</a>

    </form>
</body>
<script>
</script>

</html>
<?php
}else{
    echo '<meta http-equiv="refresh" content="1.5; URL=\'employerlogin.php\'" />';
}