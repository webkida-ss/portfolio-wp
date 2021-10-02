<div class="profile">
	<h2 class="section-title">プロフィール<span>profile</span></h2>
	<div class="inner profile__container">

		<div class="profile__imgs">
			<div class="profile__icon"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/profile-icon-transparent.png'); ?>" alt="アイコン"></div>
			<div class="profile__sns">
				<a href="https://twitter.com/webkida1" class="wow" id="js-twitter">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/sns/twitter.png'); ?>" alt="twitter"></a>
				<a href="https://github.com/webkida-ss" class="wow" id="js-github">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/sns/github.png'); ?>" alt="github"></a>
			</div>
		</div><!-- /.profile__imgs -->

		<div class="profile__content">
			<?php the_content(); ?>
		</div><!-- /.profile__context -->

	</div>
</div>