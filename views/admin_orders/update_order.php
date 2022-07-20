<?php include 'views/layouts/header.php';?>
    <link rel="stylesheet" type="text/css" href="../../template/styles/styles.css">
	<main>
		<div class="container cart_container">
			<p class="reg_article cart_article">Админпанель</p>
            <a href="/admin/order" style="font-size: 40px;text-decoration: none;color: grey;width: 40px;">🠔</a>
			<div class="lc_info">
				<h2 class="paragraph_stile cart_paragraph checkout_article">Изменить заказ</h2>
				<form method="POST" class="reg create_product" enctype="multipart/form-data">
					<input value="<?php echo $order['user_name']?>" class="input_style" type="text" name="user_name" placeholder="Имя клиента">
					<input value="<?php echo $order['user_phone']?>" class="input_style" type="text" name="user_phone" placeholder="Телефон клиента">
					<input value="<?php echo $order['user_mail']?>" class="input_style" type="text" name="user_mail" placeholder="Почта клиента">
					<input value="<?php echo $order['user_postcode']?>" class="input_style" type="text" name="user_postcode" placeholder="Почтовый индекс клиента">
					<input value="<?php echo $order['delivery_address']?>" class="input_style" type="text" name="delivery_address" placeholder="Адрес доставки">
					<input value="<?php echo $order['date']?>" class="input_style" type="text" name="date" placeholder="Дата заказа">

					<select name="status" class="input_style">
						<option value="2" <?php if ($order['status'] == 3) echo 'selected';?>>Доставлен</option>
						<option value="1" <?php if ($order['status'] == 1) echo 'selected';?>>Доставка</option>
						<option value="0" <?php if ($order['status'] == 0) echo 'selected';?>>В обработке</option>
					</select>

					<input class="reg_button checkout_button" type="submit" name="update" value="Отправить">
				</form>
                <?php if ($error): ?>
                    <font color="red"><p class="paragraph_stile"><?php echo $error; ?></p></font>
                <?php endif; ?>

                <?php if ($result): ?>
                    <font color="green"><p class="paragraph_stile">Вы успешно обновили заказ!</p></font>
                <?php endif; ?>
			</div>
	</main>
<?php include 'views/layouts/footer.php';?>
<script type="text/javascript" src="../../template/main.js"></script>
