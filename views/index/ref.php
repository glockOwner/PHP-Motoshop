<?php include 'views/layouts/header.php'?>
<main class="index_main">
    <div class="container">
        <div class="goods_section">
            <h2 class="title">Хиты продаж</h2>
            <div class="goods">
                <?php foreach ($bestSellers as $product): ?>
                    <div class="goods_card">
                        <img src="<?php echo "$product[img_path]";?>" class="goods_card_image">
                        <p>
                            <?php echo "$product[item_name]";?>
                        </p>
                        <p>
                            <?php echo "$product[price]";?> Руб.
                        </p>
                        <a href="/view/<?php echo "$product[id]"; ?>">Подробнее</a>
                    </div>
                <?php endforeach;?>
            </div>
        </div>



        <div class="goods_section">
            <h2 class="title">Новинки</h2>
            <div class="goods">
                <?php foreach ($newProducts as $product): ?>
                    <div class="goods_card">
                        <img src="<?php echo "$product[img_path]";?>" class="goods_card_image">
                        <p>
                            <?php echo "$product[item_name]";?>
                        </p>
                        <p>
                            <?php echo "$product[price]";?> Руб.
                        </p>
                        <a href="/view/<?php echo "$product[id]"; ?>">Подробнее</a>
                    </div>
                <?php endforeach;?>

            </div>
        </div>
    </div>
</main>
<?php include 'views/layouts/footer.php'?>
