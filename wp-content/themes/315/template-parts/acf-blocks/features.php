<?php 
    /* 
    
    Block: Features block

    */

    $heading = get_sub_field('heading');
?>
<section id="features" class="section features mx-2 my-2">
    <div class="container">
        <?php if($heading) : ?>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-12 heading">
                <?php echo $heading; ?>
            </div>  
         </div>
        <?php endif; ?>
        <?php if( have_rows('features_list') ): ?>
            <ul class="row features_list">
                <?php while( have_rows('features_list') ): the_row(); 
                    $icon = get_sub_field('icon');
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                ?>
                    <li class="features_list--item col-lg-4 col-md-6 col-12">
                        <div class="features_list--item--inner content-block">
                            <?php if( !empty( $icon ) ): ?>
                                <img class="features_list--item--icon" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                            <?php endif; ?>
                            <?php if($title) : ?>
                                <h3><?php echo $title; ?></h3>
                            <?php endif; ?>
                            <?php if($content) : ?>
                                <div class="features_list--item--content"><?php echo $content; ?></div>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
