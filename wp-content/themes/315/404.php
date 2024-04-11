<?php get_header(); ?>

<div class="page-blocks">
        <div class="container txt--center">
                <section class="text--center section section--fullscreen">
                        <h1 class="h1 spacing-pb-40"><?php _e('Page not found.','WakeWorld'); ?></h1>
                        <?php echo button(__('Back to home','WakeWorld'),get_home_url(),'_self','button--bg'); ?>
                </section>
            </div>
        </div>
</div>
<?php get_footer(); ?>
