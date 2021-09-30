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
		<main>

			<!-- トップ -->
			<section id="top" class="front-page__top">
				<?php get_template_part('src-php/20_component/01_top/_top'); ?>
			</section>

			<div class="inner container">


				<!-- サービス -->
				<section id="works" class="front-page__service">
					<?php get_template_part('src-php/20_component/02_work/_service'); ?>
				</section>

				<!-- 制作実績アーカイブ -->
				<section id="works" class="front-page__work">
					<?php get_template_part('src-php/20_component/02_work/_works'); ?>
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