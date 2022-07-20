<?php include 'views/layouts/header.php';?>
	<main>
		<div class="container">
			<h2 class="title">Каталог</h2>
			<div class="goods">
				<?php foreach ($catalogList as $product): ?>
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
                <?php endforeach; ?>
			</div>

            <form class="page_switch" action="models/Product.php">
                <?php for ($i = 1;$i <= $amountOfPages;$i++): ?>
                    <input id="radio-<?php echo "$i";?>" type="radio" name="page_switch" value="<?php echo "$i";?>" <?php if ($pageNumber==$i) echo "checked";?>>
                    <label for="radio-<?php echo "$i";?>"><?php echo "$i";?></label>
                <?php endfor; ?>
            </form>
		</div>
	</main>

<?php include 'views/layouts/footer.php';?>