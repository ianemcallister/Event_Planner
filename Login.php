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
        background-image: url("src/img/background.jpg");
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        padding-top: 0px;
      }

      .row {
        padding-top: 100px;
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
            <!--<li class="active"><a href="#div1">Page 1</a></li>
            <li><a href="#div2">Page 2</a></li>
            <li><a href="#div3">Page 3</a></li>-->
          </ul>

        </div>

      </div>
    
    </div>
    

    

    <div class="container">

      <div class="row">

          <div class="col-md-6 col-md-offset-3 center">

              <h1 class="center white">Login</h1>

              <p class="lead center white">Enter your Login Information</p>

              <form>
                <div class="form-group">
                  <input type="text" class="form-control" name="username" id="username" placeholder="Eg. jCabral"/>
                  <br>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Secret"/>
                </div>

                <button id="Login" class="btn btn-success btn-lrg">Login</button>
              </form>

              <div id="success" class="alert alert-success">Success!</div>

              <div id="fail" class="alert alert-danger">No matching username or password. Please try again</div>

              <div id="noCity" class="alert alert-danger">Nothing was entered!</div>

          </div>

          

        </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script>

      $("#Login").click(function(event) {

        event.preventDefault();

        //hide all previous alert
        $(".alert").hide();

        var username = $("#username").val();
        var password = $("#password").val();

        var loginSuccess = $.post("src/php/login.php", { username: username, password: password }, function(data) {

          if(data=="") {
            window.location.href = "index.php";
          } else {
            $("#fail").html(data).fadeIn();
          }


        });


        //alert(JSON.stringify(loginSuccess, null, 4));

      });

    </script>

  </body>
</html>