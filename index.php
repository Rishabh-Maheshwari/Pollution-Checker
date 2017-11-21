<?php


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.waqi.info/feed/here/?token=7ce0135b611cd096d66d8490b45fa1644f258b6c",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: af4956b8-16fd-e562-7f7d-6a64ad6f775c"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  
$json = json_decode($response, true);
}?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pollution Checker</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script type="text/javascript">
  $(window).load(function() {           
  var aqi=<?php echo $json['data']['aqi'];?>; 
var image = $('#slideit');
                //Initial Background image setup

if(aqi<=50){
	image.css('background-image', 'url(img/good.jpg)');
document.getElementById("level").innerHTML="Good";
	}
else if(aqi<=100) {
image.css('background-image', 'url(img/satisfactory.jpg)');	
document.getElementById("level").innerHTML="Satisfactory";
}
else if(aqi<=200){
	image.css('background-image', 'url(img/moderatlypolluted.jpg)');
document.getElementById("level").innerHTML="Moderatly Polluted";
	}
	else if(aqi<=300){
	image.css('background-image', 'url(img/poor.jpg)');
	document.getElementById("level").innerHTML="Poor";
	}
else if(aqi<=400){
	image.css('background-image', 'url(img/verypoor.jpg)');
document.getElementById("level").innerHTML="Very Poor";
	}
	else {
image.css('background-image', 'url(img/severe.jpg)');
document.getElementById("level").innerHTML="Severe";
 } 
  
                //Change image at regular intervals
              
 });
</script>
  </head>

<body  id="slideit" style="background-size: 1355px 1000px; background-repeat: no-repeat;">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container" >
        <a class="navbar-brand js-scroll-trigger" href="#slideit">POLLUTION CHECKER </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">More To Know</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#developer">Developer</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Your Location: <?php echo " ".$json['data']['city']['name'];?></div>
          <div class="intro-heading text-uppercase">Air Quality Index is: <?php echo " ".$json['data']['aqi']; ?>
		  <p> Danger Level: <span id="level"></span> </p></div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">More To Know</h2>
            <h3 class="section-subheading text-muted">Source : Wikipedia</h3>
          </div>
        </div>
        <img src="img/safe.jpg">
      </div>
    </section>


    <!-- Team -->
    <section class="bg-light" id="developer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About Me</h2>
            <h3 class="section-subheading text-muted">"On a journey to solve problems."</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/profile.jpg" alt="">
              <h4>Rishabh Maheshwari</h4>
              <p class="text-muted">All in One</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="https://github.com/Rishabh-Maheshwari">
                    <i class="fa fa-github"></i>
                  </a>
                </li>
				<li class="list-inline-item">
                  <a href="http://www.hackerearth.com/@maheshwaririshabh90">
                    <i class="fa fa-h-square"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/rishabh.maheshwari.543">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.linkedin.com/in/rishabh-maheshwari-792602145">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Every problem have a solution and I think Computer have all solutions. Therefore,Computer can solve every problem.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
