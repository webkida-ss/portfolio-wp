jQuery(function () {

	/*********************************************
	 * WOW初期化
	 *********************************************/
	new WOW().init();

	/*********************************************
	 * WOW hover時のクラス
	 *********************************************/
	jQuery('#js-twitter').add('#js-github').hover(
		function () {
			jQuery(this).addClass('animated pulse');
		},
		function () {
			jQuery(this).removeClass('animated pulse');
		}
	);

	/*********************************************
	 * スムーススクロール
	 *********************************************/
	let header = jQuery('.header').innerHeight();
	let speed = 500;
	var urlHash = location.hash; // ID取得
	// 画面レンダリングされた際に実行：外部リンクからのクリック時
	if (urlHash) {
		jQuery('body,html').stop().scrollTop(0); // スクロールを0に戻す
		setTimeout(function () { // ロード時の処理を待ち、時間差でスクロール実行
			let position = jQuery(urlHash).offset().top - header;
			jQuery('body,html').stop().animate({
				scrollTop: position
			}, speed);
		}, 100);
	}

	// ヘッダーのリンクを押下
	jQuery('a.header__nav--link').click(function () {
		let href = jQuery(this)[0].href; // http://localhost:3000/#contact ：お問い合わせ押下時
		if (href.indexOf('#') === -1) {
			return true; // # を含んでいない場合は遷移
		}

		let splitedHref = href.split('#');
		let splitedlocationHref = location.href.split('#');
		if (splitedHref[0].replace(/\/$/g, '') != splitedlocationHref[0].replace(/\/$/g, '')) { // location.href：http://localhost:3000/#service：#serviceにいるとき
			return true; // ページが違う場合は遷移
		}

		// 同一ページ内スムーススクロール
		let id = '#' + splitedHref[1]; // #IDを取得
		let target = jQuery("#" == id ? "html" : id); // #のみならばhtmlタグ（トップ）に戻る
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
		}, speed);
		return false;
	});


	/*********************************************
	 * ヘッダー
	 *********************************************/
	// jQuery(window).scroll(function () {
	// 	if (jQuery(this).scrollTop() > 400) {
	// 		jQuery(".header").addClass("is-white");
	// 	} else {
	// 		jQuery(".header").removeClass("is-white");
	// 	}
	// })

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
		if (jQuery(window).width() > 559) { // is-checkedが残っているタブレット以上のサイズになった場合もバグる可能性あり
			let targetClass = drawerBtn.attr("data-target");
			jQuery("." + targetClass).removeClass('is-checked');
			// jQuery(".header").removeClass('is-white');
		} else { // スマホの時はヘッダーを白く
			// jQuery(".header").addClass('is-white');
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