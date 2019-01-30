<html>
	<head>
		<title>METAR Decoder</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	</head>

	<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  		<h5 class="my-0 mr-md-auto font-weight-normal">METAR Decoder</h5>
	</div>

	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
 	<h1 class="display-4">What is METAR?</h1>
  			<p class="lead">
  				METAR is a format for reporting weather information. A METAR weather report is predominantly used by pilots in fulfillment of a part of a pre-flight weather briefing, and by meteorologists, who use aggregated METAR information to assist in weather forecasting.
  			</p>

  			<h5>How to use this site?</h1>
  			<p class="lead">
  			  	<small>This site fetches and decodes METAR data into a human readable format. Enter the 4 lettered ICAO code of your desired location. The list of available ICAO codes are given below. Press the "Get Details" button to initiate the decoding.
  			  	</small>
  			</p>


		<form class="form" action="decode.php" method="GET">
		<div class="col-md-12 mb-3">
            <label for="icao">Enter the ICAO code of desired Airport</label>
            <input type="text" class="form-control" id="icao" placeholder="Chennai Airport = VOMM" name="icao" 
            value="" required="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <button type="submit" class="btn btn-info btn-md">Get details</button>


        </form>
	</div>


	<div class="row">
<div class="col-md-12">
<center>
<table class="text-success text-center">
<tbody><tr valign="top" class="text-danger ">
<td width="30%"><b>City served<br>
State / Location</b></td>
<td width="10%"><b>ICAO</b><br>Code</td>
<td width="10%"><b>IATA</b><br>Code</td>
<td width="40%"><b>Airport name</b></td>
<td width="10%"><b>Type</b></td>
</tr>

<tr class="text-danger">
<td><br><b>A &amp; N Islands</b> Union Territory</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>



<tr valign="top">
<td>Car Nicobar</td>
<td>VOCX</td>
<td>CBD</td>
<td>Car Nicobar Air Force Base</td>
<td>Military</td>
</tr>

<tr valign="top">
<td>Port Blair</td>
<td>VOPB</td>
<td>IXZ</td>
<td>Port Blair Air Force Station</td>
<td>Civil enclave</td>
</tr>

<tr class="text-danger">
<td><br><b>Andhra Pradesh</b> AP</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tr valign="top">
<td>Cudappah</td>
<td>VOCP</td>
<td>CDP</td>
<td>Cuddapah Airport</td>
<td>Domestic</td>
</tr>

<tr valign="top">
<td>Donakonda</td>
<td>VODK</td>
<td></td>
<td>Donakonda Airport</td>
<td>Domestic</td>
</tr>

<tr valign="top">
<td>Hyderabad</td>
<td>VOHY</td>
<td></td>
<td>Begumpet Air Force Station</td>
<td>Domestic</td>
</tr>

<tr valign="top">
<td>Hyderabad</td>
<td>VODG</td>
<td></td>
<td>Dundigul Air Force Academy</td>
<td>Domestic</td>
</tr>

<tr valign="top">
<td>Hyderabad</td>
<td></td>
<td></td>
<td>Hakimpet Air Base</td>
<td>Domestic</td>
</tr>

<tr valign="top">
<td>Hyderabad</td>
<td></td>
<td></td>
<td>Nadirgul Airport (Nadergul Airport)</td>
<td>Domestic</td>
</tr>

<tr valign="top">
<td><br><b>Hyderabad</b></td>
<td>VOHS</td>
<td>HYD</td>
<td><a href="http://www.hyderabad.aero" target="_blank"><b>Rajiv Gandhi International Airport<br>Hyderabad International Airport</b></a></td>
<td>International</td>
</tr>

<tr valign="top">
<td>Puttaparthi</td>
<td>VOPN</td>
<td>BEK</td>
<td>Sri Sathya Sai Airport</td>
<td>Domestic</td>
</tr>

<tr valign="top">
<td>Rajahmundry</td>
<td>VORY</td>
<td>RJA</td>
<td>Rajahmundry Airport</td>
<td>Domestic</td>
</tr>

<tr valign="top">
<td><br><b>Tirupati</b></td>
<td>VOTP</td>
<td>TIR</td>
<td>Tirupati Airport</td>
<td>Domestic</td>
</tr>

<tr valign="top">
<td>Vijayawada</td>
<td>VOBZ</td>
<td>VGA</td>
<td>Vijayawada Airport</td>
<td>Domestic</td>
</tr>

<tr valign="top">
<td>Visakhapatnam (Vizag)</td>
<td>VEVZ</td>
<td>VTZ</td>
<td>Visakhapatnam Airport<br>
Visakapatnam Naval Air Base)</td>
<td>Civil enclave</td>
</tr>

<tr valign="top">
<td>Warangal</td>
<td>VOWA</td>
<td>WGC</td>
<td>Warangal Airport</td>
<td>Domestic</td>
</tr>



<tr class="text-danger">
<td><br><b>Arunachal Pradesh</b></td>
<td></td>
<td></td>
<td></td>
<td>

</td>

