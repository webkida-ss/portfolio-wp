jQuery(function () {

	/*********************************************
	 * WOW初期化
	 *********************************************/
	new WOW().init();

	/*********************************************
	 * スムーススクロール
	 *********************************************/
	jQuery('a[href^="#"]').click(function () {
		let header = jQuery('.header').innerHeight();
		let speed = 500;
		let id = jQuery(this).attr("href"); // 遷移先ID（href属性）
		let target = jQuery("#" == id ? "html" : id); // #のみだhtmlタグ（トップ）に戻る
		let position = jQuery(target).offset().top - header; // 固定ヘッダー分引く
		// ヘッダーがfixedでない場合
		if (jQuery(".header").css("position") !== "fixed") {
			position = jQuery(target).offset().top;
		}
		if (position < 0) {
			position = 0;
		}
		jQuery("html, body").animate({
				scrollTop: position
			},
			speed
		);
		return false;
	});

	/*********************************************
	 * ドロワー
	 * jQuery
	 *********************************************/
	let drawerBtn = jQuery("#js-drawer");
	drawerBtn.on("click", function (e) {
		e.preventDefault();
		let targetClass = jQuery(this).attr("data-target");
		jQuery("." + targetClass).toggleClass("is-checked"); // for-drawerクラスがついてる要素をトグルでis-checked
		return false;
	});
	// リンク選択時にドロワーを閉じる
	jQuery('.js-drawer-item').on('click', function (e) {
		let targetClass = drawerBtn.attr("data-target");
		jQuery("." + targetClass).removeClass('is-checked');
	});
	jQuery(window).resize(function () {
		if (jQuery(window).width() > 559) {
			let targetClass = drawerBtn.attr("data-target");
			jQuery("." + targetClass).removeClass('is-checked');
		}
	});

	/*********************************************
	 * ユーザID/パスワード クリップボードコピー
	 * clickイベントに引数を指定！eventオブジェクトから取得！
	 *********************************************/
	function execCopy(e) {
		let text = e.data;
		// コピーする媒体となるテキストエリアを生成
		let clipboard = jQuery('<textarea></textarea>');
		clipboard.text(text);
		// body直下に一時的に挿入
		jQuery('body').append(clipboard);
		// 選択状態にする
		clipboard.select();
		// WebExtension APIのブラウザ拡張の仕組みを呼び出しクリップボードにコピー
		document.execCommand('copy');
		// 不要なテキストエリアを削除
		clipboard.remove();
		alert('コピーしました：' + text);
	}
	let userid = jQuery('#js-userid');
	userid.click(userid.text(), execCopy);
	let password = jQuery('#js-password');
	password.click(password.text(), execCopy);

});