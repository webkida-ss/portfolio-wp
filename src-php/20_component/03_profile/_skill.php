<!-- データ -->
<?php
$array_skill = [
	["HTML", "HTML", "", "html.png"],
	["Sass", "Sass", "(CSS)", "sass.png"],
	["JavaScript", "JavaScript", "(jQuery)", "javascript.png"],
	["WordPress", "WordPress", "", "wordpress.png"],
	["Git", "Git", "", "git.png"],
	["gulp", "gulp", "", "gulp.png"],
	["Xd", "Xd", "", "xd.png"],
	["Ps", "PhotoShop", "", "photoshop.png"],
	["Java", "Java", "(Spring)", "java.png"],
	["Vue", "Vue", "", "vue.png"],
];
?>

<!-- 本文 -->
<div class="skill">
	<h2 class="section-title">スキル<span>skill</span></h2>
	<div class="inner skill__container">

		<!-- スキル概要 -->
		<div class="skill__content">
			<p>コーディング業務全般が好き、得意！</p>
			<p>保守性の高いコーディングが得意！</p>
			<p>デザインツールからのコーディング可能！</p>
			<p>アプリ開発も可能！</p>
		</div><!-- /.skill__content -->

		<!-- スキル一覧 -->
		<ul class="skill__list">
			<?php foreach ($array_skill as $item) : ?>
				<li class="skill__item">
					<div class="skill__item--img">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/skill/' . $item[3]); ?>" alt="<?php echo $item[0]; ?>">
					</div>
					<p class="skill__item--title">
						<?php echo esc_html($item[1]);
						if (!empty($item[2])) : ?>
							<br>
						<?php echo esc_html($item[2]);
						endif; ?>
					</p>
				</li>
			<?php endforeach; ?>
		</ul>

	</div>
</div>