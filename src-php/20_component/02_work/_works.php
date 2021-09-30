<div class="works">
	<h2 class="section-title">制作実績<span>works</span></h2>
	<div class="inner works__container">

		<?php
		$args = array(
			'post_type' => 'work', // 投稿タイプ：制作実績
			'order' => 'DESC',
			'posts_per_page' => 6,
		);
		// 投稿取得
		$the_query = get_posts($args);
		if ($the_query) :
		?>
			<ul class="works__list">
				<?php foreach ($the_query as $post) :
					setup_postdata($post);
					$post_id = $post->ID;
				?>

					<li class="works__item">
						<a href="<?php the_field('work_url'); ?>">
							<div class="works__img">
								<?php the_post_thumbnail(); ?>
							</div>
							<p><?php the_title(); ?></p>
							<p><?php the_field('work_subtitle'); ?></p>
						</a>
					</li><!-- /.works__item -->

				<?php endforeach; ?>
			</ul><!-- /.works__list -->
		<?php endif;
		wp_reset_postdata(); ?>

		<!-- ベーシック認証 -->
		<div class="works__basic">
			Basic認証には以下を入力してください。<br>
			ユーザID： <span class="works__userid" id="js-userid">webkidaworks</span>
			パスワード： <span class="works__password" id="js-password">8pCtk0FFmQnOE</span>
		</div><!-- /.works__basic -->

	</div>
</div>