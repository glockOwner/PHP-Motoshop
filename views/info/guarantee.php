<?php include 'views/layouts/header.php';?>
	<main>
		<div class="container">
			<h2 class="title">Гарантия</h2>
            <?php foreach($guaranteeInfoList as $guaranteeInfoParagraph):?>
                <p class="info_text">
                    <?php echo"$guaranteeInfoParagraph <br>"; ?>
                </p>
            <?php endforeach;?>
		</div>
	</main>
<?php include 'views/layouts/footer.php';?>
