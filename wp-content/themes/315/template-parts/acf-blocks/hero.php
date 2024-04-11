<?php 
    /* 
    
    Block: Hero Banner block

    */

    $title = get_sub_field('title');
    $content = get_sub_field('content');
    $image = get_sub_field('image');
?>
<section class="section hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 col-12 hero_content--wrapper">
                <div class="content-block">
                    <?php if($title): ?>
                        <h1><?php echo $title; ?></h1>
                    <?php endif; ?>
                    <?php if($content): ?>
                        <?php echo $content; ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php if( !empty( $image ) ): ?>
                <div class="col-md-6 offset-lg-1 col-12">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