</tr>
<tr valign="top">
<td>Along</td>
<td>VEAN</td>
<td>IXV</td>
<td>Along Airport</td>
<td>Civil enclave</td>
</tr>

<tr valign="top">
<td>Daporijo</td>
<td>VEDZ</td>
<td>DAE</td>
<td>Daporijo Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Pasighat</td>
<td>VEPG</td>

<td>IXT</td>
<td>Pasighat Airport</td>
<td>Civil enclave</td>
</tr>
<tr valign="top">
<td>Tezu</td>
<td>VETJ</td>
<td>TEI</td>
<td>Tezu Airport</td>
<td>Domestic</td>

</tr>
<tr valign="top">
<td>Zero</td>
<td>VEZO</td>
<td>ZER</td>
<td>Zero Airport</td>
<td>Domestic</td>
</tr>




<tr class="text-danger">
<td><br><b>Assam</b></td>
<td></td>

<td></td>
<td></td>
<td>

</td>
</tr>
<tr valign="top">
<td>Chabua</td>
<td>VECA</td>
<td></td>
<td>Chabua Air Force Station</td>
<td>Domestic</td>
</tr>

<tr valign="top">
<td>Dibrugarh</td>
<td>VEMN</td>
<td>DIB</td>
<td>Mohanbari Air Force Station</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Sookerating</td>

<td></td>
<td></td>
<td>Dum Duma Air Base (Sookerating Air Force Station)</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td><br><b>Guwahati</b> Gauhati</td>
<td>VEGT</td>
<td>GAU</td>

<td>Lokpriya Gopinath Bordoloi International Airport<br>
(Borjhar Airport) (Mountain Shadow Air Force Station)</td>
<td>International</td>
</tr>
<tr valign="top">
<td>Jorhat</td>
<td>VEJT</td>
<td>JRH</td>
<td>Jorhat Air Force Station</td>

<td>Domestic</td>
</tr>
<tr valign="top">
<td>Kailashahar</td>
<td>VEKR</td>
<td>IXH</td>
<td>Kailashahar Airport</td>
<td>Civil enclave</td>
</tr>
<tr valign="top">
<td>North Lakhimpur</td>

<td>VELR</td>
<td>IXI</td>
<td>Lilabari Airport</td>
<td>Civil enclave</td>
</tr>
<tr valign="top">
<td>Rupsi</td>
<td>VERU</td>
<td>RUP</td>
<td>Rupsi Airport</td>

<td>Domestic</td>
</tr>
<tr valign="top">
<td>Shella</td>
<td></td>
<td></td>
<td>Shella Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Silchar</td>
<td>VEKU</td>

<td>IXS</td>
<td>Kumbhirgram Air Force Station</td>
<td>Civil enclave</td>
</tr>
<tr valign="top">
<td>Tezpur</td>
<td>VETZ</td>
<td>TEZ</td>

<td>Tezpur Air Force Station</td>
<td>Domestic</td>
</tr>


<tr class="text-danger">
<td><br><b>Bihar</b></td>
<td></td>
<td></td>
<td></td>
<td>


</td>
</tr>
<tr valign="top">
<td><b>Gaya</b></td>
<td>VEGY</td>
<td>GAY</td>
<td>Gaya Airport<br>Bodhgaya Airport</td>
<td>International</td>
</tr>

<tr valign="top">
<td>Jogbani</td>
<td></td>
<td></td>
<td>Jogbani Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Muzzafarpur</td>
<td>VEMZ</td>
<td>MZU</td>

<td>Muzzafarpur Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td><b>Patna</b></td>
<td>VEPT</td>
<td>PAT</td>
<td>Lok Nayak Jayaprakash Airport</td>
<td>Domestic</td>
</tr>

<tr valign="top">
<td>Purnea</td>
<td>VEPU</td>
<td>PUI</td>
<td>Purnea Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Raxaul</td>
<td>VERL</td>

<td></td>
<td>Raxaul Airport</td>
<td>Domestic</td>
</tr>


<tr class="text-danger">
<td><br><b>Chandigarh</b></td>
<td></td>
<td></td>
<td></td>
<td>

</td>

</tr>
<tr valign="top">
<td>Chandigarh</td>
<td>VICG</td>
<td>IXC</td>
<td>Chandigarh Air Force Station</td>
<td>Civil enclave</td>
</tr>
<tr valign="top">

<td>Chandigarh</td>
<td></td>
<td></td>
<td>Chandigarh International Airport</td>
<td>Future</td>
</tr>

<tr class="text-danger">
<td><b>Chhatisgarh</b></td>
<td></td>
<td></td>
<td></td>
<td>


</td>
</tr>
<tr valign="top">
<td>Bilaspur</td>
<td>VABI</td>
<td>PAB</td>
<td>Bilaspur Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Jagdalpur</td>

<td></td>
<td>JGB</td>
<td>Jagdalpur Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Raipur</td>
<td>VARP</td>
<td>RPR</td>
<td>Raipur Airport<br>Mana Airport</td>

<td>Domestic</td>
</tr>


<tr class="text-danger">
<td><br><b>Daman and Diu</b> Union Territory</td>
<td></td>
<td></td>
<td></td>
<td>

