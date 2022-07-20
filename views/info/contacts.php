<?php include 'views/layouts/header.php';?>
	<main>
		<div class="container">
			<h2 class="title">Контакты</h2>
            <?php foreach($contactsInfoList as $contactsInfoParagraph):?>
                <p class="info_text">
                    <?php echo"$contactsInfoParagraph <br>"; ?>
                </p>
            <?php endforeach;?>
		</div>
	</main>
<?php include 'views/layouts/footer.php';?>