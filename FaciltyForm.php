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

    <form method="post" action="facilityback.php">
        <div class="mb-3">
            <p class="">
                This questionnaire is to collect information relating to your satisfaction towards facilities and
                services provided for
                creating conducive atmosphere for teaching and learning. The information provided by you will be kept
                confidential and
                will be used as important feedback for quality improvement of the programme of studies/institution.
                <br>
                <b>Directions:</b><br>
                For each item please indicate your level of satisfaction with the following statement by choosing a
                scorebetween 1 and 5. <br>
                <b>(1 – strongly disagree, 2 - disagree, 3 – not sure, 4 – agree, 5 – strongly agree)</b>

                <br><br>
            </p>
            <b>
                <label class="form-label">Enter your ID(Student ID):</label>
                <div class="form-group mb-2">
                    <input class="form-control-plaintext" type="text" name="studentid"
                        style="border-color:grey;  border-style: solid;padding:10px" readonly
                        value="<?php echo $userId; ?>" required>
                </div>
                <label class="form-label">The prescribed books/reading materials are available in the library.</label>
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
            <label class="form-label">Reading room and common room are available in the college building.</label>
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
            <label class="form-label">Available reading space in library is satisfactory.</label>
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
            <label class="form-label">The library staff are cooperative and helpful.</label>
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
            <label class="form-label">Photocopying facility in the library/Department is available and
                satisfactory.</label>
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
            <label class="form-label">Internet facilities are available in the department.</label>
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
            <label class="form-label">Online educational resources are available and accessible.</label>
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
            <label class="form-label">The office staff in the department are helpful.</label>
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
            <label class="form-label">Results and attendance records are displayed on time</label>
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
            <label class="form-label">Toilets/washrooms are hygienic and properly maintained.</label>
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
            <label class="form-label">Clean drinking water is available in the department and in the campus.</label>
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
            <label class="form-label">Grievances/problems are redressed/solved well in time.</label>
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
            <label class="form-label">The functioning of the placement cell in the college/department is
                satisfactory.</label>
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
            <label class="form-label">Equipment in the labs are in working condition.</label>
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
            <label class="form-label">The buildings/classrooms are accessible to differently abled persons.</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault15" value="1" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault15" value="2" id="radio" required>
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
            <label class="form-label">The classrooms are clean and well maintained.</label>
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
            <label class="form-label">Ambiance of the campus is conducive for Teaching & Learning </label>
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