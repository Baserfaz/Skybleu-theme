<?php register_nav_menus (
	array(
		'primary' => 'Primary navigation'
	));
?>

<?php register_sidebar (
	array(
		'name' => 'Home sidebar'
	));
?>

<?php register_sidebar (
	array(
		'name' => 'Header sidebar'
	));
?>

<?php add_theme_support( 'post-thumbnails' ); ?>
<?php add_theme_support( 'html5', array( 'search-form' ) ); ?>