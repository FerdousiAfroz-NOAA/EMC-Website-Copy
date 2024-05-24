<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link href="https://www.emc.ncep.noaa.gov/emc/css/bootstrap-3.3.7/bootstrap.min.css" rel="stylesheet" media="screen">
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Merriweather"  type="text/css" >
        <link href="https://fonts.googleapis.com/css?family=Montserrat"  type="text/css" >
        <link rel="stylesheet" href="./disclaimer.css">
        <!-- Add icon library -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="https://www.emc.ncep.noaa.gov/emc/js/bootstrap-3.3.7/bootstrap.min.js"></script>

        <?php header('Access-Control-Allow-Origin','https://www.emc.ncep.noaa.gov');
        header('Access-Control-Allow-Methods','*');
        header('Access-Control-Allow-Credentials', 'true');

        header('Access-Control-Allow-Headers','Content-Type, Authorization');?>

</head>
<body>

<div class="container">
  <div class="panel-group">
    <div class="panel panel-danger">
      <div class="panel-heading" id="red-disclaimer-box">Disclaimer</div>
      <div class="panel-body"  id="disclaimer-text">
          <p>The content provided on this page supports model development. These are not official NWS products and should not to be relied upon for operational purposes.
        This web site is not subject to 24/7 support, and thus may be unavailable during system outages.</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
