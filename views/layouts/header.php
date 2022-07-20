<?php include_once 'models/Cart.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>Интернет магазин мототехники</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../template/styles/styles.css">
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