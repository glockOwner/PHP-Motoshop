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

			<div class="lc_info">
				<p class="reg_article">Редактировать личные данные</p>
				<form method="POST" class="reg">
					<p class="paragraph_stile">Фамилия</p>
					<input class="input_style" type="text" name="surname" value="<?php echo "$surname"?>">
					<p class="paragraph_stile">Имя</p>
					<input class="input_style" type="text" name="name" value="<?php echo "$name"?>">
					<p class="paragraph_stile">Пароль</p>
					<input class="input_style" type="password" name="password" value="<?php echo "$password"?>">
					<input class="input_style" name="edit" type="submit" value="Сохранить">
				</form>

                <?php
                    if ($errors && is_array($errors))
                    {
                        echo '<ul>';
                        foreach ($errors as $error)
                        {
                            echo "<li><font color='red'>$error</font></li>";
                        }
                        echo '</ul>';
                    }
                    if ($result)
                    {
                        echo "<font color='green'>Вы успешно сменили данные</font>";
                    }
                ?>
			</div>
		</div>
	</main>
<?php include 'views/layouts/footer.php'; ?>