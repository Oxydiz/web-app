<html>

	<head>
		<meta charset="UTF-8">
		<title>My Webbapp</title>
	</head>

	<body>
	<?php
		$conf = json_decode(file_get_contents('app.conf'), true);
	?>
	</body>

	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript">
		var app = new App();
		app.run(<?php echo "'{$conf['server']}', {$conf['port']}" ?>);
	</script>

</html>
