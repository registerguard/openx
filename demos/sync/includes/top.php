<!doctype html>
<html lang="en" dir="ltr">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	
	<title>Synchronous javascript: Multi-ad unit ad tags</title>
	
	<link rel="stylesheet" href="../assets/styles/wiffle.min.css">
	<link rel="stylesheet" href="../assets/styles/onoff.css">
	<link rel="stylesheet" href="../assets/styles/styles.css">
	
	<link rel="stylesheet" href="//advertising.registerguard.com/assets/billboard/1.4/css/billboard.css">
	
	<script src="//ox-d.registerguard.com/w/1.0/jstag"></script>
	<script>
		var _ox = OX();
		// Page Type: Section
		_ox.addAdUnit('537175630'); // Billboard
		_ox.addAdUnit('537175626'); // Leaderboard 1
		_ox.addAdUnit('537175856'); // Mobile Banner 1
		_ox.addAdUnit('537175627'); // Medium Rectangle 1
		_ox.addAdUnit('537175638'); // Half Page 1
		_ox.addAdUnit('537175631'); // Homepage Block 1
		_ox.addAdUnit('537175629'); // Medium Rectangle 2
		// ROS:
		_ox.addAdUnit('328209');    // Leaderboard Bottom
		_ox.addAdUnit('537187629'); // Mobile Banner 1 - Bottom
		<?php parse_str($_SERVER['QUERY_STRING'], $topics); ?>
		// Content Topics:
		<?php foreach ($topics as $key => $value): ?>
		_ox.addContentTopic(<?=$key?>, '<?=$value?>');
		<?php endforeach; ?>
		_ox.fetchAds();
	</script>
	
</head>
<body>
	
	<div class="wiffle">