</td>
</tr>
<tr valign="top">
<td>Daman</td>

<td>VADN</td>
<td>NMB</td>
<td>Daman Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Diu</td>
<td></td>
<td>DIU</td>
<td>Diu Airport</td>

<td>Domestic</td>
</tr>


<tr class="text-danger">
<td><br><b>Delhi</b> Capital</td>
<td></td>
<td></td>
<td></td>
<td>

</td>
</tr>
<tr valign="top">
<td><b>Delhi</b></td>

<td>VIDP</td>
<td>DEL</td>
<td><a href="http://www.newdelhiairport.in" target="_blank">Indira Gandhi International Airport</a><br>
Palam Air Force Station</td>
<td>International</td>
</tr>
<tr valign="top">
<td>Delhi</td>
<td>VIDD</td>

<td></td>
<td>Safdarjung Airport</td>
<td>Domestic</td>
</tr>


<tr class="text-danger">
<td><b><br>Goa</b></td>
<td></td>
<td></td>
<td></td>
<td>

</td>
</tr>
<tr valign="top">

<td><b>Goa</b></td>
<td>VAGO</td>
<td>GOI</td>
<td>Dabolim Airport<br>Dabolim Naval Air Base</td>
<td>Civil enclave</td>
</tr>



<tr class="text-danger">
<td><br><b>Gujarat</b></td>
<td></td>

<td></td>
<td></td>
<td>

</td>
</tr>
<tr valign="top">
<td>Ahmedabad</td>
<td></td>
<td></td>
<td>Ahmedabad Aviation Club</td>
<td>Domestic</td>
</tr>
<tr valign="top">

<td>Gandhinagar</td>
<td>VAAH</td>
<td>AMD</td>
<td>Sardar Vallabhbhai Patel International Airport<br>
Gandhinagar Air Force Station</td>
<td>International</td>
</tr>

<tr valign="top">
<td>Bhavnagar</td>
<td>VABV</td>
<td>BHU</td>
<td>Bhavnagar Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Bhuj</td>
<td>VABJ</td>

<td>BHJ</td>
<td>Bhuj Airport<br>Shyamji Krishna Verma Airport<br>Rudra Mata Air Force Base</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Jamnagar</td>
<td>VAJM</td>
<td>JGA</td>

<td>Jamnagar Airport<br>Jamnagar Air Force Station</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Kandla</td>
<td>VAKE</td>
<td>IXY</td>
<td>Kandla Airport</td>

<td>Civil enclave</td>
</tr>
<tr valign="top">
<td>Keshod</td>
<td>VAKS</td>
<td>IXK</td>
<td>Keshod Airport</td>
<td>Civil enclave</td>
</tr>
<tr valign="top">
<td>Nalia</td>

<td></td>
<td></td>
<td>Nalia Air Base</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Palanpur</td>
<td></td>
<td></td>
<td>Palanpur Airport</td>
<td>Domestic</td>
</tr>

<tr valign="top">
<td>Porbunder</td>
<td>VAPR</td>
<td>PBD</td>
<td>Porbandar Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Rajkot</td>
<td>VARK</td>

<td>RAJ</td>
<td>Rajkot Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Surat</td>
<td>VASU</td>
<td>STV</td>
<td>Surat Airport</td>
<td>Domestic</td>

</tr>
<tr valign="top">
<td>Surendranagar</td>
<td>VASN</td>
<td>SUN</td>
<td>Zalawad Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Uttarlai</td>
<td>VIUT</td>

<td></td>
<td>Uttarlai Airport<br>
Uttarlai Air Force Station</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Vadodara (Baroda)</td>
<td>VABO</td>
<td>BDQ</td>

<td>Vadodara Airport (Harni Airport)<br>Vadodara Air Base</td>
<td>Domestic</td>
</tr>


<tr class="text-danger">
<td><br><b>Haryana</b></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr valign="top">

<td>Ambala</td>
<td>VIAM</td>
<td></td>
<td>Ambala Air Force Base</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Hisar</td>
<td></td>
<td></td>
<td>Hisar Flying Club</td>

<td>Domestic</td>
</tr>
<tr valign="top">
<td>Karnal</td>
<td></td>
<td></td>
<td>Karnal Flying Club</td>
<td>Domestic</td>
</tr>


<tr class="text-danger">
<td><br><b>Himachal Pradesh</b></td>
<td></td>

<td></td>
<td></td>
<td></td>
</tr>
<tr valign="top">
<td>Dharamsala</td>
<td>VIGG</td>
<td>DHM</td>
<td>Gaggal Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">

<td>Kulu</td>
<td>VIBR</td>
<td>KUU</td>
<td>Bhuntar Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td><b>Shimla</b></td>
<td>VISM</td>
<td>SLV</td>

<td>Shimla Airport</td>
<td>Domestic</td>
</tr>


<tr class="text-danger">
<td>Jammu and Kashmir</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr valign="top">
<td>Avantipur</td>
<td></td>

<td></td>
<td>Avantipur Air Base</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Jammu</td>
<td>VIJU</td>
<td>IXJ</td>
<td>Jammu Airport (Satwari Airport)</td>

