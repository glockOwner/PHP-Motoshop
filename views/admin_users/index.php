<?php include 'views/layouts/header.php';?>
    <main>
        <div class="container cart_container">
            <p class="reg_article cart_article">Админпанель</p>
            <a href="/admin" style="font-size: 40px;text-decoration: none;color: grey;width: 40px;">🠔</a>
            <div class="lc_info cart_info">
                <?php if ($users): ?>
                    <table width="90%" >

                        <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">ID</b>
                        <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Логин</b>
                        <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Пароль</b>
                        <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Фамилия</b>
                        <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Имя</b>
                        <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Почта</b>
                        <th align="center" height="50px"><b class="paragraph_stile cart_paragraph">Роль</b>
                        <th align="center" height="50px" colspan="2"><b class="paragraph_stile cart_paragraph">Действия</b>

                            <?php foreach ($users as $user): ?>
                                <?php
                                    switch ($user['role'])
                                    {
                                        case '0':
                                            $user['role'] = 'Пользователь';
                                            break;
                                        case '1':
                                            $user['role'] = 'Модератор';
                                            break;
                                        case '2':
                                            $user['role'] = 'Администратор';
                                            break;
                                    }
                                ?>
                                <tr>
                                    <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$user[id]";?></p></td>
                                    <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$user[login]";?></p></td>
                                    <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$user[password]";?></p></td>
                                    <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$user[surname]";?></p></td>
                                    <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$user[name]";?></p></td>
                                    <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$user[email]";?></p></td>
                                    <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><?php echo "$user[role]";?></p></td>
                                    <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><a href="/admin/Updateuser/<?php echo $user['id'];?>">Изменить</a></p></td>
                                    <td align="center" height="50px"><p class="paragraph_stile cart_paragraph"><a href="/admin/Deleteuser/<?php echo $user['id'];?>">Заблокировать</a></p></td>
                                </tr>
                            <?php endforeach;?>
                    </table>

                <?php endif;?>
            </div>
    </main>
<?php include 'views/layouts/footer.php';?>