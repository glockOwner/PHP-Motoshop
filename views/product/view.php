<?php include_once 'models/Cart.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Интернет магазин мототехники</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../template/styles/styles.css">
	<link rel="stylesheet" type="text/css" href="../template/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="../template/slick/slick-theme.css">
<body>
	<div class="fixed_header">
		<div class="ref">
			<div class="ref_logo">
				<p><a class="logo_link" href="/">DRIVEMOTO</a><p>
			</div>
			<nav>
				<ul class="ref_menu">
					<li class="ref_menu_with_submenu"><a href="/motorcycles">Мотоциклы</a>
						<ul class="ref_submenu">
							<li><a href="/motorcycles?product_brand=kayo">Мотоциклы KAYO</a></li>
							<li><a href="/motorcycles?product_brand=bse">Мотоциклы BSE</a></li>
							<li><a href="/motorcycles?product_brand=gr">Мотоциклы GR</a></li>
						</ul>
					</li>
					<li class="ref_menu_with_submenu"><a href="/pitbikes">Питбайки</a>
						<ul class="ref_submenu">
							<li><a href="/pitbikes?product_brand=kayo">Питбайки KAYO</a></li>
							<li><a href="/pitbikes?product_brand=bse">Питбайки BSE</a></li>
							<li><a href="/pitbikes?product_brand=gr">Питбайки GR</a></li>
						</ul>
					</li>
					<li class="ref_menu_with_submenu"><a href="/atvs">Квадроциклы</a>
						<ul class="ref_submenu">
							<li><a href="/atvs?product_brand=kayo">Квадроциклы KAYO</a></li>
							<li><a href="/atvs?product_brand=bse">Квадроциклы BSE</a></li>
							<li><a href="/atvs?product_brand=gr">Квадроциклы GR</a></li>
						</ul>
					</li>
					<li><a href="/cabinet/">Личный кабинет</a></li>
					<li><a id="cartF" href="/cart">Корзина(<?php echo Cart::countItems();?>)</a></li>
				</ul>
			</nav>
			<div class="burger_menu">
					<div class="burger_icon"><span></span></div>
			</div>
		</div>
		<nav class="burger_submenu ref">
					<ul>
						<li>
							<a class="mouse_a" href="/motorcycles">Мотоциклы</a>
							<a class="touch_a" href="/motorcycles">Мотоциклы</a>
							<span class="menu_arrow">🢗</span>
							<ul class="submenu">
								<li><a href="/motorcycles?product_brand=kayo">Мотоциклы KAYO</a></li>
								<li><a href="/motorcycles?product_brand=bse">Мотоциклы BSE</a></li>
								<li><a href="/motorcycles?product_brand=gr">Мотоциклы GR</a></li>
							</ul>
						</li>

						<li>
							<a class="mouse_a" href="/pitbikes">Питбайки</a>
							<a class="touch_a" href="/pitbikes">Питбайки</a>
							<span class="menu_arrow">🢗</span>
							<ul class="submenu submenu_pitbikes">
								<li><a href="/pitbikes?product_brand=kayo">Питбайки KAYO</a></li>
								<li><a href="/pitbikes?product_brand=bse">Питбайки BSE</a></li>
								<li><a href="/pitbikes?product_brand=gr">Питбайки GR</a></li>
							</ul>
						</li>

						<li>
							<a class="mouse_a" href="/atvs">Квадроциклы</a>
							<a class="touch_a" href="/atvs">Квадроциклы</a>
							<span class="menu_arrow">🢗</span>
							<ul class="submenu submenu_ATVs">
								<li><a href="/atvs?product_brand=kayo">Квадроциклы KAYO</a></li>
								<li><a href="/atvs?product_brand=bse">Квадроциклы BSE</a></li>
								<li><a href="/atvs?product_brand=gr">Квадроциклы GR</a></li>
							</ul>
						</li>
						<li><a href="/delivery">Доставка</a></li>
						<li><a href="/payment">Оплата</a></li>
						<li><a href="/guarantee">Гарантия</a></li>
						<li><a href="/credit">Кредит</a></li>
						<li><a href="/about">О магазине</a></li>
						<li><a href="/contacts">Контакты</a></li>
						<li><a href="/cart">Корзина(<?php echo Cart::countItems();?>)</a></li>
					</ul>
				</nav>
	</div>


