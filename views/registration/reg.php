<?php include 'views/layouts/header.php';?>
	<main class="reg_main">
		<div class="reg_window">
			<p class="paragraph_stile reg_article">
				Регистрация
			</p>
            <p class="paragraph_stile">Уже зарегистрированы? <a href="/login">Авторизация</a></p>
			<form method="POST" class="reg">
				<input class="input_style" type="text" name="login" placeholder="Логин">
				<input class="input_style" type="text" name="email" placeholder="Электронная почта">
				<input class="input_style" type="text" name="surname" placeholder="Фамилия">
				<input class="input_style" type="text" name="name" placeholder="Имя">
				<input class="input_style" type="password" name="password" placeholder="Пароль">
				<input class="input_style" type="submit" name="reg" value="Регистрация">
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
                    echo "<font color='green'>Вы зарегистрировались!</font>";
                }
            ?>
		</div>
	</main>

<?php include 'views/layouts/footer.php';?>