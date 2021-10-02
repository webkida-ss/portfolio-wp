<!-- データ -->
<?php
$array_service = [
	['コーディング', 'cording.png'],
	['レスポンシブ対応', 'ipad.png'],
	['デザイン', 'design.png'],
	['サーバ契約', 'server.png'],
	['ドメイン契約', 'domain.png'],
	['セキュリティ対策', 'security.png'],
	['運用保守', 'operation.png'],
	['Google Workspace', 'googleworkspace.png'],
	['SEO対策', 'seo.png'],
	['MEO対策', 'meo.png'],
	['公式LINE構築', 'line.png'],
	['SNS運用', 'sns.png'],
];
?>

<!-- 本文 -->
<div class="service">
	<h2 class="section-title">サービス<span>service</span></h2>
	<div class="inner service__container">
		<div class="service__lead">
			Webサイト構築からMEO対策、SNS運用などWeb関連のお仕事なんでもまずはご相談ください！<br>
			コーディング・デザインに加え、 サーバ契約からサイト公開・運用サポートまで一括で承ります。<br>
			既存サイトの改修 / WordPress化、 新規のLP / HP制作、WordPress構築いずれも対応可能です。<br>
			ご気軽にご相談ください！
		</div>
		<ul class="service__list">
			<?php foreach ($array_service as $item) : ?>
				<li class="service__item">
					<div class="service__item--img">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/service/' . $item[1]); ?>" alt="<?php echo esc_html($item[0]); ?>">
					</div>
					<p class="service__item--text"><?php echo esc_html($item[0]); ?></p>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>