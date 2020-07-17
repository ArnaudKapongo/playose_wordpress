<?php get_header(); ?>
<section class="article">
    <?php while(have_posts()): the_post(); ?>

     <div class="part1">
         <?php if (has_post_thumbnail()): ?>
        
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>
       
    <img src="<?= $backgroundImg[0]; ?>"  class="imageofarticle"/>
    <div class="articletextcontainer posarticletextcontainer">
        <div class="toptext">
            <p class="titlearticle"><?php the_title() ?></p>
            <p class="author"> par <?php the_author() ?>, <?= sprintf(__('Publié le %s à %s', 'playose'), get_the_date(), get_the_time()) ?></p>
        </div>
        <br/>
        <div class="bottext">
         <!-- <p class="titledesc"> <?php the_excerpt() ?> </p> -->
          <div class="desc">
            <p class="key"> 

            
            <?php the_content(); ?>
            </p>
          
          </div>
        </div>
    </div>
   <!-- <div class="article-iframe">
      <iframe 
    width="600px"
    height="450px"
    src="https://open.spotify.com/embed/album/1DFixLWuPkv3KT3TnV35m3" class="iframearticle">
      </iframe>
    </div> -->
  </div>
  <div class="part2">

    <?php dynamic_sidebar('buttongroupe') ?>
   <?php dynamic_sidebar('sidebarlistedesarticles') ?>
   
  </div>


  <!-- side responsive -->
 <!-- <div class="hola">
  <img src="https://zupimages.net/up/19/32/ye3b.jpg"  class="imageofarticle"/>
  </div> -->
  <div class="v-mob">
    <img src="<?php echo $backgroundImg[0]; ?>"  class="imageofarticle"/>
    
    <?php dynamic_sidebar('buttongroupe') ?>
      <div class="articletextcontainer">

      <div class="toptext">
        <p class="titlearticle"><?php the_title() ?></p>
        <p class="author">par <?php the_author() ?>, <?= sprintf(__('Publié le %s à %s', 'playose'), get_the_date(), get_the_time()) ?></p>
    </div>
    <br/>
    <div class="bottext">
      <!-- <p class="titledesc"> <?php the_excerpt() ?> </p> -->
      <div class="desc">
        <p class="key"> 
        <?php the_content(); ?>
        </p>
      
      </div>
      <?php endif ?>
    </div>
  </div>
  
    <div class="v-mob-bottom">
      <h3>Autre playlist</h3>
     <!-- <a href="#">
        <div class="">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/playlist_image/rihanna.png" class="sideplaylistbottom"/>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/playlist_image/queens.png" class="sideplaylistbottom"/>
        </div>
      </a> -->
      
    </div>

  </div>
   </section>
<?php endwhile;  wp_reset_postdata(); ?>
<?php get_footer(); ?>