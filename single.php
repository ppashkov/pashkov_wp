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
	<div id="postid" style="display: none"><?php $post_id = get_the_ID();
	echo $post_id; ?>
	</div>
		<div class="overlay"></div>
		<div class="popup">
		<div class="close_window">x</div>
		<form action="<?php bloginfo('template_directory')?>/handler.php" method="POST" id="cvform" enctype="multipart/form-data">

        	<p>Если вы нашли ошибку на данном веб-сайте, оставьте свой e-mail, комментарий, и прикрепленный скриншот</p>
            <input type="email" name="email" id="email" value="asd@gmailc.om" placeholder="E-mail" required>
            <input type="text" name="message"  id="message" value="asdasdasdasd" placeholder="Комментарий" required>
            <input type="file" id="file" multiple="multiple" name="screen" accept=".jpg, .jpeg, .png, .pdf, .gif, .bmp"  > 
            <input type="submit" value="Отправить"> 
            <span id="msg"></span>
          
        </form>
		</div>


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

<script src="<?php bloginfo('template_directory')?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/script.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/form.js"></script>

</body>
</html>


















