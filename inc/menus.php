<?php 
add_action('after_setup_theme', function () {
register_nav_menu('header', __('Main navigation', 'playose'));
});

add_action('widgets_init' , function () {
    register_sidebar([
        'id' => 'blog',
        'name' => __('Social Network', 'playose'), 
        /*'before_title' => '<div class="nav_rs-link">',
        'after_title' => '</div>' */
        'before_widget' => '<span>',
        'after_widget' => '</span>' 
    ]);
    // register_widget(Agencia_Social_widget::class); 
    register_sidebar([
        'id' => 'slider',
        'name' => __('Slider Playose', 'playose'),
        'before_widget' => '<div id="slider">',
        'after_widget' => '</div>'
    ]);
    register_sidebar([
        'id' => 'playlist_moment',
        'name' => __('Slider du moment de la page Playlist', 'playose'),
        'before_widget' => '<div class="playlist_container">',
        'after_widget' => '</div>'
    ]);
    register_sidebar([
        'id' => 'buttongroupe',
        'name' => __('Plateforme musicale', 'playose'),
        'before_widget' => '<div class="buttongroupe">',
        'after_widget' => '</div>'
    ]);

    register_sidebar([
        'id' => 'sidebarlistedesarticles',
        'name' => __('Sidebar de la liste des articles', 'playose'),
        'before_widget' => '<div>',
        'after_widget' => '</div>'
    ]);

});
