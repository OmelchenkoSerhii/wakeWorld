<?php 
    /* 
    
    Block: Content Image Slider block

    */

    $heading = get_sub_field('heading');
?>
<section id="content-image-slider" class="section content-image-slider mx-2 my-2">
    <div class="container">
        <?php if($heading) : ?>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-12 heading">
                <?php echo $heading; ?>
            </div>  
         </div>
        <?php endif; ?>
        <?php if( have_rows('content-image-slider_list') ): ?>
            <ul class="content-image-slider_list mt-n5 mb-n5">
                <?php while( have_rows('content-image-slider_list') ): the_row(); 
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                ?>
                    <li class="content-image-slider_list--item mb-5 mt-5">
                        <div class="content-image-slider_list--item--inner content-block">
                            <?php if( !empty( $image ) ): ?>
                                <img class="content-image-slider_list--item--icon" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <div class="content-image-slider_list--item--content--wrapper col-md-6 col-12">
                                <?php if($title) : ?>
                                    <h3><?php echo $title; ?></h3>
                                <?php endif; ?>
                                <?php if($content) : ?>
                                    <div class="content-image-slider_list--item--content"><?php echo $content; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
