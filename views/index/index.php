<?php include_once 'models/Cart.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Интернет магазин мототехники</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="template/styles/styles.css">
	<link rel="stylesheet" type="text/css" href="template/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="template/slick/slick-theme.css">
<body>
	<header>
		<div class="container">
			<div class="header logo">
				<h1>DRIVEMOTO</h1>
				<a href="/cabinet/">Личный кабинет</a>
			</div>
			<nav class="nav1">
				<a href="/delivery">Доставка</a>
				<a href="/payment">Оплата</a>
				<a href="/guarantee">Гарантия</a>
				<a href="/credit">Кредит</a>
				<a href="/about">О магазине</a>
				<a href="/contacts">Контакты</a>
				<a id="cart" href="/cart">Корзина(<?php echo Cart::countItems();?>)</a>
			</nav>
			<nav class="nav2">
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
				</ul>
				<div class="burger_menu">
					<a href="#">Меню</a>
					<div class="burger_icon"><span></span></div>
				</div>
				<nav class="burger_submenu">
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
						<li><a href="#">Доставка</a></li>
						<li><a href="#">Оплата</a></li>
						<li><a href="#">Гарантия</a></li>
						<li><a href="#">Кредит</a></li>
						<li><a href="#">О магазине</a></li>
						<li><a href="#">Контакты</a></li>
						<li><a href="/cart">Корзина(<?php echo Cart::countItems();?>)</a></li>
					</ul>
				</nav>
			</nav>

			<div class="news_slider">
				<div class="slide">
					<div class="slide_photo_1"></div>
				</div>

				<div class="slide">
					<div class="slide_photo_2"></div>
				</div>

				<div class="slide">
					<div class="slide_photo_3"></div>
				</div>
				

			</div>
		</div>
	</header>

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
	<script type="text/javascript" src="template/slick/slick.min.js"></script>
	<script type="text/javascript" src="template/main.js"></script>
	<script src="https://kit.fontawesome.com/b91beb61b3.js" crossorigin="anonymous"></script>
</body>
</html>