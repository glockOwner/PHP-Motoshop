<?php include 'views/layouts/header.php';?>
	<main>
		<div class="container">
			<h2 class="title">Доставка</h2>
			<?php foreach($deliveryInfoList as $deliveryInfoParagraph):?>
                <p class="info_text">
                    <?php echo"$deliveryInfoParagraph <br>"; ?>
                </p>
            <?php endforeach;?>
		</div>
	</main>
<?php include 'views/layouts/footer.php';?>