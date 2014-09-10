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
		_ox.addAdUnit('537200280'); // Homepage Block 1
		_ox.addAdUnit('537200281'); // Homepage Block 2
		_ox.addAdUnit('537200282'); // Homepage Block 3
		_ox.addAdUnit('537200284'); // Site Skin
		_ox.addAdUnit('537200276'); // Billboard
		_ox.addAdUnit('537200313'); // Mobile Banner 1
		_ox.addAdUnit('537175638'); // Half Page 1
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
		_ox.fetchAds();
	</script>
	
</head>
<body>
	
	<!-- //////////////////// Site Skin \\\\\\\\\\\\\\\\\\\\ -->
	<script>_ox.showAdUnit('537200284');</script>
	<!-- \\\\\\\\\\\\\\\\\\\\ Site Skin //////////////////// -->
	
	<div class="wiffle">
		
		<!-- //////////////////// ROS Weather Widget \\\\\\\\\\\\\\\\\\\\ -->
		<div class="button-1 advert"><div id="button-1"><script>_ox.showAdUnit('537200302');</script></div></div>
		<!-- \\\\\\\\\\\\\\\\\\\\ ROS Weather Widget //////////////////// -->
		
		<hr>
		
		<!-- //////////////////// Billboard \\\\\\\\\\\\\\\\\\\\ -->
		<script>_ox.showAdUnit('537200276');</script>
		<!-- \\\\\\\\\\\\\\\\\\\\ Billboard //////////////////// -->
		
		<hr>
		
		<!-- //////////////////// Leaderboard 1 \\\\\\\\\\\\\\\\\\\\ -->
		<div class="leaderboard advert"><div id="leaderboard"><script>_ox.showAdUnit('537200277');</script></div></div>
		<!-- \\\\\\\\\\\\\\\\\\\\ Leaderboard 1 //////////////////// -->
		
		<!-- //////////////////// Mobile Banner \\\\\\\\\\\\\\\\\\\\ -->
		<div class="mobile-banner advert"><div id="mobile-banner"><script>_ox.showAdUnit('537200313');</script></div></div>
		<!-- \\\\\\\\\\\\\\\\\\\\ Mobile Banner //////////////////// -->
		
		<hr>
		
		<div class="w_row">
			
			<div class="w_col w_B300 w_C640 w_D980 Bla Cla Dla">
				
				<?php include('includes/meta.php'); ?>
				
			</div> <!-- /.w_col -->
			
			<div class="w_col w_B300 Blb Clb Dlb">
				
				<!-- //////////////////// Medium Rectangle 1 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="medium-rectangle advert"><div id="medium-rectangle-1"><script>_ox.showAdUnit('537200278');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ Medium Rectangle 1 //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// Half Page 1 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="half-page advert"><div id="half-page-1"><script>_ox.showAdUnit('537175638');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ Half Page 1 //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// ROS Column Block \\\\\\\\\\\\\\\\\\\\ -->
				<div class="column-block advert"><div id="column-block"><script>_ox.showAdUnit('331937');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ ROS Column Block //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// Homepage Block 1 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="column-block advert"><div id="homepage-block-1"><script>_ox.showAdUnit('537200280');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ Homepage Block 1 //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// Homepage Block 2 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="column-block advert"><div id="homepage-block-2"><script>_ox.showAdUnit('537200281');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ Homepage Block 2 //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// Homepage Block 3 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="column-block advert"><div id="homepage-block-3"><script>_ox.showAdUnit('537200282');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ Homepage Block 3 //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// Medium Rectangle 2 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="medium-rectangle advert"><div id="medium-rectangle-2"><script>_ox.showAdUnit('537200279');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ Medium Rectangle 2 //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// ROS go Widget \\\\\\\\\\\\\\\\\\\\ -->
				<div class="button-2 advert"><div id="button-2"><script>_ox.showAdUnit('537200304');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ ROS go Widget //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// ROS Adicio Widget \\\\\\\\\\\\\\\\\\\\ -->
				<div class="custom-1 advert"><div id="custom-1"><script>_ox.showAdUnit('537200303');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ ROS Adicio Widget //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// ROS Medium Rectangle 3 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="medium-rectangle advert"><div id="medium-rectangle-3"><script>_ox.showAdUnit('537200305');</script></div></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ ROS Medium Rectangle 3 //////////////////// -->
				
			</div> <!-- /.w_col -->
			
		</div> <!-- /.w_row -->
		
		<hr>
		
		<!-- //////////////////// ROS Leaderboard Bottom \\\\\\\\\\\\\\\\\\\\ -->
		<div class="leaderboard advert"><div id="leaderboard-bottom"><script>_ox.showAdUnit('537200307');</script></div></div>
		<!-- \\\\\\\\\\\\\\\\\\\\ ROS Leaderboard Bottom //////////////////// -->
		
		<!-- //////////////////// ROS Mobile Banner Bottom \\\\\\\\\\\\\\\\\\\\ -->
		<div class="mobile-banner advert"><div id="mobile-banner-bottom"><script>_ox.showAdUnit('537200312');</script></div></div>
		<!-- \\\\\\\\\\\\\\\\\\\\ ROS Mobile Banner Bottom //////////////////// -->
		
	</div> <!-- /.wiffle -->
	
	<?php include('includes/bottom.php'); ?>
	
</body>
</html>
