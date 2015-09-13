<?php get_header(); ?>

<?php

$args = array(
	"post_type" => "gallery",
	"orderby" => "menu_order",
	"order" => "ASC",
	"posts_per_page" => -1
);
$galleries = new WP_Query($args);

?>


<div class="arrow-wrap">
	<img class="up-arrow" src="<?php bloginfo('template_directory'); ?>/assets/images/arrow.png" />
</div>

<section class="design">
    <h2>design</h2>
	<img class='icon' src="<?php bloginfo('template_directory'); ?>/assets/images/work-icon.png" />
	<div class="isotope">
		<?php while ($galleries->have_posts()) : $galleries->the_post(); ?>
			<div class="item" 
				style="background-image: url('<?php echo get_field("image_for_homepage")['sizes']['large']; ?>');">
				<div class="overlay">
					<div class="text-wrap">
						<span><b><?php the_title(); ?></b><br>
						<?php the_field('sub_title'); ?></span>
					</div>
				</div>
				<?php foreach (get_field('gallery') as $image) : ?>
					<a class="gallery" href="<?php echo $image['sizes']['large']; ?>"></a>
				<?php endforeach; ?>
			</div>
		<?php endwhile; ?>
	</div>
</section>

<section class="about">
	<h2>about</h2>
	<img class='icon' src="<?php bloginfo('template_directory'); ?>/assets/images/about-icon.png" />
	<p>Hi. <b>I love art.</b><br/>
	I design. I paint. I observe.</p>
	<a class="resume" href="<?php echo get_field('resume'); ?>" target="_blank">resume</a>
</section>

<section class="contact">
	<h2>contact</h2>
	<img class='icon' src="<?php bloginfo('template_directory'); ?>/assets/images/contact-icon.png" />
	<p>kateboyd213@gmail.com<br/>
	301.525.2857</p>
</section>

<?php get_footer(); ?>