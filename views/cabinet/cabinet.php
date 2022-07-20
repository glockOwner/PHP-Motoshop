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
					<a href="/order_history" class="paragraph_stile">Список заказов</a>
				</div>
			</div>

			<div class="lc_info" style="justify-content: flex-start">
				<p class="reg_article">Личный кабинет</p>
				<p class="paragraph_stile" >
                    В личном кабинете Вы можете проверить текущее состояние корзины, ход выполнения Ваших
                    заказов, просмотреть или изменить личную информацию.
                </p>
			</div>
	</main>

<?php include 'views/layouts/footer.php';?>