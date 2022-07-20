<?php include 'views/layouts/header.php';?>
    <link rel="stylesheet" type="text/css" href="../../template/styles/styles.css">
	<main>
		<div class="container cart_container">
			<p class="reg_article cart_article">Админпанель</p>
            <a href="/admin/product" style="font-size: 40px;text-decoration: none;color: grey;width: 40px;">🠔</a>
			<div class="lc_info">
				<h2 class="paragraph_stile cart_paragraph checkout_article">Изменить товар</h2>
				<form method="POST" class="reg create_product" enctype="multipart/form-data">
					<input value="<?php echo $product['item_name']?>" class="input_style" type="text" name="product_name" placeholder="Название товара">
					<input value="<?php echo $product['price']?>" class="input_style" type="number" step="any" name="price" placeholder="Цена товара(Руб)">
					<input value="<?php echo $product['engine_cubature']?>" class="input_style" type="number" name="engine_cubature" placeholder="Кубатура двигателя(см^3)">
					<textarea value="<?php echo $product['engine']?>" class="input_style" type="textarea" name="engine" placeholder="Инфо о двигателе"><?php echo $product['engine']?></textarea>
					<input value="<?php echo $product['engine_cooling']?>" class="input_style" type="text" name="engine_cooling" placeholder="Охлаждение двигателя">
					<input value="<?php echo $product['item_color']?>" class="input_style" type="text" name="item_color" placeholder="Цвет">
					<input value="<?php echo $product['part_number']?>" class="input_style" type="text" name="part_number" placeholder="Артикул">
					<textarea value="<?php echo $product['description']?>" class="input_style" type="textarea" name="description" placeholder="Описание товара"><?php echo $product['description']?></textarea>
					<input value="<?php echo $product['packed_weight']?>" class="input_style" type="number" name="packed_weight" placeholder="Вес запакованного товара(кг)">
					<input value="<?php echo $product['power']?>" class="input_style" type="number" step="any" name="power" placeholder="Мощность(л.с)">
					<textarea value="<?php echo $product['transmission']?>" class="input_style" name="transmission" placeholder="Трансмиссия"><?php echo $product['transmission']?></textarea>
					<input value="<?php echo $product['wheels']?>" class="input_style" type="text" name="wheels" placeholder="Колёса">
					<input value="<?php echo $product['fuel_supply_system']?>" class="input_style" type="text" name="fuel_supply_system" placeholder="Система подачи топлива">
					<input value="<?php echo $product['front_suspension']?>" class="input_style" type="text" name="front_suspension" placeholder="Передний амортизатор">
					<input value="<?php echo $product['back_suspension']?>" class="input_style" type="text" name="back_suspension" placeholder="Задний амортизатор">
					<input value="<?php echo $product['front_brake']?>" class="input_style" type="text" name="front_brake" placeholder="Передний тормоз">
					<input value="<?php echo $product['back_brake']?>" class="input_style" type="text" name="back_brake" placeholder="Задний тормоз">
					<input value="<?php echo $product['length_width_height']?>" class="input_style" type="text" name="length_width_height" placeholder="Длина*Ширина*Высота(мм.)">
					<input value="<?php echo $product['base_length']?>" class="input_style" type="number" name="base_length" placeholder="Длина базы(мм.)">
					<input value="<?php echo $product['saddle_height']?>" class="input_style" type="number" name="saddle_height" placeholder="Высота по седлу(мм.)">
					<input value="<?php echo $product['weight']?>" class="input_style" type="number" name="weight" placeholder="Вес(кг.)">
					<input value="<?php echo $product['tank_capacity']?>" class="input_style" type="number" step="any" name="tank_capacity" placeholder="Вместительность бака">


					<p class="paragraph_stile">Статус товара</p>
					<select name="item_status" class="input_style">
						<option value="usual" <?php if ($product['item_status'] == 'usual') echo 'selected';?>>Обычный</option>
						<option value="bestseller" <?php if ($product['item_status'] == 'bestseller') echo 'selected';?>>Хит продаж</option>
						<option value="best" <?php if ($product['item_status'] == 'best') echo 'selected';?>>Лучший товар</option>
					</select>

					<p class="paragraph_stile">Бренд товара</p>
					<select name="item_brand" class="input_style">
						<option value="kayo" <?php if ($product['item_brand'] == 'kayo') echo 'selected';?>>Kayo</option>
						<option value="bse" <?php if ($product['item_brand'] == 'bse') echo 'selected';?>>BSE</option>
						<option value="gr" <?php if ($product['item_brand'] == 'gr') echo 'selected';?>>GR</option>
					</select>

					<p class="paragraph_stile">Тип товара</p>
					<select name="item_type" class="input_style">
						<option value="pitbike" <?php if ($product['item_type'] == 'pitbike') echo 'selected';?>>Питбайк</option>
						<option value="motorcycle" <?php if ($product['item_type'] == 'motorcycle') echo 'selected';?>>Мотоцикл</option>
						<option value="atv" <?php if ($product['item_type'] == 'atv') echo 'selected';?>>Квадроцикл</option>
					</select>

					<p class="paragraph_stile">Наличие</p>
					<select name="availability" class="input_style">
						<option value="1" <?php if ($product['availability'] == 1) echo 'selected';?>>В наличии</option>
						<option value="0" <?php if ($product['availability'] == 0) echo 'selected';?>>Нет в наличии</option>
					</select>

					<p class="paragraph_stile">Выберите изображение товара</p>
					<input class="input_style" type="file" name="img_path">

					<input class="reg_button checkout_button" type="submit" name="update" value="Отправить">
				</form>
                <?php if ($error): ?>
                    <font color="red"><p class="paragraph_stile"><?php echo $error; ?></p></font>
                <?php endif; ?>

                <?php if ($result): ?>
                    <font color="green"><p class="paragraph_stile">Вы успешно обновили товар!</p></font>
                <?php endif; ?>
			</div>
	</main>
<?php include 'views/layouts/footer.php';?>
<script type="text/javascript" src="../../template/main.js"></script>
