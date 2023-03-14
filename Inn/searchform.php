<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" class="upper-header__search search">
    <div class="search__inputs-wrapper">
        <input type="search" class="search__input" name="s" id="s" placeholder="Поиск" />
        <button type="submit">
            <img src=<?php echo get_template_directory_uri() . "/assets/img/search.svg" ?> alt="Search"
                class="search__icon" />
        </button>
    </div>
</form>