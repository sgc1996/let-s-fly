<?php
//index.php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

error_reporting(0);
$msg='';

if (isset($_POST['submit'])) {
$message = '
<h3 align="center">Sender Details</h3>
  <table border="1" width="100%" cellpadding="5" cellspacing="5">
  <tr>
    <td width="30%">Full Name</td>
    <td width="70%">'.$_POST["name"].'</td>
   </tr>
   <tr>
    <td width="30%">Route From</td>
    <td width="70%">'.$_POST["rFrom"].'</td>
   </tr>
   <tr>
    <td width="30%">To</td>
    <td width="70%">'.$_POST["to"].'</td>
   </tr>
   <tr>
    <td width="30%">Email ID</td>
    <td width="70%">'.$_POST["email"].'</td>
   </tr>
   <tr>
    <td width="30%">Airport Assistance</td>
    <td width="70%">'.$_POST["airportAss"].'</td>
   </tr>
   <tr>
    <td width="30%">Accommodation</td>
    <td width="70%">'.$_POST["accoRate"].'</td>
   </tr>
   <tr>
    <td width="30%">Transport</td>
    <td width="70%">'.$_POST["tarnRate"].'</td>
   </tr>
   <tr>
    <td width="30%">Local Guide</td>
    <td width="70%">'.$_POST["guideRate"].'</td>
   </tr>
   <tr>
    <td width="30%">Driver</td>
    <td width="70%">'.$_POST["driverRate"].'</td>
   </tr>
   <tr>
    <td width="30%">Overall Organization</td>
    <td width="70%">'.$_POST["orgaRate"].'</td>
   </tr>
   <tr>
    <td width="30%">Your Vacation</td>
    <td width="70%">'.$_POST["orgaRate"].'</td>
   </tr>
   <tr>
    <td width="30%">Recommendation</td>
    <td width="70%">'.$_POST["reco"].'</td>
   </tr>
   <tr>
    <td width="30%">Direction</td>
    <td width="70%">'.$_POST["direccion"].'</td>
   </tr>
  </table>
 ';

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';
    $mail = new PHPMailer;
    $mail->IsSMTP();        //Sets Mailer to send message using SMTP
    $mail->Host = 'mail.letsfly.lk';  //Sets the SMTP hosts of your Email hosting, this for Godaddy
    $mail->Port = '465';        //Sets the default SMTP server port
    $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
    $mail->Username = 'admin@letsfly.lk';     //Sets SMTP username
    $mail->Password = 'adminletsfly@1234';     //Sets SMTP password
    $mail->SMTPSecure = 'ssl';       //Sets connection prefix. Options are "", "ssl" or "tls"
    $mail->From = $_POST["email"];     //Sets the From email address for the message
    $mail->FromName = $_POST["name"];    //Sets the From name of the message
    $mail->AddAddress('gayanchathuranga1992@gmail.com', 'Lets Fly.lk'); //Adds a "To" address
    $mail->AddAddress('gayanc@aitech.lk', 'Lets Fly.lk'); //Adds a "To" address
    $mail->AddAddress('ameshm@aitech.lk', 'Lets Fly.lk'); //Adds a "To" address
    $mail->AddAddress('kasun@letsfly.lk', 'Lets Fly.lk'); //Adds a "To" address
    $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);       //Sets message type to HTML
    // $mail->AddAttachment($path);     //Adds an attachment from a path on the filesystem
    $mail->Subject = 'Let s Fly.lk Clints Feedback';    //Sets the Subject of the message
    $mail->Body = $message;       //An HTML or plain text message body

 if($mail->Send())        //Send an Email. Return true on success or false on error
 {
  $msg = '<div class="alert alert-success" style="text-align: center; color: green;">Email Sent Successfully</div>';
  // unlink($path);
 }
 else
 {
  $msg = '<div class="alert alert-danger" style="text-align: center; color: red;">There is an Error</div>';
 }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KQS8Y5JTX2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-KQS8Y5JTX2');
    </script>
    <title>Let's Fly.lk | Feedback Form</title>
    <meta name="description" content="">

	  <meta name="keywords" content="">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" href="images/logo-black.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/animate.css">
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="asset/css/magnific-popup.css">
    <link rel="stylesheet" href="asset/css/aos.css">
    <link rel="stylesheet" href="asset/css/ionicons.min.css">
    <link rel="stylesheet" href="asset/css/flaticon.css">
    <link rel="stylesheet" href="asset/css/icomoon.css">
    <link rel="stylesheet" href="qrstyle.css">
  </head>
  <body>

  <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,ls:0.5},{b:0,d:1000,y:5,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:200,d:1000,y:25,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:400,d:1000,y:45,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:600,d:1000,y:65,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:800,d:1000,y:85,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:500,d:1000,y:195,e:{y:6}}],
              [{b:0,d:2000,y:30,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:100},{b:0,d:1500,y:30,o:1,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:-100},{b:0,d:1500,y:100,o:0.8,e:{y:3}}],
              [{b:500,d:1500,o:1}],
              [{b:0,d:1000,y:380,e:{y:6}}],
              [{b:300,d:1000,x:80,e:{x:6}}],
              [{b:300,d:1000,x:330,e:{x:6}}],
              [{b:-1,d:1,r:-110,sX:5,sY:5},{b:0,d:2000,o:1,r:-20,sX:1,sY:1,e:{o:6,r:6,sX:6,sY:6}}],
              [{b:0,d:600,x:150,o:0.5,e:{x:6}}],
              [{b:0,d:600,x:1140,o:0.6,e:{x:6}}],
              [{b:-1,d:1,sX:5,sY:5},{b:600,d:600,o:1,sX:1,sY:1,e:{sX:3,sY:3}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $LazyLoading: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 20,
                $SpacingY: 20
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        /*jssor slider bullet skin 132 css*/
        .jssorb132 {position:absolute;}
        .jssorb132 .i {position:absolute;cursor:pointer;}
        .jssorb132 .i .b {fill:#fff;fill-opacity:0.8;stroke:#cf0000;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.7;}
        .jssorb132 .i:hover .b {fill:#cf0000;fill-opacity:.7;stroke:#fff;stroke-width:2000;stroke-opacity:0.8;}
        .jssorb132 .iav .b {fill:#cf0000;stroke:#fff;stroke-width:2400;fill-opacity:0.8;stroke-opacity:1;}
        .jssorb132 .i.idn {opacity:0.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
  
  <div class="wrapper">
    <?php print_r($msg); ?>
    <div class="form_container">
      <form name="form" action="<?= $SERVER['PHP_SELF'] ?>" method="post" role="form">
        <div class="heading1">
          <h2 style="color:#fff;">Clients Feedback</h2>
        </div>
        <div class="form_wrap">
            <div class="form_item">
              <label style="color: black;">In order to offer better services to our clients, we invite you to fill out this questionnaire and deliver it to your guide/driver or to the representative of the company. Please feel free to make your suggestions/criticisms.</label>
            </div>
        </div>
        <div class="form_wrap">
            <div class="form_item">
              <label style="color: black;">Full Name</label>
              <input type="text" name="name" placeholder="Enter Your Full Name" required>
              <div class="error" id="name"></div>  
            </div>
        </div>

        <div class="form_wrap fullname">
          <div class="form_item">
            <label style="color: black;">
              Route from
            </label>
            <input type="text" name="rFrom" id="rFrom" placeholder="Route from" required>
            <div class="error" id="rFrom"></div>  
          </div>
          <div class="form_item">
            <label style="color: black;">
              To
            </label>
            <input type="text" name="to" id="to" placeholder="To" required>
            <div class="error" id="to"></div>  
          </div>
        </div>

        <div class="form_wrap">
            <div class="form_item">
              <label style="color: black;">Email</label>
              <input type="text" name="email" placeholder="Enter Your Email" required>
              <div class="error" id="email"></div>  
            </div>
        </div>

        <div class="form_wrap">
            <div class="form_item">
                <table class="table">
                  <thead>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Airport Assistance</th>
                      <td>
                      <div class="form_wrap">
                        <div class="form_item star-rate">
                            <!-- <label for="serviceRating" style="color: black;">Airport assistance</label> -->
                            <div class="star-rating-landscape airportAss" id="airportId">
                                <input type="checkbox" id="star5_airport" name="airportAss" value="1 Star">
                                <label for="star5_airport" title="5 stars"></label>
                                <input type="checkbox" id="star4_airport" name="airportAss" value="2 Stars">
                                <label for="star4_airport" title="4 stars"></label>
                                <input type="checkbox" id="star3_airport" name="airportAss" value="3 Stars">
                                <label for="star3_airport" title="3 stars"></label>
                                <input type="checkbox" id="star2_airport" name="airportAss" value="4 Stars">
                                <label for="star2_airport" title="2 stars"></label>
                                <input type="checkbox" id="star1_airport" name="airportAss" value="5 Stars">
                                <label for="star1_airport" title="1 star"></label>
                            </div>
                        </div>
                      </div>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">Accommodation</th>
                      <td>
                      <div class="form_wrap">
                        <div class="form_item star-rate">
                            <!-- <label for="serviceRating" style="color: black;">Accommodation</label> -->
                            <div class="star-rating-landscape accoRate" id="accoRateId">
                                <input type="checkbox" id="star5_acco" name="accoRate" value="1 Star">
                                <label for="star5_acco" title="5 stars"></label>
                                <input type="checkbox" id="star4_acco" name="accoRate" value="2 Stars">
                                <label for="star4_acco" title="4 stars"></label>
                                <input type="checkbox" id="star3_acco" name="accoRate" value="3 Stars">
                                <label for="star3_acco" title="3 stars"></label>
                                <input type="checkbox" id="star2_acco" name="accoRate" value="4 Stars">
                                <label for="star2_acco" title="2 stars"></label>
                                <input type="checkbox" id="star1_acco" name="accoRate" value="5 Stars">
                                <label for="star1_acco" title="1 star"></label>
                            </div>
                        </div>
                      </div>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">Transport</th>
                      <td>
                      <div class="form_wrap">
                        <div class="form_item star-rate">
                            <!-- <label for="serviceRating" style="color: black;">Transportation</label> -->
                            <div class="star-rating-landscape tarnRate" id="tarnRateId">
                                <input type="checkbox" id="star5_tarn" name="tarnRate" value="1 Star">
                                <label for="star5_tarn" title="5 stars"></label>
                                <input type="checkbox" id="star4_tarn" name="tarnRate" value="2 Stars">
                                <label for="star4_tarn" title="4 stars"></label>
                                <input type="checkbox" id="star3_tarn" name="tarnRate" value="3 Stars">
                                <label for="star3_tarn" title="3 stars"></label>
                                <input type="checkbox" id="star2_tarn" name="tarnRate" value="4 Stars">
                                <label for="star2_tarn" title="2 stars"></label>
                                <input type="checkbox" id="star1_tarn" name="tarnRate" value="5 Stars">
                                <label for="star1_tarn" title="1 star"></label>
                            </div>
                        </div>
                      </div>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">Local Guide</th>
                      <td>
                      <div class="form_wrap">
                        <div class="form_item star-rate">
                            <!-- <label for="serviceRating" style="color: black;">Local guide</label> -->
                            <div class="star-rating-landscape guideRate" id="guideRateId">
                                <input type="checkbox" id="star5_guide" name="guideRate" value="1 Star">
                                <label for="star5_guide" title="5 stars"></label>
                                <input type="checkbox" id="star4_guide" name="guideRate" value="2 Stars">
                                <label for="star4_guide" title="4 stars"></label>
                                <input type="checkbox" id="star3_guide" name="guideRate" value="3 Stars">
                                <label for="star3_guide" title="3 stars"></label>
                                <input type="checkbox" id="star2_guide" name="guideRate" value="4 Stars">
                                <label for="star2_guide" title="2 stars"></label>
                                <input type="checkbox" id="star1_guide" name="guideRate" value="5 Stars">
                                <label for="star1_guide" title="1 star"></label>
                            </div>
                        </div>
                      </div>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">Driver</th>
                      <td>
                      <div class="form_wrap">
                        <div class="form_item star-rate">
                            <!-- <label for="serviceRating" style="color: black;">Driver</label> -->
                            <div class="star-rating-landscape driverRate" id="driverRateId">
                                <input type="checkbox" id="star5_driver" name="driverRate" value="1 Star">
                                <label for="star5_driver" title="5 stars"></label>
                                <input type="checkbox" id="star4_driver" name="driverRate" value="2 Stars">
                                <label for="star4_driver" title="4 stars"></label>
                                <input type="checkbox" id="star3_driver" name="driverRate" value="3 Stars">
                                <label for="star3_driver" title="3 stars"></label>
                                <input type="checkbox" id="star2_driver" name="driverRate" value="4 Stars">
                                <label for="star2_driver" title="2 stars"></label>
                                <input type="checkbox" id="star1_driver" name="driverRate" value="5 Stars">
                                <label for="star1_driver" title="1 star"></label>
                            </div>
                        </div>
                      </div>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">Overall Organization </th>
                      <td>
                      <div class="form_wrap">
                        <div class="form_item star-rate">
                            <!-- <label for="serviceRating" style="color: black;">Overall organization</label> -->
                            <div class="star-rating-landscape orgaRate" id="orgaRateId">
                                <input type="checkbox" id="star5_orga" name="orgaRate" value="1 Star">
                                <label for="star5_orga" title="5 stars"></label>
                                <input type="checkbox" id="star4_orga" name="orgaRate" value="2 Stars">
                                <label for="star4_orga" title="4 stars"></label>
                                <input type="checkbox" id="star3_orga" name="orgaRate" value="3 Stars">
                                <label for="star3_orga" title="3 stars"></label>
                                <input type="checkbox" id="star2_orga" name="orgaRate" value="4 Stars">
                                <label for="star2_orga" title="2 stars"></label>
                                <input type="checkbox" id="star1_orga" name="orgaRate" value="5 Stars">
                                <label for="star1_orga" title="1 star"></label>
                            </div>
                        </div>
                      </div>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">Your Vacation</th>
                      <td>
                      <div class="form_wrap">
                        <div class="form_item star-rate">
                            <!-- <label for="serviceRating" style="color: black;">Vacation</label> -->
                            <div class="star-rating-landscape vacationRate" id="vacationRateId">
                                <input type="checkbox" id="star5_vacation" name="vacationRate" value="1 Star">
                                <label for="star5_vacation" title="5 stars"></label>
                                <input type="checkbox" id="star4_vacation" name="vacationRate" value="2 Stars">
                                <label for="star4_vacation" title="4 stars"></label>
                                <input type="checkbox" id="star3_vacation" name="vacationRate" value="3 Stars">
                                <label for="star3_vacation" title="3 stars"></label>
                                <input type="checkbox" id="star2_vacation" name="vacationRate" value="4 Stars">
                                <label for="star2_vacation" title="2 stars"></label>
                                <input type="checkbox" id="star1_vacation" name="vacationRate" value="5 Stars">
                                <label for="star1_vacation" title="1 star"></label>
                            </div>
                        </div>
                      </div>
                      </td>
                    </tr>

                  </tbody>
                </table>
            </div>
        </div>

        <div class="form_wrap">
            <div class="form_item">
              <label for="textArea" style="color: black;">Your Suggestions/Recommendations</label>
              <textarea type="text" id="textArea" rows="4" name="reco" required></textarea>
              <div class="error" id="textArea"></div>  
            </div>
        </div>

        <div class="form_wrap">
            <div class="form_item">
              <label for="textArea" style="color: black;">Direction</label>
              <textarea type="text" id="textArea" rows="4" name="direccion" required></textarea>
              <div class="error" id="textArea"></div>  
            </div>
        </div>

        <div class="row justify-content-center">
          <input type="submit" name="submit" id="contact-submit" data-submit="...Sending" class="btn btn-primary">
        </div>
      </form>
    </div>
    </div>
		
    <footer class="ftco-footer ftco-section" style="padding-bottom: 0px;padding-top: 30px;" data-stellar-background-ratio="0.5">
        <div class="container">
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Design by <a href="http://www.aitech.lk/" target="_blank">AI TECH</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#c51515"/></svg></div>

  <script src="asset/js/jquery.min.js"></script>
  <script src="asset/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="asset/js/popper.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
  <script src="asset/js/jquery.easing.1.3.js"></script>
  <script src="asset/js/jquery.waypoints.min.js"></script>
  <script src="asset/js/jquery.stellar.min.js"></script>
  <script src="asset/js/owl.carousel.min.js"></script>
  <script src="asset/js/jquery.magnific-popup.min.js"></script>
  <script src="asset/js/aos.js"></script>
  <script src="asset/js/jquery.animateNumber.min.js"></script>
  <script src="asset/js/scrollax.min.js"></script>
  <script src="asset/js/google-map.js"></script>
  <script src="asset/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
  // Script for Airport Assistance star rating
  $(document).ready(function () {
      $(".airportAss input[type='checkbox']").on("click", function () {
          const selectedRating = parseInt($(this).val());
          $(this)
              .prevAll("input[type='checkbox']")
              .addBack()
              .prop("checked", true);
          $(this)
              .nextAll("input[type='checkbox']")
              .prop("checked", false);
      });
  });

  // Script for Accommodation star rating
  $(document).ready(function () {
      $(".accoRate input[type='checkbox']").on("click", function () {
          const selectedRating = parseInt($(this).val());
          $(this)
              .prevAll("input[type='checkbox']")
              .addBack()
              .prop("checked", true);
          $(this)
              .nextAll("input[type='checkbox']")
              .prop("checked", false);
      });
  });

  // Script for Transportation star rating
  $(document).ready(function () {
      $(".tarnRate input[type='checkbox']").on("click", function () {
          const selectedRating = parseInt($(this).val());
          $(this)
              .prevAll("input[type='checkbox']")
              .addBack()
              .prop("checked", true);
          $(this)
              .nextAll("input[type='checkbox']")
              .prop("checked", false);
      });
  });

  // Script for Local guide star rating
  $(document).ready(function () {
      $(".guideRate input[type='checkbox']").on("click", function () {
          const selectedRating = parseInt($(this).val());
          $(this)
              .prevAll("input[type='checkbox']")
              .addBack()
              .prop("checked", true);
          $(this)
              .nextAll("input[type='checkbox']")
              .prop("checked", false);
      });
  });

  // Script for Driver star rating
  $(document).ready(function () {
      $(".driverRate input[type='checkbox']").on("click", function () {
          const selectedRating = parseInt($(this).val());
          $(this)
              .prevAll("input[type='checkbox']")
              .addBack()
              .prop("checked", true);
          $(this)
              .nextAll("input[type='checkbox']")
              .prop("checked", false);
      });
  });

   // Script for Overall organization star rating
   $(document).ready(function () {
      $(".orgaRate input[type='checkbox']").on("click", function () {
          const selectedRating = parseInt($(this).val());
          $(this)
              .prevAll("input[type='checkbox']")
              .addBack()
              .prop("checked", true);
          $(this)
              .nextAll("input[type='checkbox']")
              .prop("checked", false);
      });
  });

  // Script for Vacation star rating
  $(document).ready(function () {
      $(".vacationRate input[type='checkbox']").on("click", function () {
          const selectedRating = parseInt($(this).val());
          $(this)
              .prevAll("input[type='checkbox']")
              .addBack()
              .prop("checked", true);
          $(this)
              .nextAll("input[type='checkbox']")
              .prop("checked", false);
      });
  });
</script>


    <script>
        window.onscroll = function() {myFunction()};
      
        var navbar = document.getElementById("ftco-navbar");
        var sticky = navbar.offsetTop;
      
        function myFunction() {
            if (window.pageYOffset >= sticky) {
              navbar.classList.add("sticky")
            } else {
              navbar.classList.remove("sticky");
            }
        }
    </script>

    <script>
        // Get references to the checkbox and the input field
        const facebookCheckbox = document.getElementById('facebookCheckbox');
        const fUsernameInput = document.getElementById('fUsernameInput');

        // Add an event listener to the checkbox
        facebookCheckbox.addEventListener('change', function() {
            // Enable or disable the input field based on the checkbox state
            fUsernameInput.disabled = !this.checked;
        });

        // Get references to the checkbox and the input field
        const linkedinCheckbox = document.getElementById('linkedinCheckbox');
        const lUsernameInput = document.getElementById('lUsernameInput');

        // Add an event listener to the checkbox
        linkedinCheckbox.addEventListener('change', function() {
            // Enable or disable the input field based on the checkbox state
            lUsernameInput.disabled = !this.checked;
        });

    </script>

<script>
        $(document).ready(function () {
            $("form").submit(function () {
                if (
                    $('#airportId input:checkbox:checked').length < 1 ||
                    $('#accoRateId input:checkbox:checked').length < 1 ||
                    $('#tarnRateId input:checkbox:checked').length < 1 ||
                    $('#guideRateId input:checkbox:checked').length < 1 ||
                    $('#driverRateId input:checkbox:checked').length < 1 ||
                    $('#orgaRateId input:checkbox:checked').length < 1 ||
                    $('#vacationRateId input:checkbox:checked').length < 1
                ) {
                    alert("Check at least one checkbox from each set!");
                    return false;
                }
            });
        });
    </script>
    

</body>

</html>