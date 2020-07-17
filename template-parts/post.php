<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); ?>

<div class="playlistbigviewstyles" style="background-image: url('<?php echo $backgroundImg[0];?>');" >  <!-- <php the_post_thumbnail -->
            <div class="big-view">
              <p class="htitre"><?php the_title() ?></p> <!--  SOPRANO LIVRE UN MESSAGE HUMANISTE -->
              <?= '<p class="paragraphdesc">' . get_the_excerpt() . '</p>' ?> <!-- the_excerpt() --><!-- En ce moment, la capitale anglaise fourmille de manieurs de mot talentueux aux lyrics acérés, comme Skepta, Novelist, Stormzy, Little Simz. Mais à l'exception d'un ou deux artistes... -->
              <a href="<?php the_permalink() ?>">
                <button class="play-link playbutton"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/play-btn.png" class="play-link"/></button>
              </a>
    