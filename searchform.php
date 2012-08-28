<form role"search" class="form-search" method="get" action="<?php echo home_url( '/' ); ?>">
    <input name="s" type="text" class="search-query" placeholder="Search" value="<?php the_search_query(); ?>">
    <button type="submit" class="btn pull-right">Search</button>
</form>
