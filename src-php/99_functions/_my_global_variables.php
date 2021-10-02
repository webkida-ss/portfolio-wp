<?php

/************************************************************************
 * グローバル変数を定義
 ************************************************************************/

function my_global()
{
	global $userid;
	$userid = 'webkidawork';
	global $password;
	$password = '8pCtk0FFmQnOE';
}
add_action('after_setup_theme', 'my_global');
