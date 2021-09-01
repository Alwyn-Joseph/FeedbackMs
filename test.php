<?php
include "config.php";

session_start();

if (isset($_SESSION['login_user_faculty'])) {
    $userID = $_SESSION['login_user_faculty'];
    $query = "select avg(q8) from faculty_feedback where f_id='$userID'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    $avg = (round($row['avg(q8)'])) * 2;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
    <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
    <style>
    * {
        font-family: 'Ubuntu', sans-serif;
    }

    a:hover {
        background-color: rgb(95, 95, 95);

        border-radius: 4px;

    }

    #head:hover {
        background-color: black;
    }
    </style>

    <title>Student Dashboard</title>
</head>

<body>

    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

    <script>
    var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = [
        "#b91d47",
        "#00aba9",
        "#2b5797",
        "#e8c3b9",
        "#1e7145"
    ];

    new Chart("myChart", {
        type: "doughnut",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            title: {
                display: true,
                text: "World Wide Wine Production 2018"
            }
        }
    });
    </script>

</body>

</html>

<?php
} else {
    echo "<script>location.href='facultylogin.php'</script>";
}
?>