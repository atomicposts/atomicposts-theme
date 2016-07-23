<div class="search-box">
    <form method="get" id="searchform" action="<?php echo home_url(); ?>/">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar..." value="<?php the_search_query(); ?>" name="s" id="s" />
            <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">Ir</button>
            </span>
        </div>
        <!-- /input-group -->
    </form>
</div>




