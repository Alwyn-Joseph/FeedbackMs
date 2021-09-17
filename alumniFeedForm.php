<?php
include "config.php";
session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['modify'])){
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

        /*$qsnsd=array("$q1","$q2","$q3","$q4","$q5","$q6","$q7","$q8","$q9","$q10","$q11","$q12","$q13","$q14","$q15","$q16","$q17","$q18","$q19","$q20","$q21","$q22","$q23","$q24","$q25","$q26");
        $qsnsi=array(101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126);
        foreach($qsnsi as $qi){
            foreach($qsnsd as $qd){
                
            }
        }*/

        $query1 = "update questions set q_desc='$q1' where q_id='168'";
        $result1 = mysqli_query($con, $query1);

        $query2 = "update questions set q_desc='$q2' where q_id='169'";
        $result2 = mysqli_query($con, $query2);

        $query3 = "update questions set q_desc='$q3' where q_id='170'";
        $result3 = mysqli_query($con, $query3);

        $query4 = "update questions set q_desc='$q4' where q_id='171'";
        $result4 = mysqli_query($con, $query4);

        $query5 = "update questions set q_desc='$q5' where q_id='172'";
        $result5 = mysqli_query($con, $query5);

        $query6 = "update questions set q_desc='$q6' where q_id='173'";
        $result6 = mysqli_query($con, $query6);

        $query7 = "update questions set q_desc='$q7' where q_id='174'";
        $result7 = mysqli_query($con, $query7);

        $query8 = "update questions set q_desc='$q8' where q_id='175'";
        $result8 = mysqli_query($con, $query8);

        $query9 = "update questions set q_desc='$q9' where q_id='176'";
        $result9 = mysqli_query($con, $query9);

        $query10 = "update questions set q_desc='$q10' where q_id='177'";
        $result10 = mysqli_query($con, $query10);

        $query11 = "update questions set q_desc='$q11' where q_id='178'";
        $result11 = mysqli_query($con, $query11);

        $query12 = "update questions set q_desc='$q12' where q_id='179'";
        $result12 = mysqli_query($con, $query12);

        $query13 = "update questions set q_desc='$q13' where q_id='180'";
        $result13 = mysqli_query($con, $query13);

        $query14 = "update questions set q_desc='$q14' where q_id='181'";
        $result14 = mysqli_query($con, $query14);

        $query15 = "update questions set q_desc='$q15' where q_id='182'";
        $result15 = mysqli_query($con, $query15);

        $query16 = "update questions set q_desc='$q16' where q_id='183'";
        $result16 = mysqli_query($con, $query16);

        $query17 = "update questions set q_desc='$q17' where q_id='184'";
        $result17 = mysqli_query($con, $query17);

        $query18 = "update questions set q_desc='$q18' where q_id='185'";
        $result18 = mysqli_query($con, $query18);

        $query19 = "update questions set q_desc='$q19' where q_id='186'";
        $result19 = mysqli_query($con, $query19);

        $query20 = "update questions set q_desc='$q20' where q_id='187'";
        $result20 = mysqli_query($con, $query20);

        $query21 = "update questions set q_desc='$q21' where q_id='188'";
        $result21 = mysqli_query($con, $query21);

        $query22 = "update questions set q_desc='$q22' where q_id='189'";
        $result22 = mysqli_query($con, $query22);

        $query23 = "update questions set q_desc='$q23' where q_id='190'";
        $result23 = mysqli_query($con, $query23);

        $query24 = "update questions set q_desc='$q24' where q_id='191'";
        $result24 = mysqli_query($con, $query24);

        $query25 = "update questions set q_desc='$q25' where q_id='192'";
        $result25 = mysqli_query($con, $query25);

        $query26 = "update questions set q_desc='$q26' where q_id='193'";
        $result26 = mysqli_query($con, $query26);
        
        $query27 = "update questions set q_desc='$q27' where q_id='194'";
        $result27 = mysqli_query($con, $query27);
        
        $query28 = "update questions set q_desc='$q28' where q_id='195'";
        $result26 = mysqli_query($con, $query28);

        $query29 = "update questions set q_desc='$q29' where q_id='196'";
        $result29 = mysqli_query($con, $query29);

        $query30 = "update questions set q_desc='$q30' where q_id='197'";
        $result30 = mysqli_query($con, $query30);

        $query31 = "update questions set q_desc='$q31' where q_id='198'";
        $result31 = mysqli_query($con, $query31);

        
        if (!$result31) {
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
                echo '<meta http-equiv="refresh" content="2.5; URL=\'alumniFeedForm.php\'" />';

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
    <title>Alumni Form</title>
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
            <h1 class="display-4">Modify Alumni Feedback Form</h1>
            <br><br>
        </center>
    </div>

    <form method="post" action="">
        <div class="mb-3">
            <b>
                <?php
                            $query = "select * from questions where f_id='FM105'";
                            $res = mysqli_query($con, $query);
                            $qn=0;
                            while ($row = mysqli_fetch_array($res)) {
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