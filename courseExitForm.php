<?php
include "config.php";
session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['modify'])){
        $q1 = $_POST['216'];
        $q2 = $_POST['217'];
        $q3 = $_POST['218'];
        $q4 = $_POST['219'];
        $q5 = $_POST['220'];
        $q6 = $_POST['221'];
        

        /*$qsnsd=array("$q1","$q2","$q3","$q4","$q5","$q6","$q7","$q8","$q9","$q10","$q11","$q12","$q13","$q14","$q15","$q16","$q17","$q18","$q19","$q20","$q21","$q22","$q23","$q24","$q25","$q26");
        $qsnsi=array(101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126);
        foreach($qsnsi as $qi){
            foreach($qsnsd as $qd){
                
            }
        }*/

        $query1 = "update questions set q_desc='$q1' where q_id='216'";
        $result1 = mysqli_query($con, $query1);

        $query2 = "update questions set q_desc='$q2' where q_id='217'";
        $result2 = mysqli_query($con, $query2);

        $query3 = "update questions set q_desc='$q3' where q_id='218'";
        $result3 = mysqli_query($con, $query3);

        $query4 = "update questions set q_desc='$q4' where q_id='219'";
        $result4 = mysqli_query($con, $query4);

        $query5 = "update questions set q_desc='$q5' where q_id='220'";
        $result5 = mysqli_query($con, $query5);

        $query6 = "update questions set q_desc='$q6' where q_id='221'";
        $result6 = mysqli_query($con, $query6);

        if (!$result6) {
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
                echo '<meta http-equiv="refresh" content="2.5; URL=\'courseExitForm.php\'" />';

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
            <h1 class="display-4">Modify Course Exit Form</h1>
            <br><br>
        </center>
    </div>

    <form method="post" action="">
        <div class="mb-3">
            <b>
                <?php
                            $query = "select * from questions where f_id='FM110'";
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