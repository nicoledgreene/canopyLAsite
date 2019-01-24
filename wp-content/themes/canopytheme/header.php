<!doctype html>
<head <?php language_attributes(); ?>>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Canopy LA</title>
    <meta name="description" content="A sound and immersion studio in Los Angeles">
    <link rel="stylesheet" type="text/css" href="/styles/styles.css">
    <link rel="stylesheet" href="https://use.typekit.net/ysh4zhf.css">
    <link rel="stylesheet" type="text/css" href="/wordpress/fontawesome/css/fontawesome.css">
    <script type="text/javascript" src="https://unpkg.com/scrollreveal"></script>
    <script type="text/javascript" src="/wordpress/wp-content/themes/canopytheme/js/index.js"></script>
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>