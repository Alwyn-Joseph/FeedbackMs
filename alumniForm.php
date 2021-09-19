<?php
include("config.php");
session_start();


if (isset($_SESSION['login_user_alumni'])) {
    $userId = $_SESSION['login_user_alumni'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $s_id = $userId;

        $q1 = $_POST['168'];
        $q2 = $_POST['169'];
        $q3 = $_POST['170'];
        $q4 = $_POST['171'];
        $q5 = $_POST['172'];
        $q6 = $_POST['173'];
        $q7 = $_POST['174'];
        $q8 = $_POST['175'];
        $q9 = $_POST['176'];
        $q10 = $_POST['177'];
        $q11 = $_POST['178'];
        $q12 = $_POST['179'];
        $q13 = $_POST['180'];
        $q14 = $_POST['181'];
        $q15 = $_POST['182'];
        $q16 = $_POST['183'];
        $q17 = $_POST['184'];
        $q18 = $_POST['185'];
        $q19 = $_POST['186'];
        $q20 = $_POST['187'];
        $q21 = $_POST['188'];
        $q22 = $_POST['189'];
        $q23 = $_POST['190'];
        $q24 = $_POST['191'];
        $q25 = $_POST['192'];
        $q26 = $_POST['193'];
        $q27 = $_POST['194'];
        $q28 = $_POST['195'];
        $q29 = $_POST['196'];
        $q30 = $_POST['197'];
        $q31 = $_POST['198'];






        $q32 = $_POST['flexRadioDefault32'];
        $q33 = $_POST['flexRadioDefault33'];
        $q34 = $_POST['flexRadioDefault34'];
        $q35 = $_POST['flexRadioDefault35'];
        $q36 = $_POST['flexRadioDefault36'];
        $cmnts = $_POST['cmnts'];
        $pos = $_POST['possition'];

        $sql = "insert into alumni_feedback
        (s_id,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,q18,q19,q20,
        q21,q22,q23,q24,q25,q26,q27,q28,q29,q30,q31,q32,q33,q34,q35,q36,cmnt,current_possition) 
        values('$s_id','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12',
        '$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$q24','$q25','$q26',
        '$q27','$q28','$q29','$q30','$q31','$q32','$q33','$q34','$q35','$q36','$cmnts','$pos')";
        $result = mysqli_query($con, $sql);

        if (!$result) {
            die(mysqli_error($con));
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
                echo '<meta http-equiv="refresh" content="2.5; URL=\'alumniForm.php\'" />';
        } else {
            echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
                </script>
                <script>
                    window.onload = function swal() {
                        Swal.fire({
                            icon: \'success\',
                    title: \'Sent\',
                    text: \'Feedback submitted succesfully!\',
                    })
                    };
                </script>';
                session_destroy();
        echo '<meta http-equiv="refresh" content="2.5; URL=\'Home.php\'" />';
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
    <title>Parent | Provide Your Feedback</title>

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
            <h1 class="display-4 text-white">Alumni Feedback Form</h1>
            <small class="text-white">Feedback provided by alumni</small>
            <br><br>
        </center>
    </div>

    <form method="post" action="">
        <div class="mb-3">
            <p class="">
                We are glad that you have spent valuable years pursuing courses of your choice at AIET.We shall be
                thankful if you can spare some of your valuable time to fill up
                this feedback form and give us valuable suggestions for further improvement of the College.Your valuable
                inputs will be of great use to improve the quality of our academic programs and enhance the credibility
                of our institution.
                Rate the adeuacy of following as they were during your tenure as a student
                You may also visit the AIET website at www.aiet.org.in for more details
                <br>
                <br>
                <br><br>
            </p>
            <b>
            <?php
                    $query4 = "select * from questions where f_id='FM105'";
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

        <b>Please Comment on the following:</b><br>
        <div class="mb-3">
            <label class="form-label">1.If you are invited to deliver A Guest Lecture/A special Talk/A Motivational
                Session for your juniors,will you be interested? </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault32" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    YES
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault32" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    NO
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">2.Have you participated in any Alumini meet as of now (if organized by your parent
                department?) </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault33" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    YES
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault33" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    NO
                </label>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">3.Do you receive communications from the college/parent department through
                Mails/Calls/SMS etc? </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault34" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    YES
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault34" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    NO
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">4.Are you willing to contribute to the development of the college? </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault35" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    YES
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault35" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    NO
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">5.Need any change in curriculam and syllabus </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault36" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    YES
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault36" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    NO
                </label>
            </div>
        </div>
        <div>
            <label class="form-label">Any other comments
            </label>
            <br>
            <textarea class="form-control" type="text" name="cmnts" id="" rows="5" required></textarea>
        </div>
        <br>
        <br>
        <div class="form-group mb-2">
            <label class="form-label">Current Position & Company Name: </label>

            <input class="form-control" type="text" name="possition" style="padding:10px" required>
        </div>

        <br>
        <br>
        </b>

        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
    </form>
</body>
<script>
</script>

</html>
<?php
}else{
    echo '<meta http-equiv="refresh" content="1.5; URL=\'alumnilogin.php\'" />';
}
?>