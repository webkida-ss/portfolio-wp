<!-- お問い合わせページ -->
<!DOCTYPE html>
<html lang="en">

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
		<div class="container">
			<main class="main">

				<!-- プロフィール -->
				<section id="profile" class="page-profile__profile">
					<?php get_template_part('src-php/20_component/03_profile/_profile'); ?>
				</section>

				<!-- スキル -->
				<section id="profile" class="page-profile__skill">
					<?php get_template_part('src-php/20_component/03_profile/_skill'); ?>
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