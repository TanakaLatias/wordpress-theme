<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="google-site-verification" content="Uh1BvaVDuHQy2GcYMKtI0G5yUxf-xYKzyZsxPvnOIic" />
    <meta name="keywords" content="English, Japanese, student, study, learn, TVshow">
    <meta name="description" content="<?php echo esc_html(meta_description()); ?>">
    <?php wp_head(); ?>
</head>
<body>
	<header>
        <div class="header-text shadow">
            <div class="header-left">
                <p class="header-title"><strong><a href="<?php echo esc_url( home_url( "/" )); ?>"><?php bloginfo( "name" ); ?></a></strong></p>
                <p class="header-desc"><?php bloginfo( "description" ); ?></p>
            </div>
            <div class="header-right">
                <p><a href="<?php echo esc_url( home_url( "/about" )); ?>">About</a></p>
                <p><a href="<?php echo esc_url( home_url( "/archive-list" )); ?>">Archive</a></p>
                <p><a href="<?php echo esc_url( home_url( "/category-list" )); ?>">Categories</a></p>
            </div>
        </div>
    </header>

    <main>
    <div class="index">