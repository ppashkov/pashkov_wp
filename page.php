<!DOCTYPE html>
<html lang="en">
	<?php get_header() ?>
	<body>
		<div class="bg2"></div>
		<div class="bg1"></div>
		<main>
			<div class="panel">
				<div class="btn night" style="background-image: url(<?php bloginfo('template_directory')?>/img/moon.png);"></div>
				<div class="btn day" style="background-image: url(<?php bloginfo('template_directory')?>/img/sun.jpg);"></div>
			</div>
			<div class="s1bg wow fadeIn" data-wow-delay=".5s"></div>
			<section class="me anchor">

				<div class="me2">
					<div class="s1_photo wow fadeIn"><div class="photo" style="background-image: url(<?php bloginfo('template_directory')?>/img/photo.jpg);"></div></div>
				<div class="s1_name wow fadeIn txt" data-wow-delay=".2s">Павел Пашков</div>
				<div class="s1_info wow fadeIn txt" data-wow-delay=".3s">Студент, 19 лет. Учусь в Черноморском Национальном Университете имени Петра Могилы на факультете Компьютерных наук, кафедре Инженерии программного обеспечения. </div>

				</div>
			</section>
			<section class="skills">
					<div class="s2_name wow slideInUp txt">Навыки:</div>
					<div class="skills_row">
						<div class="skill wow fadeInUp">
							<div class="skill_ico" style="background-image: url(<?php bloginfo('template_directory')?>/img/html5.png)"></div></div>
						<div class="skill wow fadeInUp" data-wow-delay=".1s">
							<div class="skill_ico" style="background-image: url(<?php bloginfo('template_directory')?>/img/css3.png);"></div></div>
							<div class="skill wow fadeInUp" data-wow-delay=".2s">
							<div class="skill_ico" style="background-image: url(<?php bloginfo('template_directory')?>/img/sass.png);"></div></div>
						<div class="skill wow fadeInUp" data-wow-delay=".3s">
							<div class="skill_ico" style="background-image: url(<?php bloginfo('template_directory')?>/img/js.png);"></div></div>
						<div class="skill wow fadeInUp" data-wow-delay=".4s">
							<div class="skill_ico" style="background-image: url(<?php bloginfo('template_directory')?>/img/jq.png);"></div></div>
						<div class="skill wow fadeInUp" data-wow-delay=".5s">
							<div class="skill_ico" style="background-image: url(<?php bloginfo('template_directory')?>/img/gulp.png);"></div></div>
					</div>
			</section>
			<section class="wtl anchor">
				<div class="goalm">
					<div class="goal">
					<div class="s3_name wow fadeInUp txt">Цель:</div>
				<div class="s3_goal1 wow fadeInUp txt" data-wow-delay=".1s">
					На этой практике я хочу получить новые знания и опыт в сфере WEB разработки. 
				</div>
				</div>
				<a href="https://github.com/ppashkov/pashkov.github.io"><div class="ghlink wow fadeInUp" data-wow-delay=".2s"></div></a>
				</div>
			</section>
			<section class="content">
					<div class="s4_name wow fadeInUp txt">Почему WEB разработка?</div>
					<div class="s4_info wow fadeInUp txt" data-wow-delay=".1s">
						Интернет — это почти 3,5 миллиарда пользователей и свыше миллиарда сайтов. Стремительное развитие информационных технологий привело к появлению профессий, о которых 10 лет назад никто даже не думал. Верхние строчки в рейтингах самых востребованных и высокооплачиваемых IT-специальностей занимает профессия веб-разработчика. <a href="http://pashkov.wp/?p=15" class="txt">Дальше...</a>
					</div>
					<div class="gotop wow fadeInUp" data-wow-delay=".2s">
							<a href="#"><img src="<?php bloginfo('template_directory')?>/img/up.png" width="50px" height="50px" alt="" id="go-top"></a>
					</div>
			</section>
			<section class="posts">
			<div class="s5_name wow fadeInUp txt">Статьи</div>
		
		<div class="postrow">
		
			<!-- <div class="post">
				<a href="">
				<div class="postimg"></div>
				<div class="postname">Какое-то длинное название кееек</div>
				</a>
			</div> -->

				<?php
$args = array(
	'numberposts' => 6,
	'category'    => 0,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);

$posts = get_posts($args);

foreach ($posts as $post):
   $post_title = $post->post_title;
   $post_url = get_permalink($post->post_ID);
 
   
?>

  <div class="post wow fadeInUp">
   <a href="<?php echo $post_url; ?>">
	<div class="postimg">
	</div>
	<div class="postname txt">
	<?php echo $post_title; ?>
	</div>
   </a>
  <?php 
 
  ?>
   </div>
<?php endforeach; ?>
			
			
		</div>

			</section>
		</main>
		

	<script src="<?php bloginfo('template_directory')?>/js/jquery-3.3.1.min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/jquery.animate-colors-min.js"></script>
	<script src="<?php bloginfo('template_directory')?>/js/wow.min.js"></script>
 <script src="<?php bloginfo('template_directory')?>/js/script.min.js"></script>
 <script src="<?php bloginfo('template_directory')?>/js/form.js"></script>
  <script>
	  new WOW().init();
  </script>


	</body>
</html>