<td>Civil enclave</td>
</tr>
<tr valign="top">
<td>Kargil</td>
<td></td>
<td></td>
<td>Kargil Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Ladakh</td>
<td></td>

<td></td>
<td>Fukche Advanced Landing Ground</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Leh</td>
<td>VILH</td>
<td>IXL</td>
<td>Leh Kushok Bakula Rimpochee Airport<br>Leh Air Base</td>

<td>Civil enclave</td>
</tr>
<tr valign="top">
<td>Srinagar</td>
<td>VISR</td>
<td>SXR</td>
<td>Srinagar Air Force Station</td>
<td>Domestic</td>

</tr>
<tr valign="top">
<td>Udhampur</td>
<td>VIUX</td>
<td></td>
<td>Udhampur Air Force Station</td>
<td>Domestic</td>
</tr>


<tr class="text-danger">
<td><br><b>Jharkhand</b></td>
<td></td>
<td></td>

<td></td>
<td></td>
</tr>
<tr valign="top">
<td>Chakulia</td>
<td>VECK</td>
<td></td>
<td>Chakulia Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Jamshedpur</td>

<td>VEJS</td>
<td>IXW</td>
<td>Sonari Airport</td>
<td>Civil enclave</td>
</tr>
<tr valign="top">
<td>Ranchi</td>
<td>VERC</td>
<td>IXR</td>
<td>Birsa Munda Airport</td>

<td>Civil enclave</td>
</tr>


<tr class="text-danger">
<td><br><b>Karnataka</b></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr valign="top">
<td><b>Bangalore</b><br>Bengaluru</td>
<td>VOBL</td>

<td>BLR</td>
<td><a href="http://www.bengaluruairport.com" target="_blank">Bengaluru International Airport<br>
Devanahalli Airport</a></td>
<td>International</td>
</tr>
<tr valign="top">
<td>Bangalore (Bengaluru)</td>
<td>VOBG</td>
<td></td>

<td>HAL Bangalore International Airport<br>Hindustan Airport</td>
<td>International</td>
</tr>
<tr valign="top">
<td>Bangalore (Bengaluru)</td>
<td></td>
<td></td>
<td>Jakkur Airfield</td>
<td>Domestic


</td>
</tr>
<tr valign="top">
<td>Bangalore (Bengaluru)</td>
<td>VOYK</td>
<td></td>
<td>Yelahanka Air Force Station</td>
<td>Domestic</td>
</tr>
<tr valign="top">

<td>Belgaum</td>
<td>VABM</td>
<td>IXG</td>
<td>Belgaum Airport</td>
<td>Civil enclave</td>
</tr>
<tr valign="top">
<td>Bellary</td>
<td>VOBI</td>
<td>BEP</td>

<td>Bellary Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Bidar</td>
<td>VOBR</td>
<td></td>
<td>Bidar Air Force Station</td>
<td>Domestic</td>
</tr>
<tr valign="top">

<td>Bijapur</td>
<td></td>
<td></td>
<td>Bijapur Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Hampi</td>
<td></td>
<td></td>
<td>Hampi Airport</td>
<td>Domestic</td>

</tr>
<tr valign="top">
<td>Hassan</td>
<td></td>
<td></td>
<td>Hassan Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Hubli</td>
<td></td>
<td>HBX</td>

<td>Hubli Airport<br>Hubli Air Base</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Shimoga</td>
<td></td>
<td></td>
<td>Shimoga Airport</td>
<td>Domestic

</td>

</tr>
<tr valign="top">
<td><b>Mangalore</b></td>
<td>VOML</td>
<td>IXE</td>
<td>Mangalore International Airport<br>Bajpe Airport</td>
<td>International</td>
</tr>
<tr valign="top">
<td>Mysore</td>

<td>VOMY</td>
<td>MYQ</td>
<td>Mandkalli Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Vidyanagar</td>
<td></td>
<td></td>
<td>Vidyanagar Airport</td>
<td>Domestic</td>

</tr>


<tr class="text-danger">
<td><br><b>Kerala</b></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr valign="top">
<td>Thiruvananthapuram<br>Trivandrum</td>
<td></td>
<td></td>
<td>Akkulam Air Base</td>

<td>Military</td>
</tr>
<tr valign="top">
<td>Thiruvananthapuram (Trivandrum)</td>
<td>VOTV</td>
<td>TRV</td>
<td>Trivandrum International Airport<br>Trivandrum Air Force Station</td>

<td>International<br>
Military</td>
</tr>
<tr valign="top">
<td>Kannur</td>
<td></td>
<td></td>
<td>Kannur Airport (on project)</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td><b>Kochi</b> Cochin</td>

<td>VOCI</td>
<td>COK</td>
<td><a href="http://www.cochin-airport.in" target="_blank">Cochin International Airport<br>Nedumbassery Airport</a></td>
<td>International</td>
</tr>
<tr valign="top">
<td>Kochi (Cochin)</td>
<td>VOCC</td>

