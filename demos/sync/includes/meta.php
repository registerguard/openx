<h1>
	Synchronous javascript:
	<br>
	<a href="http://docs.openx.com/enterprise/#adtagguide_synchjs_struct_multi.html">Multi-ad unit ad tags</a>
</h1>

<?php $qs = ( ! empty($_SERVER['QUERY_STRING'])) ? '?' . $_SERVER['QUERY_STRING'] : ''; ?>

<p><b>Page template types:</b> <a href="./<?=$qs?>">Homepage</a> | <a href="section.php<?=$qs?>">Section Front</a> | <a href="story.php<?=$qs?>">Story Page</a></p>

<p>
	<b>Content Topic presets:</b> <a href="?3=business&amp;3001=local&amp;3002=blue%20chip">Business</a> | <a href="?6=entertainment">Entertainment</a> (manually change in URL)
	<?php if ( ! empty($topics)): ?>
		<br>
		<b>&rarr; Currently selected:</b> <?php foreach ($topics as $key => $value): ?><?=$key?>=<?=$value?> <? endforeach; ?>
	<?php endif; ?>
</p>

<p><b>Note:</b> Although the “<a href="https://docs.google.com/spreadsheets/d/1Qa0ambORhI9jYjIdGD79SjLkCQggg89MEtjR6liIm8g" target="_blank">Content Topics</a>” appear hierarchical; targeting a top-level content topic does not target its sub-topics. For example, targeting the top-level content topic, Automotive, does not target its sub-topics, Automotive: Trucks or Automotive: Cars (<a href="http://docs.openx.com/ad_server/#targeting_doc_contenttopic.html">source</a>).</p>
