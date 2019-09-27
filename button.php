<?php 

if (isset($_POST['S1on']))
{
	$file1 = "buttonStatus.txt";
	$handle = fopen($file1,'w+');
	
	$onstring = "S1ON";
	fwrite($handle,$onstring);
	fclose($handle);
	header('location:index.php');

}

else if (isset($_POST['S1off']))
{	
	$file1 = "buttonStatus.txt";
	$handle = fopen($file1,'w+');

	$offstring = "S1OFF";
	fwrite($handle, $offstring);
	fclose($handle);
	header('location:index.php');
 }

else if (isset($_POST['S2on']))
{
	$file2 = "buttonStatus2.txt";
	$handle = fopen($file2,'w+');

	$offstring = "S1OFF";
	fwrite($handle, $offstring);
	fclose($handle);
	header('location:index.php');	
 }


 else if (isset($_POST['S2off']))
{	
	$file2 = "buttonStatus2.txt";
	$handle = fopen($file2,'w+');

	$offstring = "S1OFF";
	fwrite($handle, $offstring);
	fclose($handle);
	header('location:index.php');	
 }
 
