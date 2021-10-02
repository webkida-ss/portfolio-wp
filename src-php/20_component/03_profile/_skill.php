<!-- データ -->
<?php
$array_skill = [
	["HTML", "HTML", "html.png"],
	["Sass", "Sass <br> (CSS)", "sass.png"],
	["JavaScript", "JavaScript<br>(jQuery)", "javascript.png"],
	["WordPress", "WordPress", "wordpress.png"],
	["Git", "Git", "git.png"],
	["gulp", "gulp", "gulp.png"],
	["Java", "Java<br>(Spring)", "java.png"],
	["Vue", "Vue", "vue.png"],
	["Xd", "Xd", "xd.png"],
	["Ps", "Ps", "photoshop.png"],
];
?>

<!-- 本文 -->
<div class="skill">
	<h2 class="section-title">スキル<span>skill</span></h2>
	<div class="inner skill__container">

		<ul class="skill__list">
			<?php foreach ($array_skill as $item) : ?>
				<li class="skill__item">
					<div class="skill__item--img">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/skill/' . $item[2]); ?>" alt="<?php echo $item[0]; ?>">
					</div>
				</li>
			<?php endforeach; ?>
		</ul>

	</div>
</div>