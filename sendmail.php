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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>


<body onload="sendEmail()">
    <div class="card text-center">
        <br><br>
        <div class="d-flex justify-content-center">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="card-header">
            Sending...
        </div>
        <div class="card-body">
            <h5 class="card-title">We are processing your request</h5>
        </div>
        <div class="card-footer text-muted">
            Checking credentials
            <div class="spinner-grow spinner-grow-sm" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>

    <?php include("config.php");
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $e_id = $_POST['e_id'];

        $sql = "SELECT * FROM employer WHERE e_id = '$e_id'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);


        $e_mail = $row["e_mail"];

        $e_name = $row["e_name"];
    }
    ?>
    <script>
    function sendEmail() {
        Email.send({
            Host: "smtp.gmail.com",
            Username: "amialwyn@gmail.com",
            Password: "ForDevelopment",
            To: '<?php echo "$e_mail"; ?>',
            From: "amialwyn@gmail.com",
            Subject: "Testing",
            Body: 'Dear employer,<br><br><br>Thank you for interviewing our students! We’d love to hear what you think of our students<br>Your feedback will help us determine what areas we have to improve and how we can make our students better for you.<br><br><br>Use the below credentials<br>Your Username: <?php echo "$e_mail"; ?><br>Your Password: 1234<br><br>Use this link the below link to provide your feedback,<br>http://localhost/feedbackms/FeedbackMs/employerlogin.php<br><br><br><br>Thanks and Regards,<br><br><br>Alvas Education Foundation'
        }).then(
            window.onload = function swal() {
                Swal.fire({
                    icon: 'success',
                    title: 'Sent',
                    text: 'Request has been Sent!',
                })
            }
        );
    }
    </script>
</body>

</html>
<?php
echo '<meta http-equiv="refresh" content="3.5; URL=\'employer.php\'" />';