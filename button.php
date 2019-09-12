<?php 
$file = "buttonStatus.txt";
$handle = fopen($file,'w+');
if (isset($_POST['S1on']))
{
	
	$onstring = "S1ON";
	fwrite($handle,$onstring);
	fclose($handle);

	print "
		<html>

			<head>
				<title>IoT Led Test</title>
			</head>


			<body>
				<h1>IoT LED Test</h1>
				<h2>On button has been pressed. </h2>
			</body>

		</html> ";
}




else if (isset($_POST['S1off']))
{
	$offstring = "S1OFF";
	fwrite($handle, $offstring);
	fclose($handle);
	print"<html>

		<head>
	
		<title>IoT Led Test</title>
		
		</head>

		<body>

			<h1>IoT LED Test</h1>
			<h2>Off button has been pressed. </h2>
		</body>
		</html> ";
 }
