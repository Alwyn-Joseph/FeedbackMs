<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Parent | Feedback form</title>

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
            <h1 class="display-4">Parent Feedback Form</h1>
            <small class="text-muted">Feedback provided by Parents</small>
            <br><br>
        </center>
    </div>

    <form>
        <div class="mb-3">
            <p class="">
                <b>Dear Parent,</b><br>
                The AIET has been established in 2008 with an aim to provide an environment for holistic growth.
                It provides all facilities for its students to become professionals and entrepreneurs.
                <br>
                Over the years the college has attracted students reaffirming the trust of the parents.
                Here are some of the questionnaire for giving feedback about our institute and its system.
                Directions:
                For each item please indicate your level of satisfaction with the following statement by choosing a
                scorebetween 1 and 5. <br>
                <b>(1 – strongly disagree, 2 - disagree, 3 – not sure, 4 – agree, 5 – strongly agree)</b>

                <br><br>
            </p>
            <b>
                <label class="form-label">Hostel facilities</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="radio">
                    <label class="form-check-label" for="q1o1">
                        1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="radio">
                    <label class="form-check-label" for="q1o2">
                        2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="radio">
                    <label class="form-check-label" for="q1o3">
                        3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="radio">
                    <label class="form-check-label" for="q1o4">
                        4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault1" id="radio">
                    <label class="form-check-label" for="q1o5">
                        5
                    </label>
                </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Library facilities</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault2" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault2" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault2" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault2" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault2" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Transport facilities</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault3" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault3" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault3" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault3" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault3" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Medical facilities</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault4" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault4" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault4" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault4" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault4" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Internet facilities</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault5" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault5" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault5" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault5" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault5" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Canteen facilities</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault6" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault6" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault6" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault6" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault6" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Counselling & Guidance</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault7" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault6" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault7" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault7" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault7" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Ambiance and environment</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault8" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault8" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault8" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault8" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault8" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Extra Curricular activities</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault9" id="radio">
                <label class="form-check-label" for="q1o1">
                    1
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault9" id="radio">
                <label class="form-check-label" for="q1o2">
                    2
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault9" id="radio">
                <label class="form-check-label" for="q1o3">
                    3
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault9" id="radio">
                <label class="form-check-label" for="q1o4">
                    4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault9" id="radio">
                <label class="form-check-label" for="q1o5">
                    5
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">Are you satisfied with the student discipline in the college</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault17" id="radio">
                    <label class="form-check-label" for="q1o1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault17" id="radio">
                    <label class="form-check-label" for="q1o2">
                        No
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Does your ward / Institute regularly informs you about performance</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault17" id="radio">
                    <label class="form-check-label" for="q1o1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault17" id="radio">
                    <label class="form-check-label" for="q1o2">
                        No
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Do the faculty inform you about your ward regularity</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault17" id="radio">
                    <label class="form-check-label" for="q1o1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault17" id="radio">
                    <label class="form-check-label" for="q1o2">
                        No
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Are you satisfied with the examination system adopted in the Institute</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault17" id="radio">
                    <label class="form-check-label" for="q1o1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault17" id="radio">
                    <label class="form-check-label" for="q1o2">
                        No
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Are you satisfied with the quality of teaching offered by the college</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault17" id="radio">
                    <label class="form-check-label" for="q1o1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault17" id="radio">
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
                <textarea class="form-control" type="text" name="" id="" rows="5"></textarea>
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