<?php  
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>next page</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
	<?php echo "session value = ".$_SESSION["ABCD"]; ?>
	<input type="number" name="" value="<?php echo $_SESSION['ABCD'];?>" id="hehe1">
</body>
	<script type="text/javascript">
		function DisplayKar() {
			alert("DisplayKar me enter kar");
			document.getElementById('hehe1').value = <?php echo "$meraid";?>;
		}
	</script>
</html>