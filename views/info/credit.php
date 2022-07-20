<?php include 'views/layouts/header.php';?>
	<main>
		<div class="container">
			<h2 class="title">Кредит</h2>
            <?php foreach($creditInfoList as $creditInfoParagraph):?>
                <p class="info_text">
                    <?php echo"$creditInfoParagraph <br>"; ?>
                </p>
            <?php endforeach;?>
		</div>
	</main>
<?php include 'views/layouts/footer.php';?>