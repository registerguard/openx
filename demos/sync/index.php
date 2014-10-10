<!doctype html>
<html>
<head>
	
	<?php include('includes/head.php'); ?>
	<script>
		var _ox = OX();
		_ox.addAdUnit('537229379'); // Billboard
		_ox.addAdUnit('537229382'); // Medium Rectangle 1
		_ox.addAdUnit('537229386'); // Medium Rectangle 2
		_ox.addAdUnit('537229391'); // Medium Rectangle 3
		_ox.addAdUnit('537229392'); // Homepage Block 1
		_ox.addAdUnit('537229394'); // Homepage Block 2
		_ox.addAdUnit('537229395'); // Homepage Block 3
		_ox.addAdUnit('537229396'); // Site Skin
		_ox.addAdUnit('537229537'); // Leaderboard Bottom
		_ox.addAdUnit('537200302'); // ROS Weather Widget
		_ox.addAdUnit('331937');    // ROS Column Block
		_ox.addAdUnit('537200303'); // ROS Adicio Widget
		_ox.addAdUnit('537200304'); // ROS go Widget
		_ox.addAdUnit('537200305'); // ROS Medium Rectangle 3
		_ox.addAdUnit('537200307'); // ROS Leaderboard Bottom
		_ox.addAdUnit('537200312'); // ROS Mobile Banner Bottom
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
	<script>_ox.showAdUnit('537229396');</script>
	<!-- \\\\\\\\\\\\\\\\\\\\ Site Skin //////////////////// -->
	
	<div class="wiffle">
		
		<!-- //////////////////// ROS Weather Widget \\\\\\\\\\\\\\\\\\\\ -->
		<div class="advert"><div id="ros-weather-widget"><script>_ox.showAdUnit('537200302');</script></div></div>
		<!-- \\\\\\\\\\\\\\\\\\\\ ROS Weather Widget //////////////////// -->
		
		<hr>
		
		<!-- //////////////////// Billboard \\\\\\\\\\\\\\\\\\\\ -->
		<script>_ox.showAdUnit('537229379');</script>
		<!-- \\\\\\\\\\\\\\\\\\\\ Billboard //////////////////// -->
		
		<hr>
		
		<div class="w_row">
			
			<div class="w_col w_B300 w_C640 w_D980 Bla Cla Dla">
				
				<?php include('includes/meta.php'); ?>
				
			</div> <!-- /.w_col -->
			
			<div class="w_col w_B300 Blb Clb Dlb">
				
				<!-- //////////////////// Medium Rectangle 1 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="advert"><div id="medium-rectangle-1"><script>_ox.showAdUnit('537229382');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ Medium Rectangle 1 //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// ROS Column Block \\\\\\\\\\\\\\\\\\\\ -->
				<div class="advert"><div id="ros-column-block"><script>_ox.showAdUnit('331937');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ ROS Column Block //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// Homepage Block 1 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="advert"><div id="homepage-block-1"><script>_ox.showAdUnit('537229392');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ Homepage Block 1 //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// Homepage Block 2 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="advert"><div id="homepage-block-2"><script>_ox.showAdUnit('537229394');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ Homepage Block 2 //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// Homepage Block 3 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="advert"><div id="homepage-block-3"><script>_ox.showAdUnit('537229395');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ Homepage Block 3 //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// Medium Rectangle 2 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="advert"><div id="medium-rectangle-2"><script>_ox.showAdUnit('537229386');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ Medium Rectangle 2 //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// ROS go Widget \\\\\\\\\\\\\\\\\\\\ -->
				<div class="advert"><div id="ros-go-widget"><script>_ox.showAdUnit('537200304');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ ROS go Widget //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// ROS Adicio Widget \\\\\\\\\\\\\\\\\\\\ -->
				<div class="advert"><div id="ros-adicio-widget"><script>_ox.showAdUnit('537200303');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ ROS Adicio Widget //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// ROS Medium Rectangle 3 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="advert"><div id="ros-medium-rectangle-3"><script>_ox.showAdUnit('537229391');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ ROS Medium Rectangle 3 //////////////////// -->
				
			</div> <!-- /.w_col -->
			
		</div> <!-- /.w_row -->
		
		<hr>
		
		<!-- //////////////////// Leaderboard Bottom \\\\\\\\\\\\\\\\\\\\ -->
		<div class="advert"><div id="leaderboard-bottom"><script>_ox.showAdUnit('537229537');</script></div></div>
		<!-- \\\\\\\\\\\\\\\\\\\\ Leaderboard Bottom //////////////////// -->
		
		<hr>
		
		<!-- //////////////////// ROS Leaderboard Bottom \\\\\\\\\\\\\\\\\\\\ -->
		<div class="advert"><div id="ros-leaderboard-bottom"><script>_ox.showAdUnit('537200307');</script></div></div>
		<!-- \\\\\\\\\\\\\\\\\\\\ ROS Leaderboard Bottom //////////////////// -->
		
		<!-- //////////////////// ROS Mobile Banner Bottom \\\\\\\\\\\\\\\\\\\\ -->
		<div class="advert"><div id="ros-mobile-banner-bottom"><script>_ox.showAdUnit('537200312');</script></div></div>
		<!-- \\\\\\\\\\\\\\\\\\\\ ROS Mobile Banner Bottom //////////////////// -->
		
	</div> <!-- /.wiffle -->
	
	<?php include('includes/bottom.php'); ?>
	
</body>
</html>
