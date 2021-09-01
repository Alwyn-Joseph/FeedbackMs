<?php
include "config.php";
session_start();
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
    <title>Facilty Form</title>
    <style>
    * {
        font-family: 'Ubuntu', sans-serif;
    }

    form {
        margin-left: 10%;
        margin-right: 10%;
        padding-top: 5%;
        padding-left: 10%;
        padding-right: 10%;
        padding-bottom: 10%;
        border-radius: 5px;
        box-shadow: 0px 1px 8px 1px grey;
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
    </style>
</head>

<body>
    <div class="mb-3" id="title">
        <center>
            <h1 class="display-4">Facility Feedback Form</h1>
            <small class="text-muted">Feedback provided about facilities</small>
            <br><br>
        </center>
    </div>

    <form method="post" action="facultyBack.php">
        <div class="mb-3">
            <p class="">
                You are requested to provide the feedback on faculty about their punctuality, subject command etc.,
                which helps to meet the requirement by the faculty
                <br>
                <b>Directions:</b><br>
                For each item please indicate your level of satisfaction with the following statement by choosing a
                scorebetween 1 and 5. <br>
                <b>(1 – strongly disagree, 2 - disagree, 3 – not sure, 4 – agree, 5 – strongly agree)</b>

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
                    <select class="" name="subjects">
                        <option value="0">Select Subject</option>
                        <?php
                        $querydrop = "select * from subjects where c_id='$cId'";
                        $resultdrop = mysqli_query($con, $querydrop);
                        while ($rowdrop = mysqli_fetch_array($resultdrop)) {
                            echo '
                            <option value="' . $rowdrop['f_id'] . '" required>' . $rowdrop['sub_name'] . '</option>';
                        }
                        ?>

                    </select>
                </div>
                <br>
                <label class="form-label">Teacher conducts the classes regularly</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" value="1" id="radio" required>
                    <label class="form-check-label" for="q1o1">
                        1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" value="2" id="radio">
                    <label class="form-check-label" for="q1o2">
                        2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" value="3" id="radio">
                    <label class="form-check-label" for="q1o3">
                        3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" value="4" id="radio">
                    <label class="form-check-label" for="q1o4">
                        4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" value="5" id="radio">
                    <label class="form-check-label" for="q1o5">
                        5
                    </label>
                </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Teacher engage students throughout the session</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault2" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault2" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault2" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault2" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault2" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Syllabus of this course is completed in time</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault3" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault3" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault3" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault3" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault3" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Assignments and class tests are conducted as per schedule</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault4" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault4" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault4" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault4" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault4" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Alternate arrangements were made during absence</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault5" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault5" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault5" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault5" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault5" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The faculty focused on the course content</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault6" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault6" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault6" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault6" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault6" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Faculty involved in Classroom discussions</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault7" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault6" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault7" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault7" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault7" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The faculty have good communication skills</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault8" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault8" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault8" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault8" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault8" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The lectures were well structured</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault9" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault9" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault9" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault9" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault9" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>

        </div>
        <div class="mb-3">
            <label class="form-label">The faculty related the subject to real life applications</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault10" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault10" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault10" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault10" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault10" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The faculty referred to latest developments in the fields</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault11" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault11" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault11" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault11" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault11" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The faculty used different teaching aids like PPT’s, Blackboard</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault12" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault12" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault12" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault12" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault12" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Effectiveness of teaching aid used</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault13" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault13" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault13" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault13" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault13" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The faculty used different teaching methods (Demonstration / simulation)</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault14" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault14" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault14" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault14" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault14" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The faculty discuss the scheme and solution of I.A question paper/label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault15" value="1" id="radio">
                    <label class="form-check-label" for="q1o1">
                        1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault15" value="2" id="radio"
                        required>
                    <label class="form-check-label" for="q1o2">
                        2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault15" value="3" id="radio">
                    <label class="form-check-label" for="q1o3">
                        3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault15" value="4" id="radio">
                    <label class="form-check-label" for="q1o4">
                        4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault15" value="5" id="radio">
                    <label class="form-check-label" for="q1o5">
                        5
                    </label>
                </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The faculty allowed the review of answer scripts</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault16" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault16" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault16" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault16" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault16" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The faculty ensures student learning and update teaching methodology</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault17" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault17" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault17" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault17" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault17" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The faculty has a helping attitude towards varied academic interests of
                students</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault18" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault18" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault18" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault18" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault18" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The faculty encourages students to engage in self-learning through text books,
                e-resources, e-journals, etc</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault19" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault19" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault19" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault19" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault19" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The faculty counsel students, facing physical, emotional and learning
                challenges</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault20" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault20" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault20" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault20" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault20" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The faculty’s approach is towards development of inter-personal and professional
                skills among students</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault21" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault21" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault21" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault21" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault21" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The faculty help students in realizing career goals</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault22" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault22" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault22" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault22" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault22" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The faculty help students in realizing their strengths and development
                needs</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault23" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault23" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault23" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault23" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault23" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The faculty is effective in controlling and conducting the class</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault24" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault24" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault24" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault24" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault24" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The faculty invites student participation</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault25" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault25" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault25" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault25" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault25" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The faculty rightfully addresses inappropriate behavior of students</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault26" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault26" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault26" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault26" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault26" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The faculty has a tendency of inviting opinion and questions on subject matter
                from students</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault27" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault27" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault27" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault27" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault27" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">The faculty enhances learning by judicious reinforcement mechanism</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault28" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault28" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault28" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault28" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault28" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>

        <br>
        <div>
            <label class="form-label">Any other comments
            </label>
            <br>
            <textarea class="form-control" type="text" name="comments" id="" rows="5" required></textarea>
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

<body>

</body>

</html>