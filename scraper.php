<?php

  //pulls params
  $city=$_GET['city'];

  //replaces space ' ' with no space ''
  $city=str_replace(' ','', $city);

  //assign page contents to variable
  $contents=file_get_contents('http://www.weather-forecast.com/locations/'.$city.'/forecasts/latest');

  //returns array of matched content
  preg_match ('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s', $contents, $matches);

  //return index 1 of array
  print_r($matches[1]);

?>
