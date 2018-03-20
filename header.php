
<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <?php wp_head() ?>      
        <title><?php the_title(); ?> | <?php echo bloginfo('name') ?></title>
    </head>
    <body>
        
        <div class="container">
        <h1><?php the_title(); ?> | <?php echo bloginfo('name') ?></h1>