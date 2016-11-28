<?php if(!defined('PLX_ROOT')) exit; ?>

	<header role="banner">
		<h1>
			<?php $plxShow->mainTitle('link'); ?>
		</h1>
		<h2>
			<?php $plxShow->subTitle(); ?>
		</h2>
	</header>

    <nav role="navigation">
		<ul id="static-nav">
			<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?>
			<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
		</ul>
	</nav>

    <nav class="share-icons">
        <a class="flattr" onclick="window.open(this.href);return false;" title="Flattr !" href="https://flattr.com/submit/auto?user_id=P3ter&url=http://p3ter.fr&title=<?php $plxShow->mainTitle(); ?>&description=<?php $plxShow->mainTitle(); ?>&language=fr_FR&tags=blog&category=text" rel="nofollow"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/flattr/flattr-32.png" alt="Flattr" /></a>
        <a class="twitter" onclick="window.open(this.href);return false;" title="Twitter" href="https://twitter.com/P3terFr" rel="nofollow"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/twitter/twitter-32.png" alt="Twitter" /></a>
        <a class="googleplus" onclick="window.open(this.href);return false;" title="Google +" href="https://plus.google.com/+PedroCADETE" rel="nofollow"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/googleplus/googleplus-32.png" alt="Google Plus" /></a>
        <a class="github" onclick="window.open(this.href);return false;" title="Github" href="https://github.com/P3ter" rel="nofollow"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/github/github-32.png" alt="Github" /></a>
        <a class="youtube" onclick="window.open(this.href);return false;" title="Youtube" href="https://www.youtube.com/user/P3terDickins0n" rel="nofollow"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/youtube/youtube-32.png" alt="Youtube" /></a>
        <a class="flux" onclick="window.open(this.href);return false;" title="Flux RSS" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" rel="nofollow"><img src="<?php $plxShow->template(); ?>/img/simple-icons-master/icons/rss/rss-32.png" alt="Flux RSS" /></a>
    </nav>

	<aside role="complementary">

		<h3><?php $plxShow->lang('CATEGORIES'); ?></h3>
		<ul><?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a></li>'); ?></ul>

        <h3>Rechercher</h3>
        <?php eval($plxShow->callHook('MySearchForm')) ?>

		<h3><?php $plxShow->lang('LATEST_ARTICLES'); ?></h3>
		<ul><?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?></ul>

		<h3><?php $plxShow->lang('TAGS'); ?></h3>
		<ul><?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?></ul>

		<h3><?php $plxShow->lang('LATEST_COMMENTS'); ?></h3>
		<ul><?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(40)</a></li>'); ?></ul>

		<h3><?php $plxShow->lang('ARCHIVES'); ?></h3>
		<ul><?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?></ul>

        <h3><?php eval($plxShow->callHook('showBlogrollHead')); ?></h3>
        <ul><?php eval($plxShow->callHook('showBlogroll')); ?></ul>

        <p class="rss"><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><?php $plxShow->lang('ARTICLES'); ?></a></p>
        <p class="rss"><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS'); ?></a></p>

	</aside>
