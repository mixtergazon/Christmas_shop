<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css.css">
    <title>Christmas Shop</title>
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar_christmas">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_directory') ?>/img/logo.png"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
                    	<?php wp_nav_menu( array(
                    		'theme_location'  => '',
                    		'menu'            => '',
                    		'container'       => 'ul',
                    		'container_class' => 'navbar-nav',
                    		'container_id'    => '',
                    		'menu_class'      => 'navbar-nav',
                    		'menu_id'         => '',
                    		'echo'            => true,
                    		'fallback_cb'     => 'wp_page_menu',
                    		'before'          => '',
                    		'after'           => '',
                    		'link_before'     => '',
                    		'link_after'      => '',
                    		'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                    		'depth'           => 0,
                    		'walker'          => '',
                    	) ); ?>
                    </div>
                </div>
            </nav>
        </div>
    </header>