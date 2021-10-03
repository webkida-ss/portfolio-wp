<!DOCTYPE html>
<html lang="ja">

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
			<div class="container">

				<!-- トップ -->
				<section id="top" class="front-page__top wow fadeInUp">
					<?php get_template_part('src-php/20_component/01_top/_top'); ?>
				</section>

				<!-- サービス -->
				<section id="service" class="front-page__service wow fadeInUp">
					<?php get_template_part('src-php/20_component/01_top/_service'); ?>
				</section>

				<!-- 制作実績アーカイブ -->
				<section id="work" class="front-page__work wow fadeInUp">
					<?php get_template_part('src-php/20_component/02_work/_work'); ?>
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