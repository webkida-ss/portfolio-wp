<!-- お問い合わせページ -->
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div class="wrapper page-profile">

		<!-------------------------------------------------- 
		- ヘッダー
		---------------------------------------------------->
		<?php get_template_part('src-php/10_common/_header'); ?>


		<!-------------------------------------------------- 
		- メイン
		---------------------------------------------------->
		<main>
			<div class="container">

				<!-- プロフィール -->
				<section id="profile" class="page-profile__profile wow fadeInUp">
					<?php get_template_part('src-php/20_component/03_profile/_profile'); ?>
				</section>

				<!-- スキル -->
				<section id="skill" class="page-profile__skill wow fadeInUp">
					<?php get_template_part('src-php/20_component/03_profile/_skill'); ?>
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