<?php
include "config.php";
session_start();

if (isset($_SESSION['login_user_student'])) {

    $userId = $_SESSION['login_user_student'];

    $query1 = "select * from students where s_id='$userId'";
    $result1 = mysqli_query($con, $query1);
    $row1 = mysqli_fetch_array($result1);
    $cId = $row1['c_id'];

    $query2 = "select * from subjects where c_id='$cId'";
    $result2 = mysqli_query($con, $query2);
    $row2 = mysqli_fetch_array($result2);
    $fId = $row2['f_id'];

    $query3 = "select * from faculty where f_id='$fId'";
    $result3 = mysqli_query($con, $query3);
    $row3 = mysqli_fetch_array($result3);
    $facName = $row3['f_name'];


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $s_id = $userId;
        $f_id = $_POST['subjects'];

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

        $sql = "insert into faculty_feedback(f_id,f_name,s_id,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,cmnt) values('$f_id','$facName','$s_id','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$cmnts')";
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
                    echo '<meta http-equiv="refresh" content="1.5; URL=\'studentdash.php\'" />';
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
    <title>Faculty | Provide Your Feedback</title>

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
            <h1 class="display-4 text-white">Facility Feedback Form</h1>
            <small class="text-white">Feedback provided about facilities</small>
            <br><br>
        </center>
    </div>

    <form method="post" action="">
        <div class="mb-3">
            <p class="">
                You are requested to provide the feedback on faculty about their punctuality, subject command etc.,
                which helps to meet the requirement by the faculty
                <br>
                <b>Directions:</b><br>
                For each item please indicate your level of satisfaction with the following statement by choosing a
                score between Strongly Agree and Strongly Disagree. <br>
                <br><br>
            </p>
            <b>
                <label class="form-label">ID(Student ID):</label>
                <div class="form-group mb-2">
                    <input class="form-control-plaintext" type="text" name="studentid"
                        style="border-color:grey;  border-style: solid;padding:10px" readonly
                        value="<?php echo $userId; ?>" required>
                </div>
                <br>
                <div class="dropdown">
                    <select class="btn btn-secondary dropdown-toggle bg-light text-dark" name="subjects">
                        <?php
                        $querydrop = "select * from subjects where c_id='$cId'";
                        $resultdrop = mysqli_query($con, $querydrop);
                        while ($rowdrop = mysqli_fetch_array($resultdrop)) {
                            echo '
                            <option class="dropdown-item" value="' . $rowdrop['f_id'] . '" required>' . $rowdrop['sub_name'] . '</option>';
                        }
                        ?>

                    </select>
                </div>
                </b>
                <br>
  
                <?php
                    $query4 = "select * from questions where f_id='FM101'";
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

        </div>
        <br>
        <div>
            <label class="form-label">Any other comments</label>
            <br>
            <textarea class="form-control" type="text" name="comments" id="" rows="5" required></textarea>
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
    </form>
    
    <br><br>
</body>
<script>
</script>

</html>

<body>

</body>

</html>
<?php
}else{
echo '<meta http-equiv="refresh" content="1.5; URL=\'studentlogin.php\'" />';
}