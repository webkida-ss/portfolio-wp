<!-- データ -->
<?php
$array_skill = [
	["HTML", "HTML", "html.png"],
	["Sass", "Sass(CSS)", "sass.png"],
	["JavaScript", "JavaScript(jQuery)", "javascript.png"],
	["WordPress", "WordPress", "wordpress.png"],
	["Git", "Git", "git.png"],
	["gulp", "gulp", "gulp.png"],
	["Java", "Java(Spring)", "java.png"],
	["Vue", "Vue", "vue.png"],
	["Xd", "Xd", "xd.png"],
	["Ps", "PhotoShop", "photoshop.png"],
];
?>

<!-- 本文 -->
<div class="skill">
	<h2 class="section-title">スキル<span>skill</span></h2>
	<div class="inner skill__container">

		<!-- スキル概要 -->
		<div class="skill__content">
			<?php the_field('profile_skill'); ?>
		</div><!-- /.skill__content -->

		<!-- スキル一覧 -->
		<ul class="skill__list">
			<?php foreach ($array_skill as $item) : ?>
				<li class="skill__item">
					<div class="skill__item--img">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/skill/' . $item[2]); ?>" alt="<?php echo $item[0]; ?>">
					</div>
					<p class="skill__item--title"><?php echo esc_html($item[1]); ?></p>
				</li>
			<?php endforeach; ?>
		</ul>

	</div>
</div>