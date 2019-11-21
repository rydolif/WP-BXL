<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?php the_field('favicon', 'option'); ?>">

	<meta name="theme-color" content="#000">
	<meta property="og:image" content="<?php the_field('preview', 'option'); ?>">

</head>

	<?php wp_head(); ?>

<body>

	<?php get_template_part( 'parts/header' ); ?>


