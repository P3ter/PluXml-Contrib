<?php include(dirname(__FILE__).'/header.php'); ?>

	<div id="section">

		<div id="article">
				
			<div id="breadcrumbs">		
            			Vous êtes ici : <?php eval($plxShow->callHook('filAriane', ' &#187 ')); ?>
			</div>

			<h1><?php $plxShow->artTitle(''); ?></h1>
			<p class="art-topinfos"><?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor() ?> - <?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></p>
			<div class="art-chapo"><?php $plxShow->artContent(); ?></div>
			<p class="art-infos"><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> - <?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?></p>
			<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>
			<?php eval($plxShow->callHook('MySocialButtons')) ?>
			<?php eval($plxShow->callHook('SocialButtons')) ?>
			<?php include(dirname(__FILE__).'/commentaires.php'); ?>
		</div>

		<?php include(dirname(__FILE__).'/sidebar.php'); ?>

	</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
