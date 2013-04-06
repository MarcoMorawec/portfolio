<footer class="footer navbar-fixed-bottom">

	
	
		<div class="span2 offset pull-right">
			<p>&copy 20<?php echo date("y") ?> Marco Morawec</p>
		</div>


<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery.pageslide.min.js"></script>
<script>
$(".second").pageslide({ direction: "right", modal: true });
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="./js/jquery.backstretch.min.js"></script>
<script type="text/javascript">
  $("<?php if ($currentPage == 'index.php') {echo 'body'; } ?>").backstretch("./img/background/cbckg.jpg");
  $("<?php if ($currentPage == 'stuffivedone.php') {echo '.stuff-done-section'; } ?>").backstretch("./img/background/test.jpg");
  $("<?php if ($currentPage == 'stuffimdoing.php') {echo '.stuff-doing-section'; } ?>").backstretch("./img/background/test.jpg");



</script>


</footer>