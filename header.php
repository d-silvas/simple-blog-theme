<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">
    <!-- TODO: auto -->
    <link rel="shortcut icon" href="/wp-content/themes/simple-blog/assets/images/logo.png">
    <?php wp_head(); ?>
</head>

<body>

    <header class="header text-center">

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <?php
                if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }
                ?>

                <a class="navbar-brand" href="/">
                    <img src="<?= $logo[0] ?>" alt="logo" class="d-inline-block align-text-top" height="24">
                    <?= get_bloginfo('name') ?>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navigation" class="collapse navbar-collapse">
                    <?php
                    wp_nav_menu(array(
                        'menu' => 'primary',
                        'container' => 'empty',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul class="navbar-nav me-auto mb-2 mb-md-0">%3$s</ul>',
                    ));
                    ?>
                    <hr>
                    <ul class="social-list list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
                    </ul>
                    <!-- TODO search? -->
                </div>
            </div>
        </nav>
    </header>

    <div class="main-wrapper">
        <header class="page-title theme-bg-light text-center gradient py-5">
            <h1 class="heading"><?php the_title(); ?></h1>
        </header>