<td></td>
<td>Cochin Naval Air Base</td>
<td>Civil enclave</td>
</tr>
<tr valign="top">
<td>Kozhikode (Calicut)</td>
<td>VOCL</td>
<td>CCJ</td>
<td>Calicut International Airport<br>Karipur Airport</td>
<td>International</td>
</tr>
<tr valign="top">
<td>Aranmula (Pathanamthitta)</td>
<td></td>
<td></td>
<td>Aranmula Airport (on project)</td>
<td>Domestic

</td>

</tr>


<tr class="text-danger">
<td><br><b>Lakshadweep</b></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr valign="top">
<td>Agatti</td>
<td>VOAT</td>
<td>AGX</td>

<td>Agatti Aerodrome</td>
<td>Domestic</td>
</tr>
<tr>
<td><br><b>Madhya Pradesh</b></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr valign="top">
<td>Barwani</td>
<td>VAKD</td>

<td></td>
<td><b>Barwani Airport</b></td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Bhopal</td>
<td>VABP</td>
<td>BHO</td>
<td>Bhopal Airport<br>Raja Bhoj Airport</td>

<td>Domestic</td>
</tr>
<tr valign="top">
<td>Gwalior</td>
<td>VIGR</td>
<td>GWL</td>
<td>Gwalior Airport<br>
Maharajpur Air Force Station</td>
<td>Domestic</td>

</tr>
<tr valign="top">
<td>Indore</td>
<td>VAID</td>
<td>IDR</td>
<td>Devi Ahilyabai Holkar Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Jabalpur</td>
<td>VAJB</td>

<td>JLR</td>
<td>Jabalpur Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Khajuraho</td>
<td>VAKJ</td>
<td>HJR</td>
<td>Khajuraho Airport</td>
<td>Domestic</td>

</tr>
<tr valign="top">
<td>Panna</td>
<td></td>
<td></td>
<td>Panna Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Satna</td>
<td>VIST</td>
<td>TNI</td>

<td>Satna Airport</td>
<td>Domestic</td>
</tr>


<tr class="text-danger">
<td><br><b>Maharashtra</b></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr valign="top">
<td>Aamby Valley</td>
<td></td>

<td></td>
<td>Aamby Valley Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Akola</td>
<td>VAAK</td>
<td>AKD</td>
<td>Akola Airport</td>
<td>Domestic</td>

</tr>
<tr valign="top">
<td>Aurangabad</td>
<td>VAAU</td>
<td>IXU</td>
<td>Aurangabad Airport<br>Chikkalthana Airport</td>
<td>Civil enclave</td>
</tr>
<tr valign="top">
<td>Deolali</td>

<td></td>
<td></td>
<td>Deolali Air Base</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Hadapsar</td>
<td></td>
<td></td>
<td>Hadapsar Airport</td>
<td>Domestic</td>
</tr>

<tr valign="top">
<td>Kolhapur</td>
<td>VAKP</td>
<td>KLH</td>
<td>Kolhapur Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Latur</td>
<td></td>
<td></td>

<td>Latur Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td><br><b>Mumbai</b></td>
<td>VABB</td>
<td>BOM</td>
<td><a href="http://www.csia.in" target="_blank">Chhatrapati Shivaji International Airport<br>
Mumbai Airport / Bombay Airport</a>
</td>
<td>International</td>
</tr>

<tr valign="top">
<td>Mumbai</td>
<td>VAJJ</td>
<td></td>
<td>Juhu Aerodrome</td>
<td>Domestic<br>Private</td>
</tr>
<tr valign="top">
<td>Nagpur</td>
<td>VANP</td>
<td>NAG</td>

<td>Dr. Babasaheb Ambedkar International Airport<br>Nagpur Air Force Station</td>
<td>International</td>
</tr>
<tr valign="top">
<td>Nanded</td>
<td>VAND</td>
<td>NDC</td>
<td>Nanded Airport</td>

<td>Domestic</td>
</tr>
<tr valign="top">
<td>Nasik</td>
<td>VANR</td>
<td>ISK</td>
<td>Gandhinagar Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Nasik</td>

<td>VAOZ</td>
<td></td>
<td>Ojhar Air Base</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Navi Mumbai</td>
<td></td>
<td></td>
<td>Navi Mumbai International Airport</td>
<td>Future</td>

</tr>
<tr valign="top">
<td><b>Pune</b><br>Poona</td>
<td>VAPO</td>
<td>PNQ</td>
<td>Pune International Airport<br>Lohegaon Air Force Station</td>
<td>International</td>
</tr>
<tr valign="top">

<td>Pune</td>
<td></td>
<td></td>
<td>NDA Gliderdrome</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Ratnagiri</td>
<td>VARG</td>
<td>RTC</td>
<td>Ratnagiri Airport</td>

<td>Domestic</td>
</tr>
<tr valign="top">
<td>Shirdi</td>
<td></td>
<td></td>
<td>Shirdi Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Solapur</td>
<td>VASL</td>

<td>SSE</td>
<td>Solapur Airport</td>
<td>Domestic</td>
</tr>


<tr class="text-danger">
<td><br><b>Manipur</b></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr valign="top">
<td>Imphal</td>

