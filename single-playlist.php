<?php get_header()  ?>

<?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?> 
 
<div class="playlistbigviewstyles" style="background-image: url('<?= the_post_thumbnail_url(); ?>');" >  <!-- <php the_post_thumbnail -->

            <div class="big-view">
              <p class="htitre"><?php the_title() ?></p> <!--  SOPRANO LIVRE UN MESSAGE HUMANISTE -->
              <?= '<p class="paragraphdesc">' . get_the_excerpt() . '</p>' ?> <!-- the_excerpt() --><!-- En ce moment, la capitale anglaise fourmille de manieurs de mot talentueux aux lyrics acérés, comme Skepta, Novelist, Stormzy, Little Simz. Mais à l'exception d'un ou deux artistes... -->
              <a href="<?php the_permalink() ?>">
                <button class="play-link playbutton"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/play-btn.png" class="play-link"/></button>
              </a>
              
      <?php else: ?>
      <a href="#"><img src=""/>HELLO</a>
    <?php endif ?>
              <div class="home-carousel">
                  <!--<button class="pagination-button">
                    <img alt="previous" width="40px;" src="#"/>
                  </button> -->
                  <ul id="autoWidth" class="cS-hidden">
                  <li class="item-a">
                  <div class="carouselcontainer">

                  <div>
                    <a href="<?php the_permalink() ?>" title="<?= esc_attr(get_the_title()) ?>">
                      <div class="">
                        <img src="https://zupimages.net/up/19/35/slwh.jpg" class="carouselItem"/>
                        <p>jkhkjhkjhkhk</p>
                        <p><?= sprintf(__('Published on %s at %s', 'playose'), get_the_date(), get_the_time()) ?></p>
                      </div>
                    </a>
                  </div>
                </li>

                <li class="item-b">

                  <div>
                    <a href="#">
                      <div class="">
                        <img src="https://zupimages.net/up/19/35/15m6.jpg" class="carouselItem" />
                        <p>jkhkjhkjhkhk</p>
                      </div>
                    </a>
                  </div>
                </li>

                <li class="item-c">

                  <div>
                    <a href="#">
                      <div class="">
                        <img src="https://zupimages.net/up/19/35/22vx.jpg" class="carouselItem"/>
                        <p>jkhkjhkjhkhk</p>
                      </div>
                    </a>
                  </div>
                </li>

                <li class="item-d">

                  <div>
                    <a href="#">
                      <div class="">
                        <img src="https://zupimages.net/up/19/35/ryg5.jpg" class="carouselItem"/>
                        <p>jkhkjhkjhkhk</p>
                      </div>
                    </a>
                  </div>
                </li>

                <li class="item-e">

                  <div>
                    <a href="#">
                      <div class="">
                        <img src="https://zupimages.net/up/19/35/bbq8.jpg" class="carouselItem"/>
                      </div>
                    </a>
                  </div>
                </li>

                 <!-- <button class="pagination-button">
                    <img src="#" alt="next" width="40"/>
                  </button> -->

                </div>
                  </ul>
              </div>
              <?php endwhile; ?>


        <?php else : ?>
          <h2><?= __('No posts found', 'playose') ?></h2>
        <?php endif; ?>
            </div>
        

       <!-- <div class="body-cards">
          <div class="head-gradient">
            <!-- <cardgenerator/> 
            <div class="grid-template">
              <div class="first modefirst card_i">
                <img src="image/disiz.jpeg"/>
                <article>
                  <h2 class="playose_news_playlist">PLAYLIST</h2>
                  <p class="paragraph_playose_news_playlist">POUR LA SORTIE DE SON ALBUM DISIZILLA NOUS AVONS RENCONTRÉ DISIZ</p>    
                </article>
              </div>
              <div class="second modesecond  card_i">
                <img src="image/josman.jpeg"/>
                <article>
                  <h2 class="playose_news_playlist">PLAYLIST</h2>
                  <p class="paragraph_playose_news_playlist">JOSMAN, ÉTOILE MONTANTE DU RAP FRANÇAIS</p>    
                </article>
              </div>
              <div class="second modethird card_i">
                <img src="image/sch.jpeg"/>
                <article>
                  <h2 class="playose_news_playlist">PLAYLIST</h2>
                  <p class="paragraph_playose_news_playlist">SCH, LE NOUVEAU BARON DU RAP</p>    
                </article>
              </div>
            </div>
            <div class="grid-template tip">
              <div class="second modefour card_i">
                <img src="playlist_image/image sans texte/play2.png"/>
                <article>
                  <h2 class="playose_news_playlist">PLAYLIST</h2>
                  <p class="paragraph_playose_news_playlist">SCH, LE NOUVEAU BARON DU RAP</p>    
                </article>
              </div>
              <div class="second modefive card_i">
                <img src="playlist_image/image sans texte/play46.png"/>
                <article>
                  <h2 class="playose_news_playlist">PLAYLIST</h2>
                  <p class="paragraph_playose_news_playlist">SCH, LE NOUVEAU BARON DU RAP</p>    
                </article>
              </div>
              <div class="first modesix card_i">
                <img src="playlist_image/image sans texte/play3.png"/>
                <article>
                  <h2 class="playose_news_playlist">PLAYLIST</h2>
                  <p class="paragraph_playose_news_playlist">SCH, LE NOUVEAU BARON DU RAP</p>    
                </article>
              </div>
            </div> -->
           <!-- <div class="card-manager-btn">
              <button class="red-btn">Plus</button>
            </div> -->
        <!--  </div>
          
        </div> -->

        
      </div>
      </header>  
      
    <div class="rt">
      <div class="boxactuality">
        <div class="contentactuality">
          <img src="image/disiz.jpeg"/>
          <article>
            <div class="dateac">
            <h2 class="playose_news_playlist">ACTUALITÉS</h2>
          
            </div>
            <p class="paragraph_playose_news_playlist">POUR LA SORTIE DE SON ALBUM DISIZILLA NOUS AVONS RENCONTRÉ DISIZ</p>    
          </article>
        </div>
      </div>

      <div class="boxactuality">
        <div class="contentactuality">
          <img src="image/sch.jpeg"/>
          <article>
            <h2 class="playose_news_playlist">ACTUALITÉS</h2>
            <p class="paragraph_playose_news_playlist">SCH, LE NOUVEAU BARON DU RAP</p>    
          </article>
        </div>
      </div>

      <div class="boxactuality">
        <div class="contentactuality">
          <img src="data:image/jpeg;base64,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"/>
          <article>
            <h2 class="playose_news_playlist">ACTUALITÉS</h2>
            <p class="paragraph_playose_news_playlist">JOSMAN, ÊTOILE MONTANTE DU RAP FRANÇAIS</p>    
          </article>
        </div>
      </div>

      <div class="boxactuality">
        <div class="contentactuality">
          <img src="data:image/jpeg;base64,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 "/>
          <article>
            <h2 class="playose_news_playlist">ACTUALITÉS</h2>
            <p class="paragraph_playose_news_playlist">LE RETOUR DE SHAY AVEC LE CLIP DE " JOLIE "</p>    
          </article>
        </div>
      </div>

      <div class="boxactuality">
        <div class="contentactuality">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRPmhF1PUGcb1e5FBaLZdTmivEPd6zXEwiJ6Q&usqp=CAU"/>
          <article>
            <h2 class="playose_news_playlist">ACTUALITÉS</h2>
            <p class="paragraph_playose_news_playlist">MAROC, VA T-ELLE CONQUÉRIR LE RAP GAME ?</p>    
          </article>
        </div>
      </div>

      <div class="boxactuality">
        <div class="contentactuality">
          <img src="data:image/jpeg;base64,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"/>
          <article>
            <h2 class="playose_news_playlist">ACTUALITÉS</h2>
            <p class="paragraph_playose_news_playlist">LA JEUNE CHANTEUSE BELGE ANGÈLE LIVRE UN PREMIER ALBUM DÉLICIEUX</p>    
          </article>
        </div>
      </div>
    </div> 
    
    <div class="plusac">
      <button >Plus</button>
    </div>

<?php get_footer() ?>