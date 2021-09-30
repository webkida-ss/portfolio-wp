<div class="works">
	<h2 class="section-title">Works</h2>
	<div class="works__container">


		<?php
		$args = array(
			'post_type' => 'work', // 投稿タイプ：制作実績
			'order' => 'DESC',
		);
		// 投稿取得
		$the_query = get_posts($args);
		if ($the_query) :
		?>
			<ul class="works__list">
				<?php foreach ($the_query as $post) : setup_postdata($post); ?>

					<li class="works__item">
						<a href="<?php the_field('work_url'); ?>">
							<div class="works__img">
								<img src="<?php the_post_thumbnail(); ?>" alt="サムネイル">
							</div>
							<p><?php the_title(); ?></p>
							<p><?php the_field('work_subtitle'); ?></p>
						</a>
					</li><!-- /.works__item -->

				<?php endforeach; ?>
			</ul><!-- /.works__list -->
		<?php endif;
		wp_reset_postdata(); ?>
	</div>
</div>