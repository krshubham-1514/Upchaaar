<!DOCTYPE html>
<html>
	<head>
		<title>
		</title>
	</head>
	<link rel="stylesheet" rel="css/text" href="form.css">
<body>

<p id="demo"></p>
<form method="post" action="" id="form">
<ul>
	<button onClick="myFunction()">Generate referance code</button>
</ul>
</form>
<script>
function myFunction() {
    document.getElementById("demo").innerHTML = Math.random();
}
</script>

</body>
</html>

