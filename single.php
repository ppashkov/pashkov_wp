<!DOCTYPE html>
<html lang="en">
<?php 
	get_header();
?>
<body>

	<div class="post_bg">
	
	</div>
	<?php 
get_template_part('post-header');
?>
	<div class="post_wrapper">
	<?php while ( have_posts() ) :the_post(); ?>
	<br><br><br>
	<div class="post_name" style="font-family: 'Scada', sans-serif"><?php the_title(); ?></div>
	<br>
	<div class="post_info" ><pre style="font-family: 'Scada', sans-serif">Категория: <i><?php foreach( get_the_category() as $category ){ 
	echo $category->cat_name; 
}  ?></i>      Автор: <i><?php echo get_the_author() ?></i>    </pre></div>
	<br>
	<br>
	<div class="post_content" style="font-family: 'Scada', sans-serif">
		<?php the_content(); ?>
		<br>
		<br>
		<?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>
	</div>

	

	<?php endwhile; ?> 



	</div>



	<?php 
get_template_part('post-footer');
?>

</body>
</html>


















