<?php
include("config.php");
session_start();


if (isset($_SESSION['login_user_parent'])) {
    $userId = $_SESSION['login_user_parent'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $s_id = $userId;

        $q1 = $_POST['159'];
        $q2 = $_POST['160'];
        $q3 = $_POST['161'];
        $q4 = $_POST['162'];
        $q5 = $_POST['163'];
        $q6 = $_POST['164'];
        $q7 = $_POST['165'];
        $q8 = $_POST['166'];
        $q9 = $_POST['167'];
        $q10 = $_POST['flexRadioDefault15'];
        $q11 = $_POST['flexRadioDefault16'];
        $q12 = $_POST['flexRadioDefault17'];
        $q13 = $_POST['flexRadioDefault18'];
        $q14 = $_POST['flexRadioDefault19'];
        $cmnts = $_POST['cmnts'];

        $sql = "insert into parent_feedback(s_id,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,cmnt) values('$s_id','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$cmnts')";
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
        echo '<meta http-equiv="refresh" content="1.5; URL=\'parentForm.php\'" />';
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
            <h1 class="display-4 text-white">Parent Feedback Form</h1>
            <small class="text-white">Feedback provided by Parents</small>
            <br><br>
        </center>
    </div>

    <form action="" method="post">
        <div class="mb-3">
            <p class="">
                <b>Dear Parent,</b><br>
                The AIET has been established in 2008 with an aim to provide an environment for holistic growth.
                It provides all facilities for its students to become professionals and entrepreneurs.
                <br>
                Over the years the college has attracted students reaffirming the trust of the parents.
                Here are some of the questionnaire for giving feedback about our institute and its system.

                <br><br>
            </p>
            <b>
            <?php
                    $query4 = "select * from questions where f_id='FM104'";
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
            <div class="mb-3">
                <label class="form-label">Are you satisfied with the student discipline in the college</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value='1' name="flexRadioDefault15" id="radio" required>
                    <label class="form-check-label" for="q1o1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value='0' name="flexRadioDefault15" id="radio">
                    <label class="form-check-label" for="q1o2">
                        No
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Does your ward / Institute regularly informs you about performance</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value='1' name="flexRadioDefault16" id="radio" required>
                    <label class="form-check-label" for="q1o1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value='0' name="flexRadioDefault16" id="radio">
                    <label class="form-check-label" for="q1o2">
                        No
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Do the faculty inform you about your ward regularity</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value='1' name="flexRadioDefault17" id="radio" required>
                    <label class="form-check-label" for="q1o1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value='0' name="flexRadioDefault17" id="radio">
                    <label class="form-check-label" for="q1o2">
                        No
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Are you satisfied with the examination system adopted in the Institute</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value='1' name="flexRadioDefault18" id="radio" required>
                    <label class="form-check-label" for="q1o1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value='0' name="flexRadioDefault18" id="radio">
                    <label class="form-check-label" for="q1o2">
                        No
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Are you satisfied with the quality of teaching offered by the college</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value='1' name="flexRadioDefault19" id="radio" required>
                    <label class="form-check-label" for="q1o1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value='0' name="flexRadioDefault19" id="radio">
                    <label class="form-check-label" for="q1o2">
                        No
                    </label>
                </div>
            </div>
            <br>
            <div>
                <label class="form-label">Any other suggestions or comments
                </label>
                <br>
                <textarea class="form-control" type="text" name="cmnts" id="" rows="5" required></textarea>
            </div>
            <br>
            </b>
            <br>
            <br>
            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
    </form>
</body>
<script>
</script>

</html>
<?php
}else{
    echo '<meta http-equiv="refresh" content="1.5; URL=\'parentlogin.php\'" />';
}
?>