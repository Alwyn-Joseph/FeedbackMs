<?php
include("config.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name =$_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['comments'];

  if($_POST['comments']!=NULL){

  $notifyQuery = "insert into admin_notifications(u_name,u_id,u_message) values('$name','$email','$message')";
  $passQueryToSql =mysqli_query($con, $notifyQuery);
  if(!$passQueryToSql){
    echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
                        </script>
                        <script>
                            window.onload = function swal() {
                                Swal.fire({
                                    icon: \'error\',
                            title: \'Oops...\',
                            text: \'An error occured\',
                    })
                            };
                        </script>';
                        echo '<meta http-equiv="refresh" content="1.5; URL=\'Home.php\'" />';
  }else{
    echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
                        </script>
                        <script>
                            window.onload = function swal() {
                                Swal.fire({
                                    icon: \'success\',
                            title: \'Sent\',
                            text: \'Your message is bieng reviewed!\',
                    })
                            };
                        </script>';
                        echo '<meta http-equiv="refresh" content="1.5; URL=\'Home.php\'" />';
  }
}else{
  echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
  </script>
  <script>
      window.onload = function swal() {
          Swal.fire({
              icon: \'info\',
      title: \'Oops...\',
      text: \'Your message cannot be empty!\',
})
      };
  </script>';
} 

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Alvas Feedback System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>    html{
      scroll-behavior: smooth;
    }

    body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
    }

    h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
    }

    h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
    }

    .jumbotron {
      background-image: url('images/Alvas1.jpg');
      background-repeat:round;
      height: 100%;
      width: 100%;
      color: #fff;
      padding: 100px 25px;
      font-family: 'Titillium Web', sans-serif;
      font-weight: bold;
      color: rgb(255, 255, 255);
    }

    img{
      max-width:fit-content
    }

    .container-fluid {
      padding: 60px 50px;
    }

    .bg-grey {
      background-color: #f6f6f6;
    }

    .logo-small {
      color: #c51e42;
      font-size: 50px;
    }

    .logo {
      color: #c51e42;
      font-size: 200px;
    }

    .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
    }

    .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
    }

    .carousel-control.right,
    .carousel-control.left {
      background-image: none;
      color: #c51e42;
    }

    .carousel-indicators li {
      border-color: #c51e42;
    }

    .carousel-indicators li.active {
      background-color: #c51e42;
    }

    .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
    }

    .item span {
      font-style: normal;
    }

    .panel {
      border: 1px solid #c51e42;
      border-radius: 0 !important;
      transition: box-shadow 0.5s;
    }

    .panel:hover {
      box-shadow: 5px 0px 40px rgba(0, 0, 0, .2);
    }

    .panel-footer .btn:hover {
      border: 1px solid #c51e42;
      background-color: #fff !important;
      color: #c51e42;
    }

    .panel-heading {
      color: #fff !important;
      background-color: #c51e42 !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
    }

    .panel-footer {
      background-color: white !important;
    }

    .panel-footer h3 {
      font-size: 32px;
    }

    .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
    }

    .panel-footer .btn {
      margin: 15px 0;
      background-color: #c51e42;
      color: #fff;
    }

    .navbar {
      margin-bottom: 0;
      background-color: #c51e42;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      /*font-family: Montserrat, sans-serif;*/
      font-family: 'Titillium Web', sans-serif;
    }

    .navbar li a,
    .navbar .navbar-brand {
      color: #fff !important;
    }

    .navbar-nav li a:hover,
    .navbar-nav li.active a {
      color: #c51e42 !important;
      background-color: #fff !important;
    }

    .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
    }

    footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #c51e42;
    }

    .slideanim {
      visibility:visible;
    }

    .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
    }

    #userType {
      text-decoration: none;
    }

    
            /* width */
            ::-webkit-scrollbar {
        width: 5px;
        }

        ::-webkit-scrollbar:hover {
        width: 7px;
        }

        /* Track*/
        ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 5px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
        background: rgb(128, 128, 128);
        border-radius: 5px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
        background: #666666;
        }

        .modal-login {
	color: #636363;
	width: 350px;
}
.modal-login .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-login .modal-header {

	border-bottom: none;
	position: relative;
	justify-content: center;
}
.modal-login h4 {
	text-align: center;
	font-size: 26px;
}
.modal-login  .form-group {
	position: relative;
}
.modal-login i {
	position: absolute;
	left: 13px;
	top: 11px;
	font-size: 18px;
}
.modal-login .form-control {
	padding-left: 40px;
}
.modal-login .form-control:focus {
	border-color: #00ce81;
}
.modal-login .form-control, .modal-login .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-login .hint-text {
	text-align: center;
	padding-top: 10px;
}
.modal-login .close {
	position: absolute;
	top: 5px;
	right: -5px;
  animation-name: closeSlide;
      animation-duration: 0.7s;
}
.modal-login .btn, .modal-login .btn:active {	
	border: none;
	background: #00ce81 !important;
	line-height: normal;
  animation-name: loginSlide;
      animation-duration: 0.7s;
}
.modal-login .btn:hover, .modal-login .btn:focus {
	background: #00bf78 !important;
  border: none;

}
.modal-login .modal-footer {
	background: #ecf0f1;
	border-color: #dee4e7;
	text-align: center;
	margin: 0 -20px -20px;
	border-radius: 5px;
	font-size: 13px;
	justify-content: center;
}
.modal-login .modal-footer a {
	color: #999;
}

    @keyframes slide {
      0% {
        opacity: 0;
        transform: translateY(70%);
      }

      100% {
        opacity: 1;
        transform: translateY(0%);
      }
    }

    @keyframes loginSlide {
      0% {
        opacity: 0;
        transform: translateY(70%);
      }

      100% {
        opacity: 1;
        transform: translateY(0%);
      }
    }

    @keyframes closeSlide {
      0% {
        opacity: 0;
        transform: translateX(70%);
      }

      100% {
        opacity: 0.5;
        transform: translateX(0%);
      }
    }



    @-webkit-keyframes slide {
      0% {
        opacity: 0;
        -webkit-transform: translateY(70%);
      }

      100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
      }
    }

    @media screen and (max-width: 768px) {
      .col-sm-4 {
        text-align: center;
        margin: 25px 0;
      }

      .btn-lg {
        width: 100%;
        margin-bottom: 35px;
      }
    }

    @media screen and (max-width: 480px) {
      .logo {
        font-size: 150px;
      }
    }</style>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#myPage"><b>AIET Feedback System</b></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about"><b>ABOUT</b></a></li>
          <li><a href="#login"><b>LOGIN</b></a></li>
          <li><a href="#contact"><b>CONTACT</b></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="jumbotron text-center">
    <h1>Alva's Institute of Engineering & Technology</h1>
    
      
    <p>A Unit of Alva's Education Foundation(R), Moodubidire<br>(Affilliated to VTU, Belgaum, Approved by AICTE, New Delhi, Recognized by Govt. of Karnataka)</p>
  <br><br><br><br><br><br><br><br><br><br>
  </div>
 

  <!-- Container (About Section) -->
  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h2>About Alva's Feedback System</h2><br>
        <h4>This is a feedback system made for the interaction between the institution and students, faculties, parents, employers etc. </h4>
        <p>The objective of the comprehensive feedback mechanism
          is to achieve quality enhancement. The comprehensive feedback
          involves collection of feedback from all the stakeholders, which helps
          in monitoring the academic content and processes thereby achieving quality
          sustenance and progressively quality enhancement.In a world of exponential change,
          it is a necessary imperative to every organisation and institution to be responsive and dynamic.
        </p>
        <br>
        <br>
      </div>
    </div>
  </div>
  
  <!-- Modal HTML -->
  <div id="myModal1" class="modal fade">
    <div class="modal-dialog modal-login">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Faculty Login</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <form action="facultylogin.php" method="post">
            <div class="form-group">
              
              <input type="text" name="id" class="form-control" placeholder="Enter your User Id" required="required">
            </div>
            <div class="form-group">
              
              <input type="Password" name="pwd" class="form-control" placeholder="Enter your Password" required="required">					
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-success btn-block btn-lg" name="Faculty_Login" value="Login">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="myModal2" class="modal fade">
    <div class="modal-dialog modal-login">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Student Login</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <form action="studentlogin.php" method="post">
            <div class="form-group">
              
              <input type="text" class="form-control" name="id" placeholder="Enter your Student Id" required="required">
            </div>
            <div class="form-group">
              
              <input type="password" class="form-control" name="pwd" placeholder="Enter your Password" required="required">					
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-success btn-block btn-lg" name="Student_Login" value="Login">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="myModal3" class="modal fade">
    <div class="modal-dialog modal-login">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Employer Login</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <form action="employerlogin.php" method="post">
            <div class="form-group">
              
              <input type="text" class="form-control" name="id" placeholder="Enter your Email" required="required">
            </div>
            <div class="form-group">
              
              <input type="password" class="form-control" name="pwd" placeholder="Enter your Password" required="required">					
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-success btn-block btn-lg" name="Employer_Login" value="Login">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="myModal4" class="modal fade">
    <div class="modal-dialog modal-login">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Parent Login</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <form action="parentLogin.php" method="post">
            <div class="form-group">
              
              <input type="text" class="form-control" name="id" placeholder="Enter your ward's Student Id" required="required">
            </div>
            <div class="form-group">
              
              <input type="text" class="form-control" name="mbl" placeholder="Enter your Mobile Number" required="required">					
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-success btn-block btn-lg" name="Parent_Login" value="Login">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="myModal5" class="modal fade">
    <div class="modal-dialog modal-login">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Alumni Login</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <form action="alumniLogin.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="id" placeholder="Enter your Student Id" required="required">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="pwd" placeholder="Enter your Password" required="required">					
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-success btn-block btn-lg" name="Alumni_Login" value="Login">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


    <!-- Container (Services Section) -->
    <div id="login" class="container-fluid text-center">
    <h2>Select User Type</h2>
    <br>
    <div class="row slideanim">
      <div class="col-sm-4">
        <a id="userType" href="#myModal1" class="trigger-btn" data-toggle="modal">
          <span class="glyphicon glyphicon-user logo-small"></span>
          <h4>Faculty</h4>
        </a>
      </div>
      <div class="col-sm-4">
        <a id="userType" href="#myModal2" class="trigger-btn" data-toggle="modal">
          <span class="glyphicon glyphicon-th-list logo-small"></span>
          <h4>Student</h4>
        </a>
      </div>
      <div class="col-sm-4">
        <a id="userType" href="#myModal3" class="trigger-btn" data-toggle="modal">
          <span class="glyphicon glyphicon-lock logo-small"></span>
          <h4>Employer</h4>
        </a>
      </div>
    </div>
    <br><br>
    <div class="row slideanim">
      <div class="col-sm-4">
        <a id="userType" href="#myModal4" class="trigger-btn" data-toggle="modal">
          <span class="glyphicon glyphicon-user logo-small"></span>
          <h4>Parent</h4>
        </a>
      </div>
      <div class="col-sm-4">
        <a id="userType" href="#myModal5" class="trigger-btn" data-toggle="modal">

        <span class="	glyphicon glyphicon-star logo-small"></span>
          <h4>Alumni</h4>
        </a>
      </div>
      <div class="col-sm-4">
        <a id="userType" href="adminlogin.php" class="trigger-btn">
          <span class="glyphicon glyphicon-file logo-small"></span>
          <h4 style="color:#303030;">Admin</h4>
        </a>
      </div>
    </div>
  </div>


  <!-- Container (Contact Section) -->
  <div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">CONTACT</h2>
    <div class="row">
      <div class="col-sm-5">
        <p>Contact us and we'll get back to you within 24 hours.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> Mijar, DK</p>
        <p><span class="glyphicon glyphicon-phone"></span> +91 9353891095</p>
        <p><span class="glyphicon glyphicon-envelope"></span> alvas@gmail.com</p>
      </div>
      <div class="col-sm-7 slideanim">
        <div class="row">
          <form action="" method="post">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" pattern={1,170} placeholder="Comment" rows="5" required></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Send</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Image of location/map -->
  <footer class="container-fluid text-center">
    <a href="#myPage" title="To Top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Copyright©2021 Alvas Education Foundation, All Rights Reserved.</p>
  </footer>

  

</body>

</html>