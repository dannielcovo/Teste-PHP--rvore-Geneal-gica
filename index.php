<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arvore genealógica</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
</head>
<body>
<main>
	<section class="container">
		<div>
			<h1>Arvore genealógica</h1>
		</div>
		<span id="msg"></span>
		<form id="AjaxRequest">
			<div class="radio">
				<label><input type="radio" value='1' class="" id="1" name="avos" >Anselmo</label>
			</div>
			<div class="radio">
				<label><input type="radio" value='2' class="" id="2" name="avos" >João</label>
			</div>
			<div class="radio">
				<label><input type="radio" value='3' class="" id="3" name="avos" >Antonio</label>
			</div>
			<div id="pais" style="margin-top: 25px;">

			</div>
			<div id="filhos" style="margin-top: 25px;">

			</div>
		</form>

	</section>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>

<script></script>