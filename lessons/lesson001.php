<?php include_once('header.php'); ?>

<div class="row">
	<div class="page-header">
		<h1 class="text-primary text-center">Lección #1</h1>
	</div>

	<div class="container">
		<h3 class="text-center text-muted">
			<script>
				document.write("Este Texto Lo He Escrito Desde Javascript");
			</script>
		</h3>

		<p class="text-justify">
			Esta es la lección #1 del curso de <span class="enfasis">JavaScript</span>
		</p>

		<img src="../img/Impala.jpg" alt="No Se Encontró Nada..." width="35%" class="img-thumbnail" id="imagen">
	</div>
</div>

<script src="../js/jquery.js"></script>
<script src="../js/lesson001.js"></script>

<?php include_once('footer.php'); ?>