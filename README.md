# METAR-Analyze
A simple php web based project to acquire, decode and generate a human (rookie*) comprehendable format.

# Getting started
Download the zip file, extract it onto your server.
Go to your database management wizard (phpMyadmin) and create a database.
Once created, import the "database.sql" file onto your database
Now, go to server.php and on line 4, configure it by entering relevant data of your database (server, user, password, database)
...Your decoder is ready!

# How to use it?

This site fetches and decodes METAR data into a human readable format. Enter the 4 lettered ICAO code of your desired location. The list of available airports are given below. Press the "Get Details" button to initiate the decoding.
