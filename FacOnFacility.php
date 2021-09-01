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
    <title>Faculty FEEDBACK</title>
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
            <h1 class="display-4">FACULTY FEEDBACK ON CURRICULUM</h1>
            <small class="text-muted">Feedback provided about curriculam</small>
            <br><br>
        </center>
    </div>

    <form method="post" action="FacOnFacilityBack.php">
        <div class="mb-3">
            <p class="">
                <b>Dear Faculty,</b><br>
                You are requested to provide the feedback on curriculum, in order to identify the gaps, and to
                bridge
                the gap through various value added /certification courses.
                The analysis of feedback can be sent to VTU for their kind consideration for re-designing the
                curriculum
                <br>
            </p>
            <b>
                <b>Directions:</b><br>
                For each item please indicate your level of satisfaction with the following statement by choosing a
                score between 1 and 5. <br>
                [ 1 – strongly disagree, 2 - disagree, 3 – not sure, 4 – agree, 5 – strongly agree ]
            </b>

            <br><br>
            <label class="form-label">1.Syllabus is relevant to the course and is career oriented.</label>
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
            <label class="form-label">2.Syllabus is updated regularly as per the industry needs.</label>
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
            <label class="form-label">3.Course objectives and outcomes are clearly defined.</label>
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
            <label class="form-label">4.Course content is followed by sufficient reference materials.</label>
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
            <label class="form-label">5.The course has a good balance between theory and applications.</label>
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
            <label class="form-label">6.Teacher has the freedom to adopt new techniques/strategies in teaching.</label>
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
            <label class="form-label">7.The curriculum ensures student participation in learning process.</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault7" value="1" id="radio" required>
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault7" value="2" id="radio">
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
            <label class="form-label">8.The curriculum creates social awareness among the students.</label>
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
            <label class="form-label">9.The curriculum is sufficient to cover the program /course outcomes.</label>
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
            <br>

            <div>
                <label class="form-label">10.Any other comments
                </label>
                <br>
                <textarea class="form-control" type="text" name="comments" id="ffccomment" rows="5" required></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
    </form>
</body>

</html>