<section class="section_contact">
        <div class="social_network_contact">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/qsn.png"/>
          <p>Pour en savoir plus sur Playose et sur la team</p>
          <button class="snet">Voir la page</button>
        </div>
        <div class="socail_network_fly">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.png"/>
          <p>Envoyez-nous vos projets, idées ou juste un encouragement !</p>
          <button class="snet">Contactez-nous</button>
        </div>
    </section>
    <footer class="playose_mark">
      <img src="<?= get_theme_mod('logo'); ?>"/>
    </footer>
  </div>

    <!-- DEBUT DU FOOTER -->
   <!-- <footer class="footer_playose">
        <div class="logo_playose">
          <img src="img/logo.png"/>
        </div>
    </footer>
     FIN DU FOOTER-->
     <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous">
  </script>
    <script>
      
         $(document).ready(function(){
        
        $('#autoWidth').lightSlider({
        autoWidth: true,
        loop: true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
          } 
        }); 
        

       }); 
       
    </script> 
    <?php wp_footer(); ?>
</body>
</html>