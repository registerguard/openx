<!doctype html>
<html>
<head>
	
	<?php include('includes/head.php'); ?>
	<script>
		var _ox = OX();
		_ox.addAdUnit('537200276'); // Billboard
		_ox.addAdUnit('537200277'); // Leaderboard 1
		_ox.addAdUnit('537200313'); // Mobile Banner
		_ox.addAdUnit('537200278'); // Medium Rectangle 1
		_ox.addAdUnit('537200279'); // Medium Rectangle 2
		_ox.addAdUnit('537200284'); // Site Skin
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
	<script>_ox.showAdUnit('537200284');</script>
	<!-- \\\\\\\\\\\\\\\\\\\\ Site Skin //////////////////// -->
	
	<div class="wiffle">
		
		<!-- //////////////////// ROS Weather Widget \\\\\\\\\\\\\\\\\\\\ -->
		<div class="advert"><div id="ros-weather-widget"><script>_ox.showAdUnit('537200302');</script></div></div>
		<!-- \\\\\\\\\\\\\\\\\\\\ ROS Weather Widget //////////////////// -->
		
		<hr>
		
		<!-- //////////////////// Billboard \\\\\\\\\\\\\\\\\\\\ -->
		<script>_ox.showAdUnit('537200276');</script>
		<!-- \\\\\\\\\\\\\\\\\\\\ Billboard //////////////////// -->
		
		<hr>
		
		<!-- //////////////////// Leaderboard 1 \\\\\\\\\\\\\\\\\\\\ -->
		<div class="advert"><div id="leaderboard-1"><script>_ox.showAdUnit('537200277');</script></div></div>
		<!-- \\\\\\\\\\\\\\\\\\\\ Leaderboard 1 //////////////////// -->
		
		<!-- //////////////////// Mobile Banner \\\\\\\\\\\\\\\\\\\\ -->
		<div class="advert"><div id="mobile-banner"><script>_ox.showAdUnit('537200313');</script></div></div>
		<!-- \\\\\\\\\\\\\\\\\\\\ Mobile Banner //////////////////// -->
		
		<hr>
		
		<div class="w_row">
			
			<div class="w_col w_B300 w_C640 w_D980 Bla Cla Dla">
				
				<?php include('includes/meta.php'); ?>
				
			</div> <!-- /.w_col -->
			
			<div class="w_col w_B300 Blb Clb Dlb">
				
				<!-- //////////////////// Medium Rectangle 1 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="advert"><div id="medium-rectangle-1"><script>_ox.showAdUnit('537200278');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ Medium Rectangle 1 //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// ROS Column Block \\\\\\\\\\\\\\\\\\\\ -->
				<div class="advert"><div id="ros-column-block"><script>_ox.showAdUnit('331937');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ ROS Column Block //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// Medium Rectangle 2 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="advert"><div id="medium-rectangle-2"><script>_ox.showAdUnit('537200279');</script></div></div>
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
				<div class="advert"><div id="ros-medium-rectangle-3"><script>_ox.showAdUnit('537200305');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ ROS Medium Rectangle 3 //////////////////// -->
				
			</div> <!-- /.w_col -->
			
		</div> <!-- /.w_row -->
		
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