<td>VEIM</td>
<td>IMF</td>
<td>Imphal Airport (Tulihal Airport)</td>
<td>Domestic</td>
</tr>


<tr class="text-danger">
<td>Meghalaya</td>
<td></td>
<td></td>
<td></td>

<td></td>
</tr>
<tr valign="top">
<td>Shillong</td>
<td>VEBI</td>
<td>SHL</td>
<td>Shillong Airport - Umroi Airport<br>Barapani Air Force Station</td>
<td>Domestic</td>
</tr>


<tr class="text-danger">
<td><br><b>Mizoram</b></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr valign="top">
<td>Aizawl</td>
<td>VEAZ</td>
<td>AJL</td>
<td>Turial Air Base</td>

<td>Domestic</td>
</tr>


<tr class="text-danger">
<td><br><b>Nagaland</b></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr valign="top">
<td>Dimapur</td>
<td>VEMR</td>
<td>DMU</td>

<td>Dimapur Airport<br>Dimapur Air Base</td>
<td>Domestic</td>
</tr>


<tr class="text-danger">
<td><br><b>Orissa</b></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr valign="top">

<td><b>Bhubaneswar</b></td>
<td>VEBS</td>
<td>BBI</td>
<td>Biju Patnaik Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Cuttack</td>
<td></td>
<td></td>
<td>Charbatia Air Base</td>

<td>Domestic</td>
</tr>
<tr valign="top">
<td>Hirakud</td>
<td>VEHK</td>
<td></td>
<td>Hirakud Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Jharsuguda</td>

<td>VEJH</td>
<td></td>
<td>Jharsuguda Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Konark</td>
<td>VEKN</td>
<td></td>
<td>Konark Airport</td>
<td>Domestic</td>

</tr>
<tr valign="top">
<td>Rourkela</td>
<td>VERK</td>
<td>RRK</td>
<td>Rourkela Airport</td>
<td>Domestic</td>
</tr>


<tr class="text-danger">
<td><br><b>Pondicherry</b></td>

<td></td>
<td></td>
<td></td>
<td>

</td>
</tr>
<tr valign="top">
<td>Pondicherry</td>
<td>VOPC</td>
<td>PNY</td>
<td>Pondicherry Airport</td>
<td>Domestic</td>

</tr>


<tr class="text-danger">
<td><br><b>Punjab</b></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr valign="top">
<td>Adampur</td>
<td>VIAX</td>
<td></td>
<td>Sirsa Air Base<br>Adampur Air Force Station</td>

<td>Domestic</td>
</tr>
<tr valign="top">
<td><b>Amritsar</b></td>
<td>VIAR</td>
<td>ATQ</td>
<td>Raja Sansi International Airport<br>Guru Ram Das Airpor<br>Amritsar Air Force Station</td>
<td>International</td>

</tr>
<tr valign="top">
<td>Bathinda</td>
<td>VIBT</td>
<td>BUP</td>
<td>Bhisiana Air Base<br>
Bhatinda Air Force Station</td>
<td>Domestic</td>
</tr>
<tr valign="top">

<td>Halwara</td>
<td>VIHX</td>
<td></td>
<td>Halwara Air Force Base</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Ludhiana</td>
<td>VILD</td>
<td>LUH</td>

<td>Sahnewal Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Pathankot</td>
<td>VIPK</td>
<td>IXP</td>
<td>Pathankot Airport<br>
Pathankot Air Force Station</td>

<td>Civil enclave</td>
</tr>
<tr valign="top">
<td>Patiala</td>
<td>VIPL</td>
<td></td>
<td>Patiala Airport</td>
<td>Domestic</td>
</tr>

<tr class="text-danger">
<td><br><b>Rajasthan</b></td>

<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr valign="top">
<td>Ajmer</td>
<td></td>
<td></td>
<td>Ajmer Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Bikaner</td>

<td>VIBK</td>
<td>BKB</td>
<td>Nal Airport<br>Nal-Bikaner Air Force Station</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td><b>Jaipur</b></td>
<td>VIJP</td>

<td>JAI</td>
<td>Jaipur Airport<br>Sanganer Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Jaisalmer</td>
<td>VIJR</td>
<td>JSA</td>
<td>Jaisalmer Airport<br>Jaisalmer Air Force Station</td>

<td>Domestic</td>
</tr>
<tr valign="top">
<td>Jodhpur</td>
<td>VIJO</td>
<td>JDH</td>
<td>Jodhpur Airport<br>Jodhpur Air Force Station</td>
<td>Domestic</td>

</tr>
<tr valign="top">
<td>Kota</td>
<td>VIKO</td>
<td>KTU</td>
<td>Kota Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Suratgadh</td>
<td></td>

<td></td>
<td>Phalodi Air Base</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Udaipur</td>
<td>VAUD</td>
<td>UDR</td>
<td>Udaipur Airport<br>Maharana Pratap Airport, Dabok Airport</td>

<td>Domestic</td>
</tr>

<tr class="text-danger">
<td><br><b>Sikkim</b></td>
<td></td>
<td></td>
<td></td>
<td>

</td>
</tr>
<tr valign="top">
<td>Pakyong</td>
<td></td>

