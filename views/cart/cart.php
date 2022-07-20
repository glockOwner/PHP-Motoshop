<?php include 'views/layouts/header.php';?>

	<main>
		<div class="container cart_container">
			<p class="reg_article cart_article">Моя корзина</p>
			<div class="lc_info cart_info">
				<?php if ($productsInCart): ?>
                    <table width="90%" >

                        <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Артикул</b>
                        <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Название</b>
                        <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Стоимость</b>
                        <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Количество</b>

                    <?php foreach ($productsInCart as $product): ?>
                        <tr>
                            <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$product[part_number]";?></p></td>
                            <td align="center" height="50px"><a href="view/<?php echo "$product[id]";?>"><p class="paragraph_stile cart_paragraph"><?php echo "$product[item_name]";?></p></a></td>
                            <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$product[price]";?></p></td>
                            <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo $_SESSION['products_in_cart'][$product['id']];?></p></td>
                            <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><a href="delete/<?php echo $product['id'];?>">Удалить</a></p></td>
                        </tr>
                    <?php endforeach;?>
                    </table>
                    <div style="display: flex; justify-content: space-between; width: 90%; margin-top: 50px;">
                        <b class="paragraph_stile cart_paragraph">Общая стоимость:</b>
                        <b class="paragraph_stile cart_paragraph"><?php echo "$totalPrice";?> Руб.</b>
                    </div>
                    <a class="cart_button" href="/checkout">Оформить заказ</a>

                <?php else:?>
                    <b class="paragraph_stile cart_paragraph">В вашей корзине нет товаров</b>
                <?php endif;?>
			</div>
	</main>

<?php include 'views/layouts/footer.php';?>