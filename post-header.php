<header class="post">
<a href="<?php echo get_home_url(); ?>"><div class="hdr-logo"></div></a>
<div class="hdr-nav">

<?php 
wp_nav_menu( array(
	'theme_location'  => '',
	'menu'            => '', 
	'container'       => 'ul', 
	'container_class' => 'navbar', 
	'container_id'    => '',
	'menu_class'      => 'navbar', 
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
) );
?>


</div>


</header>