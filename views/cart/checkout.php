<?php include 'views/layouts/header.php';?>
	<main>
		<div class="container cart_container">
			<p class="reg_article cart_article">Моя корзина</p>
			<div class="lc_info">
				<h2 class="paragraph_stile cart_paragraph checkout_article">Контактные данные</h2>
                <b class="paragraph_stile checkout_article">Общая сумма заказа: <?php echo $totalPrice;?>. Всего товаров: <?php echo $totalQuantity;?></b>
				<form method="POST" class="reg checkout">
					<input class="input_style" type="text" name="name" placeholder="Имя" value="<?php echo $user['name'];?>">
					<input class="input_style" type="text" name="mail" placeholder="Email" value="<?php echo $user['email'];?>">
					<input class="input_style" type="text" name="phone" placeholder="Номер телефона">
					<input class="input_style" type="text" name="postcode" placeholder="Почтовый индекс">
					<input class="input_style" type="text" name="locality" placeholder="Населённый пункт">
					<input class="input_style" type="text" name="delivery_address" placeholder="Адрес доставки">
					<input class="reg_button checkout_button" type="submit" name="reg_checkout" value="Оформить заказ">
				</form>
                <?php if ($result): ?>
                        <p class="paragraph_stile"><font color="green">Ваш заказ отправлен! Ожидайте звонка</font></p>
                <?php endif; ?>
                <?php if ($errors): ?>
                    <?php foreach ($errors as $error): ?>
                        <p class="paragraph_stile"><font color="red"><?php echo $error;?></font></p>
                    <?php endforeach; ?>
                <?php endif; ?>
			</div>
	</main>
<?php include 'views/layouts/footer.php';?>