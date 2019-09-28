<script type="text/javascript">
  setInterval("my_function();",10000); 
 
    function my_function(){
        window.location = location.href;
    }
</script>

<DOCKTYPE html>
<html>

<head>
	
	<meta charset="utf-8">
		<title>IoT Home Automation</title>


</head>


<body>

<h1>IoT Home Automation</h1>
<form action="button.php" method="POST">
	<input type="submit" name="S1on" id="S1on" value="Turn Light On">
	<input type="submit" name="S1off" id="S1off" value="Turn Light Off">
	<input type="submit" name="S2on" id="S2on" value=" Window Open">
	<input type="submit" name="S2off" id="S2off" value="Window close">
</form>

<?php 

$r=file_get_contents('./read3.txt',true);
echo "$r";

?>


</body>
</html> 

