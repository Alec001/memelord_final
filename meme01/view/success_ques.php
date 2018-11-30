<?php
	require('header.php');
?>
<body align = "center">
	<div class="alert alert-success">
	<?php
		echo "<h1><a href='topic.php?topid=$_GET[topid]'>New question</a> successfully added. </h1>" ;
	?>
	</div>
</body>
<?php
  require('footer.php');
?>
