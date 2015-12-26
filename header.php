<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<meta name="keywords" content="Joshua Kayani, Josh Kayani, Kayani, kayani, josh kayani, jkayani">
	<meta name="description" content="The personal blog of aspiring web developer Josh Kayani">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/icon.png" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>