<header class="header">
	<div class="inner header__inner">

		<h2 class="header__title"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.png'); ?>" alt="サイトロゴ"></h2>

		<!-- ドロワーメニュー -->
		<div class="header__drawer for-drawer" id="js-drawer" data-target="for-drawer">
			<div class="header__drawer--bars">
				<div class="header__drawer--bar"></div>
				<div class="header__drawer--bar"></div>
				<div class="header__drawer--bar"></div>
			</div>
		</div>
		<div class="header__drawer-bg for-drawer"></div><!-- ドロワー背景 -->

		<!-- ナビゲーションリンク -->
		<nav class="header__nav for-drawer">
			<ul class="header__nav--list">
				<li class="header__nav--item"><a href="#top" class="header__nav--link js-drawer-item">Top</a></li>
				<li class="header__nav--item"><a href="#profile" class="header__nav--link js-drawer-item">Profile</a></li>
				<li class="header__nav--item"><a href="#service" class="header__nav--link js-drawer-item">Service</a></li>
				<li class="header__nav--item"><a href="#skill" class="header__nav--link js-drawer-item">Skill</a></li>
				<li class="header__nav--item"><a href="#works" class="header__nav--link js-drawer-item">Works</a></li>
				<li class="header__nav--item"><a href="#contact" class="header__nav--link js-drawer-item">Contact</a></li>
			</ul>
		</nav>
	</div><!-- /.header__inner -->
</header><!-- /.header -->