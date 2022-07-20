<?php include 'views/layouts/header.php';?>
	<main>
		<div class="container cart_container">
			<p class="reg_article cart_article">Админпанель</p>
			<div class="lc_info">
				<h2 class="paragraph_stile cart_paragraph checkout_article">Добрый день, Администратор.</h2>
				<a href="/admin/product" class="paragraph_stile cart_paragraph checkout_article">Управление товарами</a>
				<a href="/admin/order" class="paragraph_stile cart_paragraph checkout_article">Управление заказами</a>
                <?php if ($isAdmin):?><a href="/admin/user" class="paragraph_stile cart_paragraph checkout_article">Управление пользователями</a><?php endif; ?>
			</div>
	</main>
<?php include 'views/layouts/footer.php';?>