<?php  

/* Template Name: Category actu page*/

?> 
<?php get_header() ?>

<div class="playlist_category_list">
    <div id="content_category">
        <header class="page-header_category">
            <h1 class="page-title_category">
                Archives de catégorie:
                <span><?php single_post_title() ?></span>
            </h1>
        </header>
        <article>
            <?php if(have_posts()) : ?>
                <?php 
            $query4 = new WP_Query([
              'posts_per_page' => 5,
              'category_name' => 'actualites'
            ]);
          while($query4->have_posts()): $query4->the_post(); ?> 
            <div class="contentlistarticle">
            <img src="<?php the_post_thumbnail_url(); ?>" height="140" width="470" class="categoryimg">
            <div class="contentlistarticlefix">    
           <a href="<?php the_permalink() ?>" class="contentlistarticlea"><?php the_title() ?></a>
           
            <p class="contentlistarticlep">
                <?php  get_the_excerpt(); ?>
            </p>
           
            </div>
            </div>
     
            <?php endwhile; wp_reset_postdata(); ?>

            <div class="paginate_links_pos">
            <?= paginate_links(); ?>
            </div>

            <?php else : ?>
                <h2>NO posts found</h2>
            <?php endif; ?>
        </article>
    </div>
    </div>

<?php get_footer() ?>