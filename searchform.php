<form autocomplete="off" class="header__search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
    <input class="header__searchInput" name="s" type="text" placeholder="検索したいキーワード ..."></input>
    <button type="submit" class="header__serachSubmit"><div class="header__searchSubmitText"><img src="<?php echo get_template_directory_uri(); ?>/imgs/search-icon.png"></div></button>
</form>