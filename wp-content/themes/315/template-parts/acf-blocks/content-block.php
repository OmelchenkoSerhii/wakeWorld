<?php 
    /* 
    
    Block: Content block

    */

    $content = get_sub_field('content');
?>
<section id="content" class="section content mx-2 my-2">
    <div class="container">
        <?php if($content) : ?>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-12">
                <?php echo $content; ?>
            </div>  
         </div>
    <?php endif; ?>
</section>
