<?php

    $args = [

        'post_type' => 'cars',
        //  'meta_key' => 'colour',
        //  'meta_value' => 'White',
        // 'posts_per_page' => '0',

    ];


    $query = new WP_Query($args);

?>

<?php if($query->have_posts() ):?>

    <?php while( $query->have_posts() ) : $query->the_post();?>

    <div class="card mb-3">

        <div class="card-body">

        <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" 
                class="img-fluid mb-3 img-thumbnail">

    
            <h3><?php the_title();?></h3>

            <?php the_field('registration');?>

        </div>

    </div>

    <?php endwhile;?>

<?php endif;?>