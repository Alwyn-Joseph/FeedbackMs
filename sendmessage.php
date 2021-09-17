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
    <script src="index.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
</head>

<body>


    <?php 
    include("config.php");
    session_start();

    if (isset($_SESSION['login_user_faculty'])) {



        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $message = $_POST['message'];
            $userID = $_SESSION['login_user_faculty'];

            if ($message != null) {

                $sql = "insert into admin_notifications(u_id,u_message) values('$userID','$message')";
                $result = mysqli_query($con, $sql);

                if (!$result) {
                    echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
                        </script><script>window.onload=function swal() {
                    Swal.fire( {
                            icon: \'error\',
                            title: \'Oops...\',
                            text: \'An error occured\',
                        }

                    )
                }

                ;
                </script>';
                    echo '<meta http-equiv="refresh" content="1.5; URL=\'facultydash.php\'" />';
                } else {
                    echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
                        </script><script>window.onload=function swal() {
                    Swal.fire( {
                            icon: \'success\',
                            title: \'Sent\',
                            text: \'Message Sent Successfully !\',
                        }

                    )
                }

                ;
                </script>';
                    echo '<meta http-equiv="refresh" content="1.5; URL=\'facultydash.php\'" />';
                }
            } else {
                echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
                        </script><script>window.onload=function swal() {
                    Swal.fire( {
                            icon: \'error\',
                            title: \'\',
                            text: \'An empty message, can cause problems\',
                        }

                    )
                }

                ;
                </script>';
                echo '<meta http-equiv="refresh" content="1.5; URL=\'facultydash.php\'" />';
            }
        }
    }
    ?>
</body>

</html>