<!-- データ -->
<?php
global $userid;
global $password;
?>

<!-- 本文 -->
<div class="work-item">
	<div class="inner work-item__container">

		<div class="work-item__wrapper">
			<!-- モックアップ画像 -->
			<div class="work-item__mockup">
				<img src="<?php the_field('work_mockup'); ?>" alt="モックアップ">
			</div>
			<!-- 内容 -->
			<div class="work-item__content">
				<h2 class="work-item__title"><span><?php the_title(); ?></span></h2>
				<dl class="work-item__list">
					<div class="work-item__list--item">
						<dt>サイト概要</dt>
						<dd><?php the_field('work_overview'); ?></dd>
					</div>
					<div class="work-item__list--item">
						<dt>サイトURL</dt>
						<?php $url = get_field('work_url'); ?>
						<dd><a href="<?php echo $url; ?>"><?php echo $url; ?></a></dd>
					</div>
					<div class="work-item__list--item">
						<dt>担当内容</dt>
						<dd><?php the_field('work_role'); ?></dd>
					</div>
				</dl><!-- /.work-item__list -->
			</div><!-- /.work-item__content -->
		</div><!-- /.work-item__wrapper -->

		<!-- ベーシック認証 -->
		<?php if (get_field('work_basic') == 1) : ?>
			<div class="work__basic">
				Basic認証には以下を入力してください。<br>
				ユーザID： <span class="work__userid" id="js-userid"><?php echo $userid; ?></span>
				パスワード： <span class="work__password" id="js-password"><?php echo $password; ?></span>
			</div><!-- /.work__basic -->
		<?php endif; ?>

		<!-- 前後ボタン -->
		<div class="work-item__links">
			<div class="util-link work-item__link">
				<?php previous_post_link('%link', '前の制作詳細'); ?>
			</div>
			<div class="util-link work-item__link">
				<?php next_post_link('%link', '次の制作詳細'); ?>
			</div>
		</div>

	</div>
</div>