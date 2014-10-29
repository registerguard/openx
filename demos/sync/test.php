<!doctype html>
<html>
<head>
	
	<?php include('includes/head.php'); ?>
	<script>
		var _ox = OX();
		_ox.addAdUnit('537175630'); // Billboard
		_ox.addAdUnit('537175626'); // Leaderboard 1
		_ox.addAdUnit('537175627'); // Medium Rectangle 1
		_ox.addAdUnit('537175629'); // Medium Rectangle 2
		_ox.addAdUnit('537175639'); // Site Skin
		<?php parse_str($_SERVER['QUERY_STRING'], $topics); ?>
		// Content Topics:
		<?php foreach ($topics as $key => $value): ?>
		_ox.addContentTopic(<?=$key?>, '<?=$value?>');
		<?php endforeach; ?>
		// Variables:
		_ox.addVariable('bp', ((window.innerWidth <= 1005) ? 'm' : 'd')); // ... return "m" or "d", where 1005px is the break point between "mobile" and "desktop".
		_ox.fetchAds();
	</script>
	<!-- [END] OpenX -->
	
</head>
<body>
	
	<!-- //////////////////// Site Skin \\\\\\\\\\\\\\\\\\\\ -->
	<script>_ox.showAdUnit('537175639');</script>
	<!-- \\\\\\\\\\\\\\\\\\\\ Site Skin //////////////////// -->
	
	<div class="wiffle">
		
		<!-- //////////////////// Billboard \\\\\\\\\\\\\\\\\\\\ -->
		<script>_ox.showAdUnit('537175630');</script>
		<!-- \\\\\\\\\\\\\\\\\\\\ Billboard //////////////////// -->
		
		<hr>
		
		<!-- //////////////////// Leaderboard 1 \\\\\\\\\\\\\\\\\\\\ -->
		<div class="advert"><div id="leaderboard-1"><script>_ox.showAdUnit('537175626');</script></div></div>
		<!-- \\\\\\\\\\\\\\\\\\\\ Leaderboard 1 //////////////////// -->
		
		<hr>
		
		<div class="w_row">
			
			<div class="w_col w_B300 w_C640 w_D980 Bla Cla Dla">
				
				<?php include('includes/meta.php'); ?>
				
			</div> <!-- /.w_col -->
			
			<div class="w_col w_B300 Blb Clb Dlb">
				
				<!-- //////////////////// Medium Rectangle 1 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="advert"><div id="medium-rectangle-1"><script>_ox.showAdUnit('537175627');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ Medium Rectangle 1 //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// Medium Rectangle 2 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="advert"><div id="medium-rectangle-2"><script>_ox.showAdUnit('537175629');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ Medium Rectangle 2 //////////////////// -->
				
			</div> <!-- /.w_col -->
			
		</div> <!-- /.w_row -->
		
	</div> <!-- /.wiffle -->
	
	<?php include('includes/bottom.php'); ?>
	
</body>
</html>
