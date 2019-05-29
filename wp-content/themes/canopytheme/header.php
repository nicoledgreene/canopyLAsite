<!doctype html>
<!-- Web development by Nicole Greene. -->
<!-- Web design & branding by Angela Kowalski. -->
<head <?php language_attributes(); ?>>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Canopy LA</title>
    <meta name="description" content="A sound and immersion studio in Los Angeles">

    <link rel="stylesheet" href="https://use.typekit.net/ysh4zhf.css">
    <link rel="stylesheet" href="https://use.typekit.net/ysh4zhf.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
    <div id="wptime-plugin-preloader"></div>
</head>