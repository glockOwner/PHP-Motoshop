<?php include 'views/layouts/header.php'; ?>
	<main>
		<div class="container lc_container">
			<div class="lc_menu">
                <p class="paragraph_stile">Привет <?php echo $_SESSION['user_login'];?> <br><a href="/logout">Выйти</a></p>
				<p class="paragraph_stile lc_menu_article">Личные данные</p>
				<div class="lc_menu_under_article_block">
					<a href="/edit_personal_info" class="paragraph_stile">Редактировать данные</a>
				</div>

				<p class="paragraph_stile lc_menu_article">Заказы</p>
				<div class="lc_menu_under_article_block">
					<a href="" class="paragraph_stile">Список заказов</a>
				</div>
			</div>

			<div class="lc_info">
				<p class="reg_article">Мои заказы</p>

                    <div class="order_card">
                        <h5 class="paragraph_stile article">Товары в заказе</h5>
                        <table width="90%" >

                            <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Артикул</b>
                            <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Название</b>
                            <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Стоимость</b>
                            <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">ID</b>
                            <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Количество</b>

                                <?php foreach ($products as $product): ?>
                                    <tr>
                                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$product[part_number]";?></p></td>
                                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$product[item_name]";?></p></td>
                                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$product[price]";?></p></td>
                                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo $product['id'];?></p></td>
                                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo $productQuantity["$product[id]"];?></p></td>
                                    </tr>
                                <?php endforeach;?>
                        </table>
                    </div>
			</div>
	</main>

<?php include 'views/layouts/footer.php';?>