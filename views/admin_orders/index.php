<?php include 'views/layouts/header.php';?>
<main>
    <div class="container cart_container">
        <p class="reg_article cart_article">Админпанель</p>
        <a href="/admin" style="font-size: 40px;text-decoration: none;color: grey;width: 40px;">🠔</a>
        <div class="lc_info cart_info">
            <?php if ($orders): ?>
                <h5 class="paragraph_stile cart_article">Заказы</h5>
                <table width="90%" >

                    <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">ID заказа</b>
                    <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Имя покупателя</b>
                    <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Телефон покупателя</b>
                    <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Дата оформления</b>
                    <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Статус заказа</b>
                    <th align="center" height="50px" colspan="3"><b class="paragraph_stile cart_paragraph">Действия</b>

                        <?php foreach ($orders as $order): ?>
                            <tr>
                                <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$order[id]";?></p></td>
                                <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$order[user_name]";?></p></td>
                                <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$order[user_phone]";?></p></td>
                                <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$order[date]";?></p></td>
                                <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$order[status]";?></p></td>
                                <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><a href="/admin/Vieworder/<?php echo $order['id'];?>">Просмотр заказа</a></p></td>
                                <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><a href="/admin/Updateorder/<?php echo $order['id'];?>">Изменить</a></p></td>
                                <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><a href="/admin/Deleteorder/<?php echo $order['id'];?>">Удалить</a></p></td>
                            </tr>
                        <?php endforeach;?>
                </table>

            <?php endif;?>
        </div>
</main>
<?php include 'views/layouts/footer.php';?>
