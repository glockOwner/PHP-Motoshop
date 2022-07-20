<?php include 'views/layouts/header.php';?>
	<main class="reg_main">
		<div class="reg_window">
			<p class="paragraph_stile reg_article">
				Войти
			</p>
            <p class="paragraph_stile">Ещё не зарегистрированы? <a href="/reg">Регистрация</a></p>
			<form method="POST" class="reg">
				<input class="input_style" type="text" name="login" placeholder="Логин">
				<input class="input_style" type="password" name="password" placeholder="Пароль">
				<input class="input_style" name="auth" type="submit" value="Войти">
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
            ?>
		</div>
	</main>

<?php include 'views/layouts/footer.php';?>