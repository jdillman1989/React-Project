<html>

<head>

	<title>Middle Earth Interactive Map</title>

	<script type="text/javascript" src="js/middleearth.js"></script>

	<link rel='stylesheet' href='temp/style.css' type='text/css' media='all' />
</head>

<body>

	<div class="container">

		<div class="sidebar">

			<div class="region-info">

				<h2>Test</h2>

				<p>This is test info for the initial app layout.</p>
			</div>

			<div class="region-image">
				
				<?php @include("lotr.svg"); ?>
			</div>
		</div>

		<div class="map">
			
			<?php @include("ME.svg"); ?>
		</div>
	</div>
</body>

</html>