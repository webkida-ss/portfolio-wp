<!-- データ -->
<?php
$post_num = (is_int($args)) ? $args : 6; // 表示件数：デフォルト6件
$args = array(
	'post_type' => 'work', // 投稿タイプ：制作実績
	'order' => 'DESC',
	'posts_per_page' => $post_num,
);
$the_query = get_posts($args); // 投稿取得
?>

<!-- 本文 -->
<div class="work">
	<h2 class="section-title">制作実績<span>work</span></h2>
	<div class="inner work__container">

		<?php if ($the_query) : ?>
			<ul class="work__list">
				<?php foreach ($the_query as $post) :
					setup_postdata($post);
					$post_id = $post->ID;
				?>

					<li class="work__item">
						<a href="<?php the_permalink(); ?>">
							<div class="work__img">
								<?php the_post_thumbnail(); ?>
							</div>
							<p><?php the_title(); ?></p>
							<p><?php the_field('work_subtitle'); ?></p>
						</a>
					</li><!-- /.work__item -->

				<?php endforeach; ?>
			</ul><!-- /.work__list -->
		<?php endif;
		wp_reset_postdata(); ?>

		<!-- ベーシック認証 -->
		<div class="work__basic">
			Basic認証には以下を入力してください。<br>
			ユーザID： <span class="work__userid" id="js-userid">webkidawork</span>
			パスワード： <span class="work__password" id="js-password">8pCtk0FFmQnOE</span>
		</div><!-- /.work__basic -->

		<?php if (!is_post_type_archive()) : ?>
			<div class="util-link work__more">
				<a href="<?php echo esc_url(home_url()) . '/work'; ?>">もっと見る</a>
			</div>
		<?php endif; ?>

	</div>
</div>