<td></td>
<td>Pakyong Airport</td>
<td>Future</td>
</tr>


<tr class="text-danger">
<td><br><b>Tamil Nadu</b></td>
<td></td>
<td></td>
<td></td>
<td>

</td>
</tr>
<tr valign="top">

<td>Arakkonam</td>
<td>VOAR</td>
<td></td>
<td>Arakkonam Naval Air Station</td>
<td>Civil enclave</td>
</tr>
<tr valign="top">
<td>Chennai (Madras)</td>
<td></td>
<td></td>

<td>Avadi Air Base</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td><b>Chennai</b><br>Madras</td>
<td>VOMM</td>
<td>MAA</td>
<td>Chennai International Airport<br> Meenambakkam Airport</td>

<td>International</td>
</tr>
<tr valign="top">
<td>Chennai (Madras)</td>
<td>VOTX</td>
<td></td>
<td>Tambaram Air Force Station</td>
<td>Domestic</td>
</tr>
<tr valign="top">

<td>Coimbatore</td>
<td>VOCB</td>
<td>CJB</td>
<td>Coimbatore International Airport</td>
<td>International</td>
</tr>
<tr valign="top">
<td>Hosur</td>
<td></td>
<td></td>
<td>Hosur Airport (Taneja Aero Space Airport)</td>
<td>Domestic

</td>
</tr>
<tr valign="top">
<td>Madurai</td>
<td>VOMD</td>
<td>IXM</td>
<td>Madurai International Airport<br>Madurai Air Force Station</td>
<td>International</td>

</tr>
<tr valign="top">
<td>Salem</td>
<td>VOSM</td>
<td>SXV</td>
<td>Salem Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Coimbatore (Sulur)</td>

<td>VOSX</td>
<td></td>
<td>Sulur Air Force Station<br>Coimbatore Air Force Station</td>
<td>Military</td>
</tr>
<tr valign="top">
<td>Thanjavur (Tanjore)</td>
<td>VOTJ</td>

<td>TJV</td>
<td>Thanjavur Air Force Station<br>(Tanjore AFS)</td>
<td>Military</td>
</tr>
<tr valign="top">
<td>Tiruchirapalli (Trichy)</td>
<td>VOTR</td>
<td>TRZ</td>

<td>Tiruchirapalli International Airport</td>
<td>International</td>
</tr>
<tr valign="top">
<td>Tuticorin</td>
<td></td>
<td>TCR</td>
<td>Tuticorin Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">

<td>Vellore</td>
<td>VOVR</td>
<td></td>
<td>Vellore Airport</td>
<td>Domestic</td>
</tr>


<tr class="text-danger">
<td>Tripura</td>
<td></td>
<td></td>
<td></td>
<td>


</td>
</tr>
<tr valign="top">
<td>Agartala</td>
<td>VEAT</td>
<td>IXA</td>
<td>Agartala Airport<br>Singerbhil Airport<br>Agartala Air Force Station</td>
<td>Civil enclave</td>

</tr>
<tr valign="top">
<td>Kailashahar</td>
<td>VEKR</td>
<td>IXH</td>
<td>Kailashahar Airport</td>
<td>Civil enclave</td>
</tr>
<tr valign="top">
<td>Kamalpur</td>
<td>VEKM</td>

<td>IXQ</td>
<td>Kamalpur Airport</td>
<td>Civil enclave</td>
</tr>
<tr valign="top">
<td>Khowai</td>
<td>VEKW</td>
<td>IXN</td>
<td>Khowai Airport</td>
<td>Civil enclave</td>

</tr>


<tr class="text-danger">
<td><br><b>Uttar Pradesh</b></td>
<td></td>
<td></td>
<td></td>
<td>

</td>
</tr>
<tr valign="top">
<td>Agra</td>
<td>VIAG</td>
<td>AGR</td>

<td>Kheria Airport / (Agra Air Force Station)</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Agra</td>
<td></td>
<td></td>
<td>Taj Airport</td>
<td>Domestic</td>
</tr>

<tr valign="top">
<td>Allahabad</td>
<td>VIAL</td>
<td>IXD</td>
<td>Allahabad Airport<br>Bamrauli Air Force Station</td>
<td>Civil enclave</td>
</tr>
<tr valign="top">
<td>Bakshi Ka Talab</td>

<td>VIBL</td>
<td></td>
<td>Bakshi Ka Talab Air Force Station</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Bareilly</td>
<td>VIBY</td>

<td></td>
<td>Bareilly Air Force Station</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Faizabad</td>
<td>VIBY</td>
<td></td>
<td>Faizabad Air Force Station</td>
<td>Domestic</td>
</tr>

<tr valign="top">
<td>Gorakhpur</td>
<td>VEGK</td>
<td>GOP</td>
<td>Gorakhpur Airport<br>Gorakhpur Air Force Station</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Jhansi</td>

<td>VIJN</td>
<td></td>
<td>Jhansi Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Kanpur</td>
<td></td>
<td></td>
<td>IIT Kanpur Airport</td>
<td>Domestic</td>

