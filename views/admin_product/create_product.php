<?php include 'views/layouts/header.php';?>
	<main>
		<div class="container cart_container">
			<p class="reg_article cart_article">Админпанель</p>
            <a href="/admin/product" style="font-size: 40px;text-decoration: none;color: grey;width: 40px;">🠔</a>
			<div class="lc_info">
				<h2 class="paragraph_stile cart_paragraph checkout_article">Добавить новый товар</h2>
				<form method="POST" class="reg create_product" enctype="multipart/form-data">
					<input class="input_style" type="text" name="product_name" placeholder="Название товара">
					<input class="input_style" type="number" step="any" name="price" placeholder="Цена товара(Руб)">
					<input class="input_style" type="number" name="engine_cubature" placeholder="Кубатура двигателя(см^3)">
					<textarea class="input_style" type="textarea" name="engine" placeholder="Инфо о двигателе"></textarea>
					<input class="input_style" type="text" name="engine_cooling" placeholder="Охлаждение двигателя">
					<input class="input_style" type="text" name="item_color" placeholder="Цвет">
					<input class="input_style" type="text" name="part_number" placeholder="Артикул">
					<textarea class="input_style" type="textarea" name="description" placeholder="Описание товара"></textarea>
					<input class="input_style" type="number" name="packed_weight" placeholder="Вес запакованного товара(кг)">
					<input class="input_style" type="number" step="any" name="power" placeholder="Мощность(л.с)">
					<textarea class="input_style" name="transmission" placeholder="Трансмиссия"></textarea>
					<input class="input_style" type="text" name="wheels" placeholder="Колёса">
					<input class="input_style" type="text" name="fuel_supply_system" placeholder="Система подачи топлива">
					<input class="input_style" type="text" name="front_suspension" placeholder="Передний амортизатор">
					<input class="input_style" type="text" name="back_suspension" placeholder="Задний амортизатор">
					<input class="input_style" type="text" name="front_brake" placeholder="Передний тормоз">
					<input class="input_style" type="text" name="back_brake" placeholder="Задний тормоз">
					<input class="input_style" type="text" name="length_width_height" placeholder="Длина*Ширина*Высота(мм.)">
					<input class="input_style" type="number" name="base_length" placeholder="Длина базы(мм.)">
					<input class="input_style" type="number" name="saddle_height" placeholder="Высота по седлу(мм.)">
					<input class="input_style" type="number" name="weight" placeholder="Вес(кг.)">
					<input class="input_style" type="number" step="any" name="tank_capacity" placeholder="Вместительность бака">

					<p class="paragraph_stile">Статус товара</p>
					<select name="item_status" class="input_style">
						<option value="usual" selected>Обычный</option>
						<option value="bestseller">Хит продаж</option>
						<option value="best">Лучший товар</option>
					</select>

					<p class="paragraph_stile">Бренд товара</p>
					<select name="item_brand" class="input_style">
						<option value="kayo" selected>Kayo</option>
						<option value="bse">BSE</option>
						<option value="gr">GR</option>
					</select>

					<p class="paragraph_stile">Тип товара</p>
					<select name="item_type" class="input_style">
						<option value="pitbike" selected>Питбайк</option>
						<option value="motorcycle">Мотоцикл</option>
						<option value="atv">Квадроцикл</option>
					</select>

					<p class="paragraph_stile">Наличие</p>
					<select name="availability" class="input_style">
						<option value="1" selected>В наличии</option>
						<option value="0">Нет в наличии</option>
					</select>

					<p class="paragraph_stile">Выберите изображение товара</p>
					<input class="input_style" type="file" name="img">

					<input class="reg_button checkout_button" type="submit" name="reg_checkout" value="Отправить">
				</form>
                <?php if ($error): ?>
                    <font color="red"><p class="paragraph_stile"><?php echo $error; ?></p></font>
                <?php endif; ?>

                <?php if ($result): ?>
                    <font color="green"><p class="paragraph_stile">Вы успешно добавили товар!</p></font>
                <?php endif; ?>

			</div>
	</main>
<?php include 'views/layouts/footer.php';?>