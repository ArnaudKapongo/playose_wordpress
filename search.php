<?php get_header(); ?>
 
<?php if(have_posts()):  while(have_posts()): the_post(); ?> 

<?php the_title(); ?>
<h4><?php the_content(); ?></h4>

<?php endwhile; else : ?>
    <p><?php  esc_html_e('Sorry, no posts matched your criteria'); ?></p>
<?php endif; ?>
      

<?php get_footer(); ?>