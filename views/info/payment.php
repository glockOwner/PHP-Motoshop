<?php include 'views/layouts/header.php';?>
	<main>
		<div class="container">
			<h2 class="title">Как купить</h2>
            <?php foreach($paymentInfoList as $paymentInfoParagraph):?>
                <p class="info_text">
                    <?php echo"$paymentInfoParagraph <br>"; ?>
                </p>
            <?php endforeach;?>
		</div>
	</main>

<?php include 'views/layouts/footer.php';?>