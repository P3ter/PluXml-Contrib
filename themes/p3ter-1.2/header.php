<?php if(!defined('PLX_ROOT')) exit; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>">

<head>

	<title><?php $plxShow->pageTitle(); ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>
	
	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.png" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/style.css" media="screen" />
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/ie.css" media="screen" />
	<![endif]-->
	<?php $plxShow->templateCss() ?>

	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
</head>
<body>

	<?php $plxShow->callHook('ThemeStartBody') ?>
	<div id="banner">
		<div id="logo-menu">	
			<ul class="static-pages">
				<?php $plxShow->staticList('','<li id="#static_id" class="#static_status"><a href="#static_url" title="#static_name">#static_name</a></li>'); ?>
			</ul>
			<div class="title"><?php $plxShow->mainTitle('link'); ?></div>
			<p><?php $plxShow->subTitle(); ?></p>
			<ul>			
				<?php $plxShow->catList('','<li id="#cat_id" class="#cat_status"><a href="#cat_url" title="#cat_name">#cat_name</a></li>'); ?>			
			</ul>
		</div>
	</div>

<div id="main">
