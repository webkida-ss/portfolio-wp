<!DOCTYPE html>
<html lang="en">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div class="wrapper archive-work">

		<!-------------------------------------------------- 
		- ヘッダー
		---------------------------------------------------->
		<?php get_template_part('src-php/10_common/_header'); ?>


		<!-------------------------------------------------- 
		- メイン
		---------------------------------------------------->
		<main>
			<div class="container">

				<!-- 制作実績一覧 -->
				<section class="archive-work__work wow fadeInUp">
					<?php get_template_part('src-php/20_component/02_work/_work', null, -1); ?>
				</section>

				<!-- お問い合わせ -->
				<section id="contact" class="front-page__contact wow fadeInUp">
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