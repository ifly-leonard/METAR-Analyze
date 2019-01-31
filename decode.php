
<?php
	include ('server.php');

	if (!isset($_SESSION['username'])) {
		$_SESSION['error'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Decoded METAR</title>
	</head>
<body>
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
		<h5 class="my-0 mr-md-auto font-weight-normal">METAR Decoder</h5>



		<nav class="my-2 my-md-0 mr-md-3">
			<?php  if (isset($_SESSION['username'])) : ?>
			<span id="clock" class="p2 text-left"></span>
				<span class="p-2 text-dark"><i class="fas fa-user-circle"></i> Welcome, <strong><?php echo $_SESSION['username']; ?></strong></span>
        <a class="btn btn-danger btn-sm" href="index.php?logout='1'">Logout</a>
        <a class="btn btn-warning btn-sm" href="index.php">Back</a>
			<?php endif ?>

      </nav>
	</div>

  <?php


          $icao = $_GET['icao']; # Assigning the ICAO code from GET value

          $urlmet = 'https://www.aviationweather.gov/adds/dataserver_current/httpparam?dataSource=metars&requestType=retrieve&format=xml&stationString='.$icao.'&hoursBeforeNow=1';
            # Fetching the METAR data from aviationweather.gov site in XML format.

          $xmlmet = simplexml_load_file($urlmet); # loading the XML data using simplexml_load_file() php function

          # assigning specific values to all the required parameters from the XML.

          $metar = $xmlmet->data->METAR->raw_text;
          $observation_time = $xmlmet->data->METAR->observation_time;
          $altimeter = $xmlmet->data->METAR->altim_in_hg;
          $dewpoint = $xmlmet->data->METAR->dewpoint_c;
          $flightrules = $xmlmet->data->METAR->flight_category;
          $temperature = $xmlmet->data->METAR->temp_c;
          $time = $xmlmet->data->METAR->observation_time;
          $visibility = $xmlmet->data->METAR->visibility_statute_mi;
          $winddir = $xmlmet->data->METAR->wind_dir_degrees;
          $windspd = $xmlmet->data->METAR->wind_speed_kt;
          $skycondition0 = $xmlmet->data->METAR->sky_condition[0]['sky_cover'];
          $skycondition1 = $xmlmet->data->METAR->sky_condition[0]['cloud_base_ft_agl'];
          $skycondition3 = $xmlmet->data->METAR->sky_condition[1]['sky_cover'];
          $skycondition4 = $xmlmet->data->METAR->sky_condition[1]['cloud_base_ft_agl'];


          //TAFinfo
          $urltaf = 'https://www.aviationweather.gov/adds/dataserver_current/httpparam?dataSource=tafs&requestType=retrieve&format=xml&stationString='.$icao.'&hoursBeforeNow=1';
          $xmltaf = simplexml_load_file($urltaf);
          $taf = $xmltaf->data->TAF->raw_text;

          //Station Info
          $urlinf = 'https://www.aviationweather.gov/adds/dataserver_current/httpparam?dataSource=stations&requestType=retrieve&format=xml&stationString='.$icao;
          $xmlinf = simplexml_load_file($urlinf);
          $stationid = $xmlinf->data->Station->station_id;
          $lat = $xmlinf->data->Station->latitude;
          $lng = $xmlinf->data->Station->longitude;
          $elevation = $xmlinf->data->Station->elevation_m;
          $stationname = $xmlinf->data->Station->site;
          $stationcountry = $xmlinf->data->Station->country;

          //Variables For Metar



      # All icao codes are 4 lettered


      if($icao == '' || strlen($icao) != 4 ) {
        echo '
        <div class="col-md-12">
        <div class="alert alert-danger">
          There was an error in the ICAO code, please enter the proper ICAO code again!
        </div>

        <form class="form" action="decode.php" method="GET">
          <div class="col-md-12 mb-3">
                  <label for="icao">Enter the ICAO code of desired Airport</label>
                  <input type="text" class="form-control" id="icao" placeholder="Chennai Airport = VOMM" name="icao"
                  value="" required="">
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                  </div>
                  <center>
                  <button type="submit" class="btn btn-info btn-md">Get details</button>
                  </center>
              </form>

        </div>
        ';

      }
     ?>
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
     <h1 class="display-4">Entered airport is <?php echo $_GET['icao']; ?></h1>
  </div>
  <center>
    <?php
     $vis = $visibility;

     if (!$vis)
     {
      echo '<h3><Small>Please enter airport</small>  <Span class="label label-default">ICAO</span></h3>';
     }
      else if($vis < 1.5)
     {
      echo '<h3><Span class="text text-danger">"Visibility is too low, not suitable for flying"</span></h3>';
     }
     else
     {
      echo '<h3><Span class="text text-success">"Airport is suitable for flying"</span></h3>';
     }
     ?>
  <!--Dont edit anything beyond this-->
  <?php
     $vfr = "VFR";
     $mvfr = "MVFR";
     $ifr = "IFR";  error_reporting(0);

     // if ($flightrules == $vfr)
     // {
     //  $atisflightrules = 'Visual Flight Rules and Instrument Flight Rules are operational';
     // }
     // else if($flightrules == $mvfr)
     // {
     //  $atisflightrules =  'Marginal V F R conditions, request for Special V F R clearance, and Instrument Flight Rules';
     // }
     // else if($flightrules == $ifr)
     // {
     //  $atisflightrules =  'V F R operations suspended due to poor Visibility, Airport is currently operating only I F R';
     // }
     // else
     // {
     //  $atisflightrules =  'Operations suspended due to dangerous weather conditions';
     // }
     //
     // echo $atisflightrules;

     //Generating ATIS Information alphabet in accordance with the LMT of your Area.
     {
      $info =	date("H",strtotime($time));
     switch ($info) {
     case 1:
     $information = "A";
     break;
     case 2:
     $information = "B";
     break; case 3:
     $information = "C";
     break; case 4:
     $information = "D";
     break; case 5:
     $information = "E";
     break; case 6:
     $information = "F";
     break; case 7:
     $information = "G";
     break; case 8:
     $information = "I";
     break; case 9:
     $information = "J";
     break; case 10:
     $information = "K";
     break; case 11:
     $information = "L";
     break; case 12:
     $information = "M";
     break; case 13:
     $information = "N";
     break; case 14:
     $information = "O";
     break; case 15:
     $information = "P";
     break; case 16:
     $information = "Q";
     break; case 17:
     $information = "R";
     break; case 18:
     $information = "S";
     break; case 19:
     $information = "T";
     break; case 20:
     $information = "U";
     break; case 21:
     $information = "V";
     break; case 22:
     $information = "W";
     break; case 23:
     $information = "X";
     break; case 24:
     $information = "Y";
     break;

     default:
     $information = "F";
     }


     // XML Data from NOAA for the METAR observation

      /*{$observation_time
     $altimeter
     $dewpoint
     $flightrules
     $temperature
     $time
     $visibility
     $winddir
     $windspd
     $skycondition0
     $skycondition1
     $skycondition3
     $skycondition4  }*/

     // Changing the Alphabets into phonetic identifiers

        switch ($information) {
     case "A":
        $atisinfo = "Alfa";
     break;
     case "B":
        $atisinfo = "Bravo";
     break;
     case "C":
        $atisinfo = "Charlie";
     break;
     case "D":
        $atisinfo = "delta";
     break;
     case "E":
        $atisinfo = "echo";
     break;
     case "F":
        $atisinfo = "foxtrot";
     break;
     case "G":
        $atisinfo = "golf";
     break;
     case "H":
        $atisinfo = "hotel";
     break;
     case "I":
        $atisinfo = "india";
     break;
     case "J":
        $atisinfo = "juliet";
     break;
     case "K":
        $atisinfo = "kilo";
     break;
     case "L":
        $atisinfo = "lima";
     break;
     case "M":
        $atisinfo = "Mike";
     break;
     case "N":
        $atisinfo = "November";
     break;
     case "O":
        $atisinfo = "Oscar";
     break;
     case "P":
        $atisinfo = "Papa";
     break;
     case "Q":
        $atisinfo = "Qubec";
     break;
     case "R":
        $atisinfo = "Romeo";
     break;
     case "S":
        $atisinfo = "sierra";
     break;
     case "T":
        $atisinfo = "tan go";
     break;
     case "U":
        $atisinfo = "uniform";
     break;
     case "V":
        $atisinfo = "Victor";
     break;
     case "W":
        $atisinfo = "whiskey";
     break;case "X":
        $atisinfo = "x ray";
     break;
     case "Y":
        $atisinfo = "Yankee";
     break;
     case "Z":
        $atisinfo = "Zulu";
     break;


     default:
        $atisinfo = "Alfa";
     }
      //Additional Information

       $airportname = 'Airport';
       $source = $time; //Loaded from AWC ADDS XML Data
       $date = new DateTime($source);
        $atistime = $date->format('H  i ');
       $atisdate = $date->format('d m');
       $i = $winddir;
        $atiswinddir = (string)$i;
        $atiswinddir1 = $atiswinddir[0];
        $atiswinddir2 = $atiswinddir[1];
        $atiswinddir3 = $atiswinddir[2];
        $j = $windspd;
        $atiswindspd = (string)$j;
        $atiswindspd1 = $atiswindspd[0];
        $atiswindspd2 = $atiswindspd[1];
        $atiswindspd3 = $atiswindspd[2];
        $k = $altimeter;
        $inhg = (string)$k;
        $inhg1 = $inhg[0];
        if ($inhg[1] == 9)
        {
          $inhg02 = "Niner";
        }
        else
        {
          $inhg02 = $inhg2;
        }
        if ($inhg[2] == 9)
        {
          $inhg03 = "Niner";
        }
        else
        {
          $inhg03 = $inhg[2];
        }
        if ($inhg[3] == 9)
        {
          $inhg04 = "Niner";
        }
        else
        {
          $inhg04 = $inhg[3];
        }
        if(!$skycondition3 OR !$skycondition4)
     {
     switch($skycondition0)
     {
     case "SCT":
       $atiscloud1 = "Scattered";
      break;
      case "BKN":
       $atiscloud1 = "Broken";
      break;
      case "OVC":
       $atiscloud1 = "over cast";
      break;
      case "Clear":
       $atiscloud1 = "clear";
      break;
      case "CAVOK":
       $atiscloud1 = "Scattered";
      break;
      case "NSC":
       $atiscloud1 = "No significant clouds";
      break;
      case "VV":
       $atiscloud1 = "Clouds cannot be seen due to heavy percipitation";
      break;
      case "NSC":
       $atiscloud1 = "No significant clouds";
      break;
      default:
        $atiscloud1 = "Clear";
     }

     {
       if($atiscloud1 == "clear")
       {
         $atiscloud2 = " ";
       }
       else
       {
         $atiscloud2 = $skycondition0;
       }
     }

     }
     else
     {
       switch($skycondition0)
     {
     case "SCT":
       $atiscloud1 = "Scattered";
      break;
      case "BKN":
       $atiscloud1 = "Broken";
      break;
      case "OVC":
       $atiscloud1 = "over cast";
      break;
      case "Clear":
       $atiscloud1 = "clear";
      break;
      case "CAVOK":
       $atiscloud1 = "Scattered";
      break;
      case "NSC":
       $atiscloud1 = "No significant clouds";
      break;
      case "VV":
       $atiscloud1 = "Clouds cannot be seen due to heavy percipitation";
      break;
      case "NSC":
       $atiscloud1 = "No significant clouds";
      break;

      default:
        $atiscloud1 = "Clear";
     }
     {
       if($atiscloud1 == "clear")
       {
         $atiscloud2 = " ";
       }
       else
       {
         $atiscloud2 = $skycondition0;
       }
     }
     switch($skycondition3)
     {
     case "SCT":
       $atiscloud3 = "Scattered";
      break;
      case "BKN":
       $atiscloud3 = "Broken";
      break;
      case "OVC":
       $atiscloud3 = "over cast";
      break;
      case "Clear":
       $atiscloud3 = "clear";
      break;
      case "CAVOK":
       $atiscloud3 = "Scattered";
      break;
      case "NSC":
       $atiscloud3 = "No significant clouds";
      break;
      case "VV":
       $atiscloud3 = "Clouds cannot be seen due to heavy percipitation";
      break;
      case "NSC":
       $atiscloud3 = "No significant clouds";
      break;
      default:
        $atiscloud3 = "Clear";
     }
     {
       if($atiscloud3 == "clear")
       {
         $atiscloud4 = " ";
       }
       else
       {
         $atiscloud4 = $skycondition4;
       }
     }
       $skycondition3.' Clouds At '.$skycondition4.' Feet';
     }

     }
       // Modify the content as you like, but donot change the $object
      if(!$metar)
      {
        $broadcast = "$airportname Information is currently unavailable, please try again later. sorry for the inconvenience";
      }
      else
      {
        $broadcast = " Automatic terminal information service, $airportname information $atisinfo, recorded at $atistime zulu, wind direction $atiswinddir1, $atiswinddir2, $atiswinddir3 degrees, at ,$atiswindspd1, $atiswindspd2, $atiswindspd3 knots, visibility $visibility miles, altimeter $inhg1,$inhg02, point,$inhg03,$inhg04 , sky condition, $atiscloud1, at $atiscloud2 feet, $atiscloud3, at $atiscloud4 feet, temprature , $temperature degrees, dew point, $dewpoint degrees, $atisflightrules,  on initial contact advice aircraft type and gate, this was A-TIS information $atisinfo";
      }


     ?>
  <!-- Supported languages :
     en-au	: English (Australia)
      en-ca	: English (Canada)
      en-gb	: English (Great Britain)
      en-in	: English (India)
      en-us	: English (United States)
     -->
  <!--Now the Audio part, paste your API Key HERE!-->
  <audio src="http://api.voicerss.org/?key=3cb117cb67c34a69986f4ffd768b21a8&hl=en-gb&src='<?php echo $broadcast?>'" id="audio"></audio>
  <button class="btn btn-info btn-md" id="play" onclick="play()">  Play Voice ATIS </button>

  <div class="col-md-6 col-lg-6">
  <div class="block">
    <!-- Metar ICAO Results  Title -->
    <p class="lead">
      <p><?php if (!$metar) { echo '<h2><small>METAR currently not available</small></h2>'; } else { echo $metar; } ?></p>
    </p>
    <div class="block-title">
        <h1 class="display-4"><i class="gi gi-resize_full"></i> <Strong>Decoded</Strong> WX  </h1>
    </div>
    <!-- END Metar ICAO Results Title -->
    <!-- Metar ICAO Results Content -->
    <ul class="list-group">
      <li class="list-group-item"><span class="label label-primary">Station ID :</span> <?php echo $stationid;?> (<?php echo $stationname;?>/<?php echo $stationcountry ;?>)</li>
      <li class="list-group-item"><span class="label label-default">Observation made at</span> <?php echo $time;?></li>
      <li class="list-group-item"><span class="label label-default">Wind Direction:</span> <?php echo $winddir;?> &deg; At Speed: <?php echo $windspd;?> kts</li>
      <li class="list-group-item"><span class="label label-default">Sky Condition :</span>
            <?php
      if(!$skycondition3 OR !$skycondition4)
      {
        echo $skycondition0.' Clouds At '.$skycondition1.' Feet';
      }
      else
      {
        echo $skycondition0.' Clouds At '.$skycondition1.' Feet / '.$skycondition3.' Clouds At '.$skycondition4.' Feet';
      }
    ?></li>
      <li class="list-group-item"><span class="label label-default">Visibility:</span> <?php echo $visibility.$sky1;?> Miles</li>
      <li class="list-group-item"><span class="label label-default">Temperature:</span> <?php echo $temperature.$sky1;?>&deg; C / Dew Point <?php echo $dewpoint;?>&deg; C</li>
      <li class="list-group-item"><span class="label label-default">Altimeter:</span> <?php echo $altimeter;?> inHg</li>

    </ul>
    <!-- END Metar ICAO Results Content -->
  </div>
  </div>


  <script>
     function play() {
         var audio = document.getElementById('audio');
         if (audio.paused) {
             audio.play();

         }else{
             audio.pause();
             audio.currentTime = 0;
         }
     }
  </script>
  </center>
   <div class="container">


   <footer class="pt-4 my-md-5 pt-md-5 border-top">
   	<div class="row">
   		<div class="col-12 col-md">
   			<small class="d-block mb-3 text-muted">METAR decoding site &bull; Created by Manivannan G.</small>
   		</div>
   	</div>
   </footer>
   </div>


   </body>
   </html>
