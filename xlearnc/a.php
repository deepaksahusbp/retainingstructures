<?php 
		session_start();
		$_SESSION["ABCD"] = 0;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
	<h1>json</h1>
	<a href="b.php"><button type="submit">NEXT</button></a>
	<a href="c.php"><button type="submit">C page</button></a>
</body>
<script type="text/javascript">
	var t1,t2;
	var emps = [];
	var emp1 = {};
	t1 = 145;
	emp1.id = t1;
	emp1.name = 'Durgesh';
	emp1.addr = 'Pune';
	emps.push(emp1);
	
	t2 = 153;
	console.log(t1,t2);
	console.log(emps);
	$.ajax({
		url:"b.php",
		method: "post",
		data: { emps : JSON.stringify( emps ) },
		success: function(res) {
			console.log(res);
		}
	})
</script>
</html>