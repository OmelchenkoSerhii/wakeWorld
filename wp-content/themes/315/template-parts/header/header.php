<?php 
$headerLogoWhite = get_field('upload_light_logo','option');

$hideNav = get_field('hide_navigation','option');

?>

<header id="header">
        <div class="header container">
                <div class="header__nav__wrapper">
                    <nav class="header__nav">

                        <div class="main-nav">
                            <?php wp_nav_menu( array('menu_id'=>'main-nav','container_class' => '','theme_location' => 'main-menu') ); ?>        
                        </div>
                        
                    </nav>
                </div>
		</div>
</header>
