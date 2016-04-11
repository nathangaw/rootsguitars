<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<header>
	<img src="app/themes/guitarstheme/assets/images/largenonretina.jpg">

<br>
<br>
<h1 class="container col-md-12">Front page</h1>
<div class="container">
	<div class="col-md-3">
		<p>Some test text to see how text works...</p>
	</div>
	<div class="col-md-6">
		<p>And some more text...</p>
	</div>