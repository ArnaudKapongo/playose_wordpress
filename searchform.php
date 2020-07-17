<form action="<?= esc_url(home_url('/')) ?>" class="nav-input">
          <input type="text" name="search" placeholder="<?= __('Recherche', 'playose') ?>" name="s" value="<?= get_search_query() ?>"/>
          <i class="fas fa-search"></i>
        
         <!-- <button type="submit">

          <svg class="icon">
              <use xlink:href=""></use>
          </svg>
          </button> -->
          
</form>

