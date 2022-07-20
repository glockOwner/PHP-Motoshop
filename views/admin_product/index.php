<?php include 'views/layouts/header.php';?>
<main>
    <div class="container cart_container">
        <p class="reg_article cart_article">Админпанель</p>
        <a href="/admin" style="font-size: 40px;text-decoration: none;color: grey;width: 40px;">🠔</a>
        <div class="lc_info cart_info">
            <?php if ($products): ?>
                <table width="90%" >

                    <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Артикул</b>
                    <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Название</b>
                    <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Стоимость</b>
                    <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">ID</b>
                    <th align="center" height="50px" colspan="2"><b class="paragraph_stile cart_paragraph">Действия</b>

                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$product[part_number]";?></p></td>
                                <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$product[item_name]";?></p></td>
                                <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$product[price]";?></p></td>
                                <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo $product['id'];?></p></td>
                                <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><a href="/admin/Updateproduct/<?php echo $product['id'];?>">Изменить</a></p></td>
                                <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><a href="/admin/Deleteproduct/<?php echo $product['id'];?>">Удалить</a></p></td>
                            </tr>
                        <?php endforeach;?>
                </table>
                <a class="cart_button" href="/admin/Createproduct">Добавить товар</a>

            <?php endif;?>
        </div>
</main>
<?php include 'views/layouts/footer.php';?>