>
	<main>
		<div class="container product_page">
            <h3 class="product_name">
				<?php echo "$product[item_name]";?>
			</h3>
            <div class="product_block photos">
				<div class="product_slider">
                    <div class="slide">
                        <img class="product_image" src="../<?php echo "$product[img_path]";?>">
                    </div>

                    <div class="slide">
                        <img class="product_image" src="../<?php echo "$product[img_path]";?>">
                    </div>

                    <div class="slide">
                        <img class="product_image" src="../<?php echo "$product[img_path]";?>">
                    </div>
				</div>
				<div class="product_buy_info">
					<p class="paragraph_stile price">
                        <?php echo "$product[price]";?> Руб.
						<p class="paragraph_stile">
                        <?php $availability = $product['availability'] = 1 ? "В наличии" : "Нет в наличии"; echo "$availability";?>
						</p>
					</p>
                    <p class="paragraph_stile">
                        Артикул: <?php echo "$product[part_number]";?>
                    </p>
					<p class="paragraph_stile">
						БЕСПЛАТНАЯ ДОСТАВКА
					</p>

					<a href="/cart/add/<?php echo "$product[id]"?>">Добавить в корзину</a>
				</div>
			</div>

			<div class="product_block description_block">
				<p class="paragraph_stile product_description">Описание</p>
				<p class="paragraph_stile"><?php echo "$product[description]";?></p>
			</div>

            <div class="product_block description_block">
                <p class="paragraph_stile product_description">
                    Характеристики
                </p>
                <?php if ($product['engine_cubature']): ?>
                    <div class="specification_row">
                        <p class="paragraph_stile specification_text">Кубатура</p>
                        <p class="paragraph_stile specification_text"><?php echo "$product[engine_cubature]" ?> куб.см</p>
                    </div>
                <?php endif;?>

                <?php if ($product['packed_weight']): ?>
                    <div class="specification_row">
                        <p class="paragraph_stile specification_text">Вес в упаковке</p>
                        <p class="paragraph_stile specification_text"><?php echo "$product[packed_weight]" ?> кг.</p>
                    </div>
                <?php endif;?>

                <?php
                $productType = match("$product[item_type]")
                {
                    "pitbike" => "Питбайк",
                    "motorcycle" => "Мотоцикл",
                    "atv" => "Квадроцикл",
                };

                echo "
                <div class='specification_row'>
                    <p class='paragraph_stile specification_text'>Тип</p>
                    <p class='paragraph_stile specification_text'> $productType </p>
                </div>
                ";
                ?>




                <?php if ($product['power']): ?>
                    <div class="specification_row">
                        <p class="paragraph_stile specification_text">Мощность</p>
                        <p class="paragraph_stile specification_text"><?php echo "$product[power]" ?> л.с.</p>
                    </div>
                <?php endif;?>

                <?php if ($product['engine']): ?>
                    <div class="specification_row">
                        <p class="paragraph_stile specification_text">Двигатель</p>
                        <p class="paragraph_stile specification_text"><?php echo "$product[engine]" ?></p>
                    </div>
                <?php endif;?>

                <?php if ($product['transmission']): ?>
                    <div class="specification_row">
                        <p class="paragraph_stile specification_text">Трансмиссия</p>
                        <p class="paragraph_stile specification_text"><?php echo "$product[transmission]" ?></p>
                    </div>
                <?php endif;?>

                <?php if ($product['engine_cooling']): ?>
                    <div class="specification_row">
                        <p class="paragraph_stile specification_text">Охлаждение</p>
                        <p class="paragraph_stile specification_text"><?php echo "$product[engine_cooling]" ?></p>
                    </div>
                <?php endif;?>

                <?php if ($product['fuel_supply_system']): ?>
                    <div class="specification_row">
                        <p class="paragraph_stile specification_text">Система подачи топлива</p>
                        <p class="paragraph_stile specification_text"><?php echo "$product[fuel_supply_system]" ?></p>
                    </div>
                <?php endif;?>

                <?php if ($product['front_suspension']): ?>
                    <div class="specification_row">
                        <p class="paragraph_stile specification_text">Передняя подвеска</p>
                        <p class="paragraph_stile specification_text"><?php echo "$product[front_suspension]" ?></p>
                    </div>
                <?php endif;?>

                <?php if ($product['back_suspension']): ?>
                    <div class="specification_row">
                        <p class="paragraph_stile specification_text">Задняя подвеска</p>
                        <p class="paragraph_stile specification_text"><?php echo "$product[back_suspension]" ?></p>
                    </div>
                <?php endif;?>

                <?php if ($product['front_brake']): ?>
                    <div class="specification_row">
                        <p class="paragraph_stile specification_text">Передний тормоз</p>
                        <p class="paragraph_stile specification_text"><?php echo "$product[front_brake]" ?></p>
                    </div>
                <?php endif;?>

                <?php if ($product['back_brake']): ?>
                    <div class="specification_row">
                        <p class="paragraph_stile specification_text">Задний тормоз</p>
                        <p class="paragraph_stile specification_text"><?php echo "$product[back_brake]" ?></p>
                    </div>
                <?php endif;?>

                <?php if ($product['back_brake']): ?>
                    <div class="specification_row">
                        <p class="paragraph_stile specification_text">Задний тормоз</p>
                        <p class="paragraph_stile specification_text"><?php echo "$product[back_brake]" ?></p>
                    </div>
                <?php endif;?>

                <?php if ($product['wheels']): ?>
                    <div class="specification_row">
                        <p class="paragraph_stile specification_text">Колёса</p>
                        <p class="paragraph_stile specification_text"><?php echo "$product[wheels]" ?></p>
                    </div>
                <?php endif;?>

                <?php if ($product['length_width_height']): ?>
                    <div class="specification_row">
                        <p class="paragraph_stile specification_text">Длина*Ширина*Высота</p>
                        <p class="paragraph_stile specification_text"><?php echo "$product[length_width_height]" ?> мм.</p>
                    </div>
                <?php endif;?>

                <?php if ($product['base_length']): ?>
                    <div class="specification_row">
                        <p class="paragraph_stile specification_text">База</p>
                        <p class="paragraph_stile specification_text"><?php echo "$product[base_length]" ?> мм.</p>
                    </div>
                <?php endif;?>

                <?php if ($product['saddle_height']): ?>
                    <div class="specification_row">
                        <p class="paragraph_stile specification_text">Высота по седлу</p>
                        <p class="paragraph_stile specification_text"><?php echo "$product[saddle_height]" ?> мм.</p>
                    </div>
                <?php endif;?>

                <?php if ($product['weight']): ?>
                    <div class="specification_row">
                        <p class="paragraph_stile specification_text">Вес</p>
                        <p class="paragraph_stile specification_text"><?php echo "$product[weight]" ?> кг.</p>
                    </div>
                <?php endif;?>

                <?php if ($product['tank_capacity']): ?>
                    <div class="specification_row">
                        <p class="paragraph_stile specification_text">Ёмкость бака</p>
                        <p class="paragraph_stile specification_text"><?php echo "$product[tank_capacity]" ?> л.</p>
                    </div>
                <?php endif;?>
            </div>

		</div>
	</main>

	<footer>
		<div class="container">
			<nav class="nav1 footer_nav">
				<a href="/delivery">Доставка</a>
				<a href="/payment">Оплата</a>
				<a href="/guarantee">Гарантия</a>
				<a href="/credit">Кредит</a>
				<a href="/about">О магазине</a>
				<a href="/contacts">Контакты</a>
			</nav>

			<div class="payment_methodsANDsocial_media">
				<div class="payment_methods">
					<p>Способы<br>оплаты:</p>
					<div class="payment_methods_img">
						<div id="method1"></div>
						<div id="method2"></div>
						<div id="method3"></div>
					</div>
				</div>

				<div class="social_media">
					<a href="#"><div id="social_media1"></div></a>
					<a href="#"><div id="social_media2"></div></a>
					<a href="#"><div id="social_media3"></div></a>
					<a href="#"><div id="social_media4"></div></a>
				</div>
			</div>

			<div class="copyrightANDaddress">
				<p>
					© ИНТЕРНЕТ-МАГАЗИН МОТОТЕХНИКИ «БЛАБЛАБЛА»<br> INFO@BLABLABLA.RU ВСЕ ПРАВА ЗАЩИЩЕНЫ.<br> ИСПОЛЬЗОВАНИЕ ИНФОРМАЦИИ ВОЗМОЖНО ТОЛЬКО<br>
					С ПИСЬМЕННОГО СОГЛАСИЯ ВЛАДЕЛЬЦЕВ ИНТЕРНЕТ-<br>МАГАЗИНА.
				</p>
				<p>
					МОТОСАЛОН: +7 999 999 99 99 | 8 (999) 999 99 99<br>
					107076, Г. МОСКВА, ПУШКИНА, ДОМ КОЛОТУШКИНА, СТР. 1.<br> НА КАРТЕ
				</p>
			</div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../template/slick/slick.min.js"></script>
	<script type="text/javascript" src="../template/main.js"></script>
	<script src="https://kit.fontawesome.com/b91beb61b3.js" crossorigin="anonymous"></script>
</body>
</html>