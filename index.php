<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Weather Search</title>

    <!-- CDN Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- CDN Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="styles.css">

    <!-- CDN jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- CDN Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <!-- JavaScript -->
    <script src='script.js'></script>

  </head>

  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1 class='center'>Weather Search</h1>
          <p class='lead center'>Enter your city to get your weather forecast</p>
          <form class='center'>
            <div class="form-group">
              <input type="text" class='form-control' name='city' id='city' placeholder='Eg. London, Paris, San Francisco...'>
            </div>
            <button class='btn btn-success btn-lg' id='findMyWeather'>Find Your Weather</button>
          </form>

          <div id='success' class="alert alert-success">Success</div>
          <div id='fail' class="alert alert-danger">Could not find weather data for that city. Please try again</div>
          <div id='noCity' class="alert alert-danger">Please enter a City.</div>

        </div>
      </div>
    </div>

  </body>

</html>
