<?php
include "config.php";
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['modify'])){
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
        $q19 = $_POST['119'];
        $q20 = $_POST['120'];
        $q21 = $_POST['121'];
        $q22 = $_POST['122'];
        $q23 = $_POST['123'];
        $q24 = $_POST['124'];
        $q25 = $_POST['125'];
        $q26 = $_POST['126'];

        /*$qsnsd=array("$q1","$q2","$q3","$q4","$q5","$q6","$q7","$q8","$q9","$q10","$q11","$q12","$q13","$q14","$q15","$q16","$q17","$q18","$q19","$q20","$q21","$q22","$q23","$q24","$q25","$q26");
        $qsnsi=array(101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126);
        foreach($qsnsi as $qi){
            foreach($qsnsd as $qd){
                
            }
        }*/

        $query1 = "update questions set q_desc='$q1' where q_id='101'";
        $result1 = mysqli_query($con, $query1);

        $query2 = "update questions set q_desc='$q2' where q_id='102'";
        $result2 = mysqli_query($con, $query2);

        $query3 = "update questions set q_desc='$q3' where q_id='103'";
        $result3 = mysqli_query($con, $query3);

        $query4 = "update questions set q_desc='$q4' where q_id='104'";
        $result4 = mysqli_query($con, $query4);

        $query5 = "update questions set q_desc='$q5' where q_id='105'";
        $result5 = mysqli_query($con, $query5);

        $query6 = "update questions set q_desc='$q6' where q_id='106'";
        $result6 = mysqli_query($con, $query6);

        $query7 = "update questions set q_desc='$q7' where q_id='107'";
        $result7 = mysqli_query($con, $query7);

        $query8 = "update questions set q_desc='$q8' where q_id='108'";
        $result8 = mysqli_query($con, $query8);

        $query9 = "update questions set q_desc='$q9' where q_id='109'";
        $result9 = mysqli_query($con, $query9);

        $query10 = "update questions set q_desc='$q10' where q_id='110'";
        $result10 = mysqli_query($con, $query10);

        $query11 = "update questions set q_desc='$q11' where q_id='111'";
        $result11 = mysqli_query($con, $query11);

        $query12 = "update questions set q_desc='$q12' where q_id='112'";
        $result12 = mysqli_query($con, $query12);

        $query13 = "update questions set q_desc='$q13' where q_id='113'";
        $result13 = mysqli_query($con, $query13);

        $query14 = "update questions set q_desc='$q14' where q_id='114'";
        $result14 = mysqli_query($con, $query14);

        $query15 = "update questions set q_desc='$q15' where q_id='115'";
        $result15 = mysqli_query($con, $query15);

        $query16 = "update questions set q_desc='$q16' where q_id='116'";
        $result16 = mysqli_query($con, $query16);

        $query17 = "update questions set q_desc='$q17' where q_id='117'";
        $result17 = mysqli_query($con, $query17);

        $query18 = "update questions set q_desc='$q18' where q_id='118'";
        $result18 = mysqli_query($con, $query18);

        $query19 = "update questions set q_desc='$q19' where q_id='119'";
        $result19 = mysqli_query($con, $query19);

        $query20 = "update questions set q_desc='$q20' where q_id='120'";
        $result20 = mysqli_query($con, $query20);

        $query21 = "update questions set q_desc='$q21' where q_id='121'";
        $result21 = mysqli_query($con, $query21);

        $query22 = "update questions set q_desc='$q22' where q_id='122'";
        $result22 = mysqli_query($con, $query22);

        $query23 = "update questions set q_desc='$q23' where q_id='123'";
        $result23 = mysqli_query($con, $query23);

        $query24 = "update questions set q_desc='$q24' where q_id='124'";
        $result24 = mysqli_query($con, $query24);

        $query25 = "update questions set q_desc='$q25' where q_id='125'";
        $result25 = mysqli_query($con, $query25);

        $query26 = "update questions set q_desc='$q26' where q_id='126'";
        $result26 = mysqli_query($con, $query26);
        
        if (!$result26) {
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
                    title: \'Updated\',
                    text: \'Form Updated Successfully!!\',
                    })
                    };
                </script>';
                echo '<meta http-equiv="refresh" content="2.5; URL=\'facFeedMod.php\'" />';

    }
}
}

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
            <h1 class="display-4">Modify Faculty Feedback Form</h1>
            <br><br>
        </center>
    </div>

    <form method="post" action="">
        <div class="mb-3">
            <b>
                <?php
                            $query = "select * from questions where f_id='FM101'";
                            $res = mysqli_query($con, $query);
                            $qn=0;
                            while ($row = mysqli_fetch_array($res)) {
                            $up = $row['q_id'];
                            $update = "update questions set q_desc='++$qn'";
                                echo '<div>
                                <input class="form-control-plaintext" type="text" name="'. $row['q_id'] . '"
                                        style="border-color:grey;  border-style: solid;padding:10px" value="'. $row['q_desc'] .'" >
                                        <br>
                                        <br>
                                    </div>';
                            }
                            ?>

                <br>
            </b>
            <br>
            <br>
            <button type="submit" class="btn btn-danger" name="modify" id="submit">Modify</button>
    </form>
</body>
<script>
</script>

</html>

<body>

</body>

</html>