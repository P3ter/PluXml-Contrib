<?php if(!defined('PLX_ROOT')) exit; ?>

	<div id="aside">
		<h3>Réseaux Sociaux</h3>
		<div id=social>
			<a target="_blank" href="https://twitter.com/#!/p3terfr"><img src="<?php $plxShow->template() ?>/img/twitter.png" border="0"/></a>
			<a target="_blank" href="https://plus.google.com/106401069755585966657/posts?hl=fr"><img src="<?php $plxShow->template() ?>/img/google.png" border="0"/></a>
			<a target="_blank" href="http://www.youtube.com/user/P3terDickins0n"><img src="<?php $plxShow->template() ?>/img/youtube.png" border="0"/></a>
			<a target="_blank" href="http://feeds.feedburner.com/p3ter"><img src="<?php $plxShow->template() ?>/img/feed.png" border="0"/></a>
		</div>

		<h3><?php $plxShow->lang('CATEGORIES') ?></h3>
		<ul>
			<?php $plxShow->catList('','<li id="#cat_id" class="#cat_status"><a href="#cat_url" title="#cat_name">#cat_name</a></li>'); ?>
		</ul>
		
	    <h3><?php $plxShow->lang('TAGS') ?></h3>
		<p>
			<?php $plxShow->tagList('<a href="#tag_url" class="tag #tag_status">#tag_name</a> ', 20); ?>
		</p>

		<h3><?php $plxShow->lang('LAST_COMMENTS') ?></h3>
		<ul>
			<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(18)</a></li>'); ?>
		</ul>

		<h3><?php $plxShow->lang('LAST_ARTICLES') ?></h3>
		<ul>
			<?php $plxShow->lastArtList('<li class="#art_status"><a href="#art_url" title="#art_title">#art_title</a></li>'); ?>
		</ul>
		
	</div>