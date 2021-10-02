<!-- 制作実績 -->
<!DOCTYPE html>
<html lang="en">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div class="wrapper single-work">

		<!-------------------------------------------------- 
		- ヘッダー
		---------------------------------------------------->
		<?php get_template_part('src-php/10_common/_header'); ?>


		<!-------------------------------------------------- 
		- メイン
		---------------------------------------------------->
		<main>
			<div class="container">

				<section class="single-work__work-item">
					<?php get_template_part('src-php/20_component/02_work/_work-item'); ?>
				</section>

				<!-- お問い合わせ -->
				<section id="contact" class="front-page__contact">
					<?php get_template_part('src-php/10_common/_contact'); ?>
				</section>

			</div><!-- /.container -->
		</main>

		<!-------------------------------------------------- 
		- フッター
		---------------------------------------------------->
		<?php get_template_part('src-php/10_common/_footer'); ?>
	</div><!-- /.wrapper -->

	<?php get_footer(); ?>
</body>

</html>