<?php
  
  //authenticate user, start a session
  session_start();

  //check for login
  if(!(isset($_SESSION['login']) && $_SESSION['login']!='')) {

    //if no login redirect to login screen
    header("Location: Login.php");

  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>JessicaCabral.com</title>

    <!-- Bootstrap -->
    <link href="src/css/bootstrap.min.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>

      html, body {
        height: 100%;

      }

      .container {
        background-image: url("src/img/portfoliobg.jpg");
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        padding-top: 0px;
        padding-left: 30px;
        padding-right: 30px;
      }

      .row {
        padding-top: 30px;
        padding-left: 5%;
      }
      
      .center {
        text-align: center;
      }

      .white {
        color: white;
      }

      p {
        padding-top: 15px;
        padding-bottom: 15px;
      }

      button {
        margin-top: 20px;
      }

      .alert {
        margin-top:20px;
        display:none;
      }

      #headshot {
        background-image: url("src/img/anonymous_headshot.png");
        width: 600px;
        height: 568px;
        max-width: 300px;
        max-height: 284px;
        background-size: contain;
        background-position: center;
        padding-top: 0px;
      }

      #aboutMe {
        width: 100%;
        height: 500px;
        
      }

      #testimonials {
        width: 100%;
        height: 500px;
        
      }

      #press {
        width: 100%;
        height: 500px;
        
      }
    </style>

  </head>

  <body data-spy="scroll" data-target=".navbar-collapse">

    <div class="navbar navbar-default navbar-fixed-top">
      <div class="navContainer">
        <div class="navbar-header">
          <a href="" class="navbar-brand">JessicaCabral.com</a>

          <button type="button" class="navbar-toggle" data-toggle="collapse"  data-target=".navbar-collapse">

            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#aboutMe">About Me</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#div2">Weddings</a></li>
            <li><a href="#press">Press</a></li>
            <li id="Logout"><a href="">Logout</a></li>
          </ul>

        </div>

      </div>
    
    </div>
    

    

    <div class="container">

      <div class="row">

        <div class="row">

          <div class="col-md-6 col-md-offset-3 center">

            <h1 class="center">Jessica Cabral: Event Planner</h1>

            <p class="lead center"></p>
            
          </div>

          <div class="row" id="aboutMe">
            <h2>A Little Bit About Me.</h2>
          </div>
          <div class="row" id="testimonials">
            <h2>Testimonials</h2>
          </div>
          <div class="row" id="press">
            <h2>Press</h2>
          </div>

        </div>

      </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="src/js/bootstrap.min.js"></script>
    <script>

      $("#Logout").click(function(event) {

        event.preventDefault();

        <?php
            // remove all session variables
            session_unset(); 

            // destroy the session 
            session_destroy(); 
        ?>

        window.location.href = "Login.php";

      });
    

    </script>

  </body>
</html>