</tr>
<tr valign="top">
<td>Kanpur</td>
<td>VICX</td>
<td></td>
<td>Kanpur Airport<br>Chakehri Air Force Station</td>
<td>International</td>
</tr>
<tr valign="top">
<td>Kanpur</td>

<td>VIKA</td>
<td>KNU</td>
<td>Kanpur Civil Airport</td>
<td>National</td>
</tr>
<tr valign="top">
<td>Kanpur</td>
<td></td>
<td></td>
<td>Kanpur Chakeri</td>
<td>Domestic</td>

</tr>
<tr valign="top">
<td>Kanpur</td>
<td></td>
<td></td>
<td>HAL Kanpur Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Kasya\Kushinagar</td>
<td></td>
<td></td>
<td>Kasya Airport</td>

<td>Domestic</td>
</tr>
<tr valign="top">
<td>Lalitpur</td>
<td>VILP</td>
<td></td>
<td>Lalitpur Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td><br><b>Lucknow</b></td>

<td>VILK</td>
<td>LKO</td>
<td>Amausi Airport<br>Chaudhary Charan Singh International Airport</td>
<td>International</td>
</tr>
<tr valign="top">
<td>Saharanpur</td>
<td></td>
<td></td>

<td>Sarsawa Air Base, Saharanpur</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Varanasi (Benares)</td>
<td>VIBN</td>
<td>VNS</td>
<td>Varanasi Airport<br>Babatpur Airport</td>

<td>Domestic</td>
</tr>


<tr class="text-danger">
<td><br><b>Uttaranchal</b></td>
<td></td>
<td></td>
<td></td>
<td>

</td>
</tr>
<tr valign="top">
<td>Dehradun</td>
<td></td>

<td></td>
<td>Chakrata Air Base</td>
<td>Domestic

</td>
</tr>
<tr valign="top">
<td>Dehradun</td>
<td>VIDN</td>
<td>DED</td>
<td>Jolly Grant Airport</td>
<td>Domestic</td>

</tr>
<tr valign="top">
<td>Pantnagar</td>
<td>VIPT</td>
<td>PGH</td>
<td>Pantnagar Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Jaspur</td>
<td>VIPT</td>

<td>PGH</td>
<td>Jaspur Trade Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Pithoragarh</td>
<td>VIPT</td>
<td>PGH</td>
<td>Naini Saini Airport</td>
<td>Domestic</td>

</tr>

<tr class="text-danger">
<td><br><b>West Bengal</b></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr valign="top">
<td>Andal</td>
<td></td>
<td></td>
<td>Andal airport<br>
Durgapur aerotropolis</td>
<td>Future

</td>
</tr>
<tr valign="top">
<td>Balurghat</td>
<td>VEBG</td>
<td>RGH</td>
<td>Balurghat Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">

<td>Barrackpore</td>
<td>VEBR</td>
<td></td>
<td>Barrackpore Air Force Station</td>
<td>Military</td>
</tr>
<tr valign="top">
<td>Behala</td>
<td>VEBA</td>
<td></td>
<td>Behala Airport</td>

<td>Domestic

</td>
</tr>
<tr valign="top">
<td>Burnpur</td>
<td></td>
<td></td>
<td>Burnpur airport</td>
<td>Domestic</td>

</tr>
<tr valign="top">
<td>Cooch Behar</td>
<td>VECO</td>
<td>COH</td>
<td>Cooch Behar Airport</td>
<td>Domestic</td>
</tr>
<tr valign="top">
<td>Hasimara / Jalpaiguri</td>

<td>VEHX</td>
<td></td>
<td>Hashimara Air Base</td>
<td>Military

</td>
</tr>
<tr valign="top">
<td>Kalaikunda</td>
<td>VEDX</td>
<td></td>
<td>Kalaikunda Air Force Station</td>
<td>Military</td>
</tr>
<tr valign="top">
<td><br><b>Kolkata</b> Calcutta</td>
<td>VECC</td>
<td>CCU</td>
<td>Netaji Subhash Chandra Bose International Airport<br>Dum Dum Air Force Station</td>

<td>International</td>
</tr>
<tr valign="top">
<td>Malda (English Bazar)</td>
<td>VEMH</td>
<td>LDA</td>
<td>Malda Airport</td>
<td>Domestic</td>
</tr>

<tr valign="top">
<td>Panagarh</td>
<td>VEPH</td>
<td></td>
<td>Panagarh Air Force Station</td>
<td>Military</td>
</tr>


<tr valign="top">
<td>Siliguri</td>

<td>VEBD</td>
<td>IXB</td>
<td>Bagdogra Air Force Station</td>
<td>Civil enclave</td>
</tr>

<tr valign="top">
<td>Tarakeswar</td>
<td>VETK</td>
<td></td>
<td>Tarakeswar Airport</td>
<td>Closed/former</td>
</tr>

</tbody></table>
</center>
</div>
    </div>


<div class="container">


  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">        
        <small class="d-block mb-3 text-muted">METAR decoding site &bull; Created by Manivannan G.</small>
      </div>     
    </div>
  </footer>
</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/	X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	</body>

</html>