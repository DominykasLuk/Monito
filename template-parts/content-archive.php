<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="<?php the_post_thumbnail_url()  ?>" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text"><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink() ?>" class="btn btn-primary">Go somewhere</a>
    </div>
</div>