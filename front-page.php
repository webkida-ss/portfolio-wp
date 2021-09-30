<!DOCTYPE html>
<html lang="en">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div class="wrapper front-page">

		<!-------------------------------------------------- 
		- ヘッダー
		---------------------------------------------------->
		<?php get_template_part('src-php/10_common/_header'); ?>


		<!-------------------------------------------------- 
		- メイン
		---------------------------------------------------->
		<div class="inner container">
			<main class="main">

				<!-- トップ -->
				<section class="front-page__top">
					<?php get_template_part('src-php/20_component/01_top/_top'); ?>
				</section>

				<!-- 制作実績アーカイブ -->
				<section class="front-page__work">
					<?php get_template_part('src-php/20_component/02_work/_works'); ?>
				</section>

				<!-- お問い合わせ -->
				<section class="front-page__contact">
					<?php get_template_part('src-php/20_component/03_contact/_contact'); ?>
				</section>

			</main>
		</div><!-- /.container -->

		<!-------------------------------------------------- 
		- フッター
		---------------------------------------------------->
		<?php get_template_part('src-php/10_common/_footer'); ?>
	</div><!-- /.wrapper -->

	<?php get_footer(); ?>
</body>

</html>