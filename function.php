<?php
/*------------------------------------*\
    取得目前網站的網址
\*------------------------------------*/
	function site_url(){
	    $host  = $_SERVER['HTTP_HOST'];
		$baseurl = "http://" . $host . "/godcup";
		echo $baseurl;
	}
	// function page_url(){
	// 	$host  = $_SERVER['HTTP_HOST'];
	// 	$filename = $PATHINFO_FILENAME['filename'];
	// 	$pageurl = "http://" . $host . "/godcup". "/" . $filename;
	// 	echo $pageurl;
	// }

/*------------------------------------*\
    載入網站資源
\*------------------------------------*/
//載入 js 
// function esImportJs(){
// 	$ver = '1.0';
// 	wp_register_script('tinymce', get_template_directory_uri() . '/assets/js/tinymce.min.js', array('jquery'), $ver, null);
// 	wp_enqueue_script('tinymce');
// 	wp_register_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), $ver, null);
// 	wp_enqueue_script('slick');
// 	wp_register_script('jquery3.6.0', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array('jquery'), $ver, null);
// 	wp_enqueue_script('jquery3.6.0');
// 	wp_register_script('jqueryui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array('jquery'), $ver, null);
// 	wp_enqueue_script('jqueryui');
// 	wp_register_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), $ver, null);
//     wp_enqueue_script('scripts');
// }
// add_action( 'init', 'esImportJs' );
//載入 css


?>