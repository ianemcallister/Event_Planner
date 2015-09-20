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
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JessicaCabral.com: Morsel &amp James' Wedding</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">


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
        width: 100%;
        height: 100%;
        padding-top: 0px;
      }

      .row {
        
      }

      .content {
        padding-top: 5px;
        padding-left: 5%;
        padding-right: 5%;
      }
      
      .header {
        background-image: url("../img/portfoliobg.jpg");
        padding-top: 50px;
        height: 500px;
        background-size: cover;
        background-position: center;
      }

      .gallary {
        height: 575px;
        background-color: blue;
      }

      .testimonials {
        height: 500px;
        background-color: green;
      }

      .story {
        height: 500px;
        background-color: yellow;
      }

      .team {
        height: 500px;
        background-color: red;
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
    <!--The navbar at the top -->
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
            <li><a href="#aboutMe">About Me</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li class="active"><a href="#div2">Events</a></li>
            <li><a href="#press">Press</a></li>
            <li id="Logout"><a href="">Logout</a></li>
          </ul>

        </div>

      </div>
    
    </div>

    <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="../jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="../js/jssor.js"></script>
    <script type="text/javascript" src="../js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $UISearchMode: 0,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $Loop: 1,                                       //[Optional] Enable loop(circular) of carousel or not, 0: stop, 1: loop, 2 rewind, default value is 1
                    $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 6,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 253,                          //[Optional] The offset position to park thumbnail,

                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 6                                       //[Optional] Steps to go for each navigation request, default value is 1
                    }
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 720));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    
    <div class="container">
      <div class="row center header" id="Header">
        <h1>Morsel &amp James' Wedding</h1>
      </div>
      <div class="row gallary" id="">
        <div class="content">
          <h2>Gallary</h2>
            <!-- Jssor Slider Begin -->
            <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
             <div id="slider1_container" style="position: relative; width: 720px; height: 480px; overflow: hidden;">

              <!-- Loading Screen -->
                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
              <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
              </div>
              </div>

              <!-- Slides Container -->
              <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 720px; height: 480px;
                overflow: hidden;">
            <div>
                <img u="image" src="../img/jamesMorsel/01.jpg" />
                <img u="thumb" src="../img/jamesMorsel/thumb-01.jpg" />
            </div>
            <div>
                <img u="image" src="../img/jamesMorsel/02.jpg" />
                <img u="thumb" src="../img/jamesMorsel/thumb-02.jpg" />
            </div>
            <div>
                <img u="image" src="../img/jamesMorsel/03.jpg" />
                <img u="thumb" src="../img/jamesMorsel/thumb-03.jpg" />
            </div>
            <div>
                <img u="image" src="../img/jamesMorsel/04.jpg" />
                <img u="thumb" src="../img/jamesMorsel/thumb-04.jpg" />
            </div>
            <div>
                <img u="image" src="../img/jamesMorsel/05.jpg" />
                <img u="thumb" src="../img/jamesMorsel/thumb-05.jpg" />
            </div>
            <div>
                <img u="image" src="../img/jamesMorsel/06.jpg" />
                <img u="thumb" src="../img/jamesMorsel/thumb-06.jpg" />
            </div>
            <div>
                <img u="image" src="../img/jamesMorsel/07.jpg" />
                <img u="thumb" src="../img/jamesMorsel/thumb-07.jpg" />
            </div>
            <div>
                <img u="image" src="../img/jamesMorsel/08.jpg" />
                <img u="thumb" src="../img/jamesMorsel/thumb-08.jpg" />
            </div>
            <div>
                <img u="image" src="../img/jamesMorsel/09.jpg" />
                <img u="thumb" src="../img/jamesMorsel/thumb-09.jpg" />
            </div>
            <div>
                <img u="image" src="../img/jamesMorsel/10.jpg" />
                <img u="thumb" src="../img/jamesMorsel/thumb-10.jpg" />
            </div>

            <div>
                <img u="image" src="../img/jamesMorsel/11.jpg" />
                <img u="thumb" src="../img/jamesMorsel/thumb-11.jpg" />
            </div>
            <div>
                <img u="image" src="../img/jamesMorsel/12.jpg" />
                <img u="thumb" src="../img/jamesMorsel/thumb-12.jpg" />
            </div>
            <div>
                <img u="image" src="../img/jamesMorsel/13.jpg" />
                <img u="thumb" src="../img/jamesMorsel/thumb-13.jpg" />
            </div>
            <div>
                <img u="image" src="../img/jamesMorsel/14.jpg" />
                <img u="thumb" src="../img/jamesMorsel/thumb-14.jpg" />
            </div>
        </div>
        <!--#region Thumbnail Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->
        <style>
            /* jssor slider thumbnail navigator skin 07 css */
            /*
            .jssort07 .p            (normal)
            .jssort07 .p:hover      (normal mouseover)
            .jssort07 .pav          (active)
            .jssort07 .pav:hover    (active mouseover)
            .jssort07 .pdn          (mousedown)
            */
            .jssort07 {
                position: absolute;
                /* size of thumbnail navigator container */
                width: 800px;
                height: 100px;
            }

                .jssort07 .p {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 99px;
                    height: 66px;
                }

                .jssort07 .i {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 99px;
                    height: 66px;
                    filter: alpha(opacity=80);
                    opacity: .8;
                }

                .jssort07 .p:hover .i, .jssort07 .pav .i {
                    filter: alpha(opacity=100);
                    opacity: 1;
                }

                .jssort07 .o {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 97px;
                    height: 64px;
                    border: 1px solid #000;
                    box-sizing: content-box;
                    transition: border-color .6s;
                    -moz-transition: border-color .6s;
                    -webkit-transition: border-color .6s;
                    -o-transition: border-color .6s;
                }

                .jssort07 .pav .o {
                    border-color: #0099ff;
                }

                .jssort07 .p:hover .o {
                    border-color: #fff;
                    transition: none;
                    -moz-transition: none;
                    -webkit-transition: none;
                    -o-transition: none;
                }

                .jssort07 .p.pdn .o {
                    border-color: #0099ff;
                }

                * html .jssort07 .o {
                    /* ie quirks mode adjust */
                    width /**/: 99px;
                    height /**/: 66px;
                }
        </style>
        <!-- thumbnail navigator container -->
        <div u="thumbnavigator" class="jssort07" style="width: 720px; height: 100px; left: 0px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides" style="cursor: default;">
                <div u="prototype" class="p">
                    <div u="thumbnailtemplate" class="i"></div>
                    <div class="o"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
            <!--#region Arrow Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
            <style>
                /* jssor slider arrow navigator skin 11 css */
                /*
                .jssora11l                  (normal)
                .jssora11r                  (normal)
                .jssora11l:hover            (normal mouseover)
                .jssora11r:hover            (normal mouseover)
                .jssora11l.jssora11ldn      (mousedown)
                .jssora11r.jssora11rdn      (mousedown)
                */
                .jssora11l, .jssora11r {
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 37px;
                    height: 37px;
                    cursor: pointer;
                    background: url(../img/a11.png) no-repeat;
                    overflow: hidden;
                }

                .jssora11l {
                    background-position: -11px -41px;
                }

                .jssora11r {
                    background-position: -71px -41px;
                }

                .jssora11l:hover {
                    background-position: -131px -41px;
                }

                .jssora11r:hover {
                    background-position: -191px -41px;
                }

                .jssora11l.jssora11ldn {
                    background-position: -251px -41px;
                }

                .jssora11r.jssora11rdn {
                    background-position: -311px -41px;
                }
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora11r" style="top: 123px; right: 8px;">
            </span>
            <!--#endregion Arrow Navigator Skin End -->
        </div>
        <!--#endregion Thumbnail Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>
        <!-- Trigger -->
    </div>
    <!-- Jssor Slider End -->
    </div>
      </div>
      <div class="row testimonials" id="">
        <div class="content">
          <h2>Testimonials</h2>
        </div>
      </div>
      <div class="row story" id="">
        <div class="content">
          <h2>The Story</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel dictum arcu, eget rhoncus turpis. Nulla vitae ligula commodo, mollis tellus quis, lacinia sapien. Quisque malesuada, mi in efficitur vehicula, arcu lectus faucibus velit, vel tempor neque nibh vitae eros. Nullam et facilisis est, venenatis congue justo. Nulla luctus diam odio, sollicitudin dapibus eros feugiat ac. Nullam finibus diam et mollis eleifend. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. In vel sapien vel urna volutpat fermentum. Ut congue urna nunc, sit amet accumsan turpis consequat in. Ut viverra, lorem sit amet auctor hendrerit, ex nibh gravida orci, quis congue elit magna sed dolor. In mattis purus vel pulvinar venenatis.</p>
          <p>Mauris euismod nulla sed turpis feugiat hendrerit. In rhoncus leo mi, sed semper est pretium non. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam et diam velit. Pellentesque vitae diam egestas ante consequat porttitor. Donec ac orci non leo vehicula fermentum. Maecenas nec venenatis urna. Etiam fringilla placerat urna, fermentum malesuada eros ultrices et. Suspendisse feugiat odio sodales, dapibus ex ac, pharetra arcu. Duis quam nulla, viverra in interdum vitae, scelerisque sodales massa. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
          <p>Praesent vitae commodo arcu, at finibus quam. Aenean quis diam accumsan nisl ornare auctor non sit amet purus. Vestibulum sed velit elementum, aliquam dui eget, congue neque. Ut venenatis ante quis venenatis ultrices. Aliquam scelerisque, neque a feugiat tristique, massa massa viverra nulla, eu porta arcu nisi at lacus. Donec non justo sed turpis dapibus tempus ut ut felis. Mauris auctor bibendum nisl pellentesque sollicitudin.</p>
          <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque a justo in mi porttitor mollis. In luctus ex non risus rhoncus pharetra. Curabitur in arcu justo. Phasellus lectus tortor, vehicula tempor metus quis, molestie accumsan tortor. Ut dapibus velit non turpis suscipit consectetur. Curabitur facilisis ipsum et erat dapibus, vel aliquam augue eleifend. Etiam non dui in turpis porttitor viverra.</p>
        </div>
      </div>
      <div class="row team" id="">
        <div class="content">
          <h2>My Vendors</h2>
        </div>
      </div>
    </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
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