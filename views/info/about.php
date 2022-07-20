<?php include 'views/layouts/header.php'; ?>
	<main>
		<div class="container">
			<h2 class="title">О магазине</h2>
			<?php foreach ($aboutInfoList as $aboutInfoParagraph): ?>
            <p class="info_text"><?php echo "$aboutInfoParagraph<br>" ?></p>
            <?php endforeach; ?>
		</div>
	</main>
<?php include 'views/layouts/footer.php';?>