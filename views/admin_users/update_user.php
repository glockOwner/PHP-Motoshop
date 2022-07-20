<?php include 'views/layouts/header.php';?>
<link rel="stylesheet" type="text/css" href="../../template/styles/styles.css">
<main>
    <div class="container cart_container">
        <p class="reg_article cart_article">Админпанель</p>
        <a href="/admin/user" style="font-size: 40px;text-decoration: none;color: grey;width: 40px;">🠔</a>
        <div class="lc_info">
            <h2 class="paragraph_stile cart_paragraph checkout_article">Изменить пользователя</h2>
            <form method="POST" class="reg create_product">
                <input value="<?php echo $user['login']?>" class="input_style" type="text" name="user_login" placeholder="Логин">
                <input value="<?php echo $user['password']?>" class="input_style" type="text" name="user_password" placeholder="Пароль">
                <input value="<?php echo $user['surname']?>" class="input_style" type="text" name="user_surname" placeholder="Фамилия">
                <input value="<?php echo $user['name']?>" class="input_style" type="text" name="user_name" placeholder="Имя">
                <input value="<?php echo $user['email']?>" class="input_style" type="text" name="user_email" placeholder="Почта">

                <p class="paragraph_stile">Роль</p>
                <select name="user_role" class="input_style">
                    <option value="0" <?php if ($user['role'] == '0') echo 'selected';?>>Пользователь</option>
                    <option value="1" <?php if ($user['role'] == '1') echo 'selected';?>>Модератор</option>
                    <option value="2" <?php if ($user['role'] == '2') echo 'selected';?>>Администратор</option>
                </select>


                <input class="reg_button checkout_button" type="submit" name="update" value="Отправить">
            </form>
            <?php if ($error): ?>
                <font color="red"><p class="paragraph_stile"><?php echo $error; ?></p></font>
            <?php endif; ?>

            <?php if ($result): ?>
                <font color="green"><p class="paragraph_stile">Вы успешно обновили пользователя!</p></font>
            <?php endif; ?>
        </div>
</main>
<?php include 'views/layouts/footer.php';?>
