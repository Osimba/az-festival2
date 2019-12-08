<?php include("views/headers/header.php") ?>

<main id="admin-page" class="text-center">
	<h1><?php echo $Leader->getLeaderInfo($_SESSION['leader'])['title']; ?> Admin Input</h1>

	<?php 
		for($i = 1; $i <= 3; $i++) {
			echo $Group->drawTable($i, $groupWeek[$i], $_SESSION['leader']);
	 ?>
	<br><br>

<?php } ?>


<div class="text-center update-nav">
	<img src="<?= IMAGE_DIR ?>loader.gif" id="loader" width="100px" style="display: none;">
	<br>
	<button id="update-data" class="btn btn-warning btn-block">Update</button>
</div>

</main>


<?php include("views/headers/footer.php"); ?>