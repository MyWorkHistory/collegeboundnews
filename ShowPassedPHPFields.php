<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Show Passed PHP Parms</title>
</head>

<body>
	<p>Server_Name: <strong><?php echo $_SERVER['SERVER_NAME']; ?></strong> </p>
	Fields for _POST.
	<br />
<?php
		foreach ($_POST as $key => $value) {
		  echo "$key  =  $value <BR>";
		}
		//print_r($a);
	?>
	<br />
	Fields for _GET.
	<br />
	<?php
		foreach ($_GET as $key => $value) {
		  echo "$key  =  $value <BR>";
		}
		//print_r($a);
	?>
	
</body>
</html>
