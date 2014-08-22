<!doctype html>
<html lang="en" dir="ltr">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	
	<title>Synchronous javascript: Multi-ad unit ad tags</title>
	
	<link rel="stylesheet" href="../assets/styles/wiffle.min.css">
	<link rel="stylesheet" href="../assets/styles/onoff.css">
	<link rel="stylesheet" href="../assets/styles/styles.css">
	
	<link rel="stylesheet" href="http://advertising.registerguard.com/assets/billboard/1.4/css/billboard.css">
	
	<script src="http://ox-d.registerguard.com/w/1.0/jstag"></script>
	<script>
		var _ox = OX();
		_ox.addAdUnit('537175630'); // Billboard
		_ox.addAdUnit('537175626'); // Leaderboard 1
		_ox.addAdUnit('537175856'); // Mobile Banner 1
		_ox.addAdUnit('537175627'); // Medium Rectangle 1
		_ox.addAdUnit('537175631'); // Homepage Block 1
		_ox.addAdUnit('537175629'); // Medium Rectangle 2
		_ox.addAdUnit('328209');    // Leaderboard ROS
		<?php parse_str($_SERVER['QUERY_STRING'], $topics); ?>
		<?php foreach ($topics as $key => $value): ?>_ox.addContentTopic(<?=$key?>, '<?=$value?>');<?php endforeach; ?>
		_ox.fetchAds();
	</script>
	
</head>
<body>
	
	<div class="wiffle">
		
		<!-- //////////////////// Billboard \\\\\\\\\\\\\\\\\\\\ -->
		<script>_ox.showAdUnit('537175630');</script>
		<!-- \\\\\\\\\\\\\\\\\\\\ Billboard //////////////////// -->
		
		<hr>
		
		<!-- //////////////////// Leaderboard 1 \\\\\\\\\\\\\\\\\\\\ -->
		<div class="leaderboard advert"><script>_ox.showAdUnit('537175626');</script></div>
		<!-- \\\\\\\\\\\\\\\\\\\\ Leaderboard 1 //////////////////// -->
		
		<!-- //////////////////// Mobile Banner 1 \\\\\\\\\\\\\\\\\\\\ -->
		<div class="leaderboard advert"><script>_ox.showAdUnit('537175856');</script></div>
		<!-- \\\\\\\\\\\\\\\\\\\\ Mobile Banner 1 //////////////////// -->
		
		<hr>
		
		<div class="w_row">
			
			<div class="w_col w_B300 w_C640 w_D980 Bla Cla Dla">
				
				<h1>
					Synchronous javascript:
					<br>
					<a href="http://docs.openx.com/enterprise/#adtagguide_synchjs_struct_multi.html">Multi-ad unit ad tags</a>
				</h1>
				
				<p>
					<b>Page Type:</b> Section
					<br>
					<b><a href="https://docs.google.com/spreadsheets/d/1Qa0ambORhI9jYjIdGD79SjLkCQggg89MEtjR6liIm8g" target="_blank">Content Topics</a>:</b> <?php foreach ($topics as $key => $value): ?><?=$key?>=<?=$value?> <? endforeach; ?>
				</p>
				
				<p><b>Presets:</b> <a href="?3=business&amp;3001=local&amp;3002=blue%20chip">Business</a> | <a href="?6=entertainment">Entertainment</a></p>
				
				<p><b>Note:</b> Although the content topics appear hierarchical; targeting a top-level content topic does not target its sub-topics. For example, targeting the top-level content topic, Automotive, does not target its sub-topics, Automotive: Trucks or Automotive: Cars (<a href="http://docs.openx.com/ad_server/#targeting_doc_contenttopic.html">source</a>).</p>
				
			</div> <!-- /.w_col -->
			
			<div class="w_col w_B300 Blb Clb Dlb">
				
				<!-- //////////////////// Medium Rectangle 1 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="medium_rectangle advert"><script>_ox.showAdUnit('537175627');</script></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ Medium Rectangle 1 //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// Homepage Block 1 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="column_block advert"><script>_ox.showAdUnit('537175631');</script></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ Homepage Block 1 //////////////////// -->
				
				<hr>
				
				<!-- //////////////////// MEDIUM RECTANGLE 2 \\\\\\\\\\\\\\\\\\\\ -->
				<div class="medium_rectangle advert"><script>_ox.showAdUnit('537175629');</script></div>
				<!-- \\\\\\\\\\\\\\\\\\\\ MEDIUM RECTANGLE 2 //////////////////// -->
				
			</div> <!-- /.w_col -->
			
		</div> <!-- /.w_row -->
		
		<hr>
		
		<!-- //////////////////// LEADERBOARD BOTTOM \\\\\\\\\\\\\\\\\\\\ -->
		<div class="leaderboard advert"><script>_ox.showAdUnit('328209');</script></div>
		<!-- \\\\\\\\\\\\\\\\\\\\ LEADERBOARD BOTTOM //////////////////// -->
		
	</div> <!-- /.wiffle -->
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
	<script src="http://advertising.registerguard.com/assets/billboard/1.4/js/billboard.js"></script>
	
	<script>
		
		$(document).ready(function() {});
		
	</script>
	
</body>
</html>