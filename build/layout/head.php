<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<!-- encoding -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<!-- title -->
	<title>
	<?
		include('build/metas/pagetitle.txt');
		handle_subtitle();
	?>
	</title>

	<!-- base -->
	<base href="./" />

	<!-- meta -->
	<meta name="keywords"       content="<? include('build/metas/keywords.txt'); ?>" />
	<meta name="description"    content="<? include('build/metas/description.txt'); ?>" />
	<meta name="author"			content="Ron" />
	<meta name="publisher"		content="Ron" />
	<meta name="designer"		content="Ron" />
	<meta name="robots"			content="index,follow" />
	<meta name="revisit-after"	content="2 days" />

	<!-- icons -->
	<link href="build/images/icon_favicon.png" type="image/png" rel="shortcut icon" />
	<link href="build/images/icon_appicon.jpg" rel="apple-touch-icon-precomposed" />
	<meta name="msapplication-TileColor" content="#b80f2b"/>
	<meta name="msapplication-square150x150logo" content="build/images/icon_wintile.png"/>

	<!-- viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<meta name="format-detection" content="telephone=no">

	<!-- styles -->
	<link rel="stylesheet" type="text/css" href="build/styles/defaults.min.css" />
	<link rel="stylesheet" type="text/css" href="build/styles/theme.min.css" />

	<!-- jQuery -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>

	<!-- analytics tracking -->
	<? include('build/metas/analytics.txt'); ?>


</head>
<body>