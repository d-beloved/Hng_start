<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Tell the time" content="">
  <meta name="D-Beloved" content="">

  <title>Hng-Intern|digiTime</title>
  <!-- Font awesome  -->
  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="css/main.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-start">
          <div class="col-12 col-md-12">
            <h1 class="head"><i>HNG Internship 4.0</i></h1>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-4">
            <h4 class="oya"><i><b>Let's tell the time...shall We?</b></i></h4>
          </div>
        </div>
        <div class="row justify-content-center">
           <div class="col-4 time">
            <i><span class="dat">
              <?php 
                echo(strftime("%A, %B %d, %Y"));
              ?>
            </span>
            <span class="tim">
              <?php 
                date_default_timezone_set('Africa/Lagos');
                echo(strftime("%I:%M:%S %p"));
              ?>
            </span></i>
          </div>
        </div>
      </div>
</body>
</html>