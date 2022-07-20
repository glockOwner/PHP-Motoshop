<?php include 'views/layouts/header.php'; ?>
	<main>
		<div class="container lc_container">
			<div class="lc_menu">
                <p class="paragraph_stile">Привет <?php echo $_SESSION['user_login'];?> <br><a href="/logout">Выйти</a></p>
				<p class="paragraph_stile lc_menu_article">Личные данные</p>
				<div class="lc_menu_under_article_block">
					<a href="/edit_personal_info" class="paragraph_stile">Редактировать данные</a>
				</div>

				<p class="paragraph_stile lc_menu_article">Заказы</p>
				<div class="lc_menu_under_article_block">
					<a href="" class="paragraph_stile">Список заказов</a>
				</div>
			</div>

			<div class="lc_info">
				<p class="reg_article">Мои заказы</p>

                <?php foreach ($orders as $order):?>
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
                    <div class="order_card">
                        <div class="order_card_top">
                            <div>
                                <p class="paragraph_stile">Заказ № <?php echo "$order[id]"?> от <?php echo "$order[date]"?></>
                            </div>
                            <div>
                                <p class="paragraph_stile"><?php echo "$order[status]"?></p>
                            </div>
                        </div>

                        <div class="order_card_bottom">
                            <p class="paragraph_stile"><a href="/orderHistoryView/<?php echo $order['id'];?>">Состав заказа</a></p>
                        </div>
                    </div>
				<?php endforeach;?>
			</div>
	</main>

<?php include 'views/layouts/footer.php';?>