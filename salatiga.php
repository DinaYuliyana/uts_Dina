<div align='center'>
<span style="font-size:24px;">Pekiraan Kondisi Cuaca di Salatiga</span>
<br>
<br>
<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/14252955f15867ff/conditions/forecast/q/IA/salatiga.json");
  $parsed_json = json_decode($json_string);
  $weather = $parsed_json->{'current_observation'}->{'weather'};
  $f = $parsed_json->{'current_observation'}->{'temp_f'};
  $c = $parsed_json->{'current_observation'}->{'temp_c'};
  $lc = $parsed_json->{'current_observation'}->{'local_time_rfc822'};
  $jam = $parsed_json->forecast->txt_forecast->date;
  $day = $parsed_json->forecast->simpleforecast->forecastday[0]->date->day;
  $month = $parsed_json->forecast->simpleforecast->forecastday[0]->date->monthname;
  $year = $parsed_json->forecast->simpleforecast->forecastday[0]->date->year;
  echo " 
  Perkiraan cuaca di Salatiga pukul ${jam} pada tanggal ${day} ${month} ${year} adalah ${weather}<br>
  dan memiliki suhu sekitar ${f}<sup>o</sup> Fahrenheit dan ${c}<sup>o</sup> Celcius<br>
  <br><br>";
?>
</div>