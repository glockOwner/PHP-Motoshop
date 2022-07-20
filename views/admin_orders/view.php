<?php include 'views/layouts/header.php';?>
<link rel="stylesheet" type="text/css" href="../../template/styles/styles.css">
<main>
    <div class="container cart_container">
        <p class="reg_article cart_article">Админпанель</p>
        <a href="<?php echo $_SERVER['HTTP_REFERER'];?>" style="font-size: 40px;text-decoration: none;color: grey;width: 40px;">🠔</a>
        <div class="lc_info cart_info">
        	<h5 class="paragraph_stile article">Информация о заказе</h5>
        	 <table width="90%" >

                    <tr>
                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph">Номер заказа</p></td>
                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$order[id]";?></p></td>
                    </tr>

                    <tr>
                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph">Имя клиента</p></td>
                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$order[user_name]";?></p></td>
                    </tr>

                    <tr>
                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph">Телефон клиента</p></td>
                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$order[user_phone]";?></p></td>
                    </tr>

                    <tr>
                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph">Почта клиента</p></td>
                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$order[user_mail]";?></p></td>
                    </tr>

                    <tr>
                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph">Почтовый индекс</p></td>
                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$order[user_postcode]";?></p></td>
                    </tr>

                    <tr>
                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph">Адрес доставки</p></td>
                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$order[delivery_address]";?></p></td>
                    </tr>
                    <?php if ($order['user_id']): ?>
                    <tr>
                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph">ID клиента</p></td>
                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$order[user_id]";?></p></td>
                    </tr>
                    <?php endif; ?>

                    <tr>
                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph">Дата заказа</p></td>
                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$order[date]";?></p></td>
                    </tr>

                    <?php
                        switch ($order['status'])
                        {
                            case 0:
                                $order['status'] = 'В обработке';
                                break;
                            case 1:
                                $order['status'] = 'Доставка';
                                break;
                            case 2:
                                $order['status'] = 'Заказ доставлен';
                                break;
                        }
                    ?>

                    <tr>
                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph">Статус заказа</p></td>
                        <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$order[status]";?></p></td>
                    </tr>
                </table>
            <?php if ($products): ?>
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

            <?php endif;?>
        </div>
</main>
<?php include 'views/layouts/footer.php';?>
<script type="text/javascript" src="../../template/main.js"></script>
