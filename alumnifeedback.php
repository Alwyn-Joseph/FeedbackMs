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
            <h1 class="display-4">Alumini Feedback Form</h1>
            <small class="text-muted">Feedback provided about facilities</small>
            <br><br>
        </center>
    </div>

    <form method="post" action="alumniback.php">
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
                <b>Please Tick Attributes:</b><br>Excellent-5, VeryGood-4, Good-3, Average-2, Poor-1<br>
                <br><br>
            </p>
            <b>


                <label class="form-label">1.Admission Procedure</label>
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
            <label class="form-label">2.Fee structure</label>
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
            <label class="form-label">3.Environment</label>
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
            <label class="form-label">4.Infrastructure & Lab facilities</label>
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
            <label class="form-label">5.Faculty</label>
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
            <label class="form-label">6.Project Guidance</label>
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
            <label class="form-label">7.Quality of support material</label>
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
            <label class="form-label">8.Training & Placement</label>
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
            <label class="form-label">9.Library</label>
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
            <label class="form-label">10.Canteen Facilities</label>
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
            <label class="form-label">11.Hostel Facilities</label>
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
            <label class="form-label">12.Alumini Association/Network of Old Friends</label>
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
            <label class="form-label">13.caliber of students passing out of this college</label>
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
            <label class="form-label">14.Learning experience in terms of life application</label>
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
            <label class="form-label">15.Course content learnt and its relevance to your current job</label>
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
            <label class="form-label">16.Library/Seminar/Reading Room</label>
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
            <label class="form-label">17.Computer Facilities </label>
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
            <label class="form-label">18.Internet & Wi-Fi </label>
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
            <label class="form-label">19.Sports and Cultural facilities </label>
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
            <label class="form-label">20.Seminars & Workshops</label>
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
            <label class="form-label">21.Guest Lectures</label>
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
            <label class="form-label">22.Special Training Classes for bridging Industry and Academic gap </label>
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
            <label class="form-label">23.Overall Rating of the College </label>
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
            <label class="form-label">24.Has the Training & Placement(T & P)Cell provided ample on campus placement
                opportunities? </label>
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
            <label class="form-label">25.Has the (T & P) Cell provided sufficient off campus placement opportunities?
            </label>
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
            <label class="form-label">26.Did you ever avail Carrer counseling and guidance for higher studies from T&P
                Cell? </label>
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
        <p class="">
            The level of quittance of programme educational objectives set by the Program educational objectives set by
            the program.
            <br>
            <b>Please Tick Attributes:Excellent-5;VeryGood-4;Good-3;Average-2;Poor-1</b><br>
            <br><br>
        </p>
        <div class="mb-3">
            <label class="form-label">1.</label>
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
            <label class="form-label">2. </label>
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

        <div class="mb-3">
            <label class="form-label">3. </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault29" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault29" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault29" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault29" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault29" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">4. </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault30" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault30" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault30" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault30" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault30" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">5. </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault31" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault31" value="2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault31" value="3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault31" value="4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault31" value="5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
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
            <textarea class="form-control" type="text" name="comments" id="" rows="5" required></textarea>
        </div>
        <br>

        <div class="form-row">
            <div class="col">
                <label class="form-label">Name: </label>
                <input type="text" name="aname" class="form-control">
            </div>
            <div class="col">
                <label class="form-label">Degree/s: </label>
                <input type="text" name="degree" class="form-control">
            </div>
            <div class="col">
                <label class="form-label">Year: </label>
                <input type="text" name="year" class="form-control">
            </div>
            <div class="col">
                <label class="form-label">E-Mail ID: </label>
                <input type="email" name="mail" class="form-control">
            </div>

        </div>
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

<body>

</body>